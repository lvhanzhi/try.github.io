 <?php
header("Content-Type: tex/html;charset=utf-8"); 
$con = mysql_connect("localhost", "root", "123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("day1105", $con);

if (!$db_selected)
  {
  die ("Can\'t use test_db : " . mysql_error());
  }
$sql = "SELECT * FROM test";
$aaa = mysql_query($sql,$con);

?>
 <?php  
    if(isset($_POST["submit"]) && $_POST["submit"] == "注册")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        $confirm = $_POST["confirm"];  
        if($user == "" || $psw == "" || $confirm == "")  
        {  
            echo "<script>alert('信息不完整'); history.go(-1);</script>";  
        }  
        else{   
                mysql_connect("localhost","root","123456");   //连接数据库  
                mysql_select_db("day1105");  //选择数据库  
                mysql_query("set names 'utf-8'"); //设定字符集  
                $sql = "select username from test where username = '$_POST[username]'"; //SQL语句  
                $result = mysql_query($sql);    //执行SQL语句  
                $num = mysql_num_rows($result); //统计执行结果影响的行数  
                if($num)    //如果已经存在该用户  
                {  
                    echo "<script>alert('用户名已存在！'); history.go(-1);</script>";  
                }  
                else    //不存在当前注册用户名称  
                {  
                    $sql_insert = "insert into test (username,password,confirm) values('$_POST[username]','$_POST[password]','$_POST[confirm]')";  
                    $res_insert = mysql_query($sql_insert);  
                    //$num_insert = mysql_num_rows($res_insert);  
                    if($res_insert)  
                    {  
                        header("Location: shouye.html"); 
                         session_start();
 						 $_SESSION['user'] = trim($_POST['username']); 
                    }  
                    else  
                    {  
                        echo "<script>alert('系统繁忙，请稍后重试'); history.go(-1);</script>";  
                    }  
                }  
        }  
    }  
    else  
    {  
        echo "<script>alert('注册未成功！'); history.go(-1);</script>";  
    }  
?> 