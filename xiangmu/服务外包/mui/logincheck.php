<?php
header("Content-Type: text/html;charset=utf-8"); 
$con = mysql_connect("localhost", "root", "123456");

//判断是否链接
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//是否链接到数据库
$db_selected = mysql_select_db("day1105", $con);

if (!$db_selected)
  {
  die ("Can\'t use test_db : " . mysql_error());
  }
  
//查询数据库
$sql = "SELECT * FROM test";
$aaa = mysql_query($sql,$con);

?>


<?php  
    if(isset($_POST["submit"]) && $_POST["submit"] == "登录")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
        }  
        else  
        {  
            mysql_connect("localhost","root","123456");  
            mysql_select_db("day1105");  
            mysql_query("set names 'gbk'");  
            $sql = "select username,password from test where username = '$_POST[username]' and password = '$_POST[password]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
//          echo "111";
            if($num)  
            {  
                $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中  
                header("Location: shouye.html"); 
                session_start();
 								$_SESSION['user'] = trim($_POST['username']);
            }  
            else  
            {  
                echo "<script>alert('您输入的密码有误，请重新输入！');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('登录失败！'); history.go(-1);</script>";  
    }  
  
?> 
 