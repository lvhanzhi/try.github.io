<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
   <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css " rel="stylesheet">
   <title></title>
   <script src="js/mui.min.js"></script>
    <link href="css/mui.min.css" rel="stylesheet"/>
    <script type="text/javascript" charset="utf-8">
      	mui.init();
    </script>
    <style type="text/css">
    	.mui-bar-tab .mui-tab-item.mui-active{
         color: grey /* 这里放你想要的颜色 */
}
.mui-bar .mui-icon:active{
color: grey
}
    	#hudong span{
    		margin-left: 15px;
    		display: inline-block;
    	}
    	#hudong li{
    		display: inline-block;
    		list-style-type: none;
    		float:left;
            margin-right: 50px;
    	}
    	　.mui-table-view-cell:after{
         height:0;
         }
    </style>
    
</head>
<body>
	<header class="mui-bar mui-bar-nav" style="background-color:gray;height:65px;position: fixed;border: none;border-bottom:0;">
		<div class="mui-input-row mui-search" style="margin-top:15px ;width: 80%;margin-left: 30px;">
		    <input type="search" class="mui-input-clear" placeholder="请输入搜索内容" style="background-color: rgba(255,255,255,.6);border-radius: 30px;">
		</div>
		<span class="mui-icon mui-icon-email" style="float: right;color: white;margin-top: -48px;"><p style="color: white;font-size: 10px;margin-left: 2px;"><a id="toxiaoxi" style="color: white;">消息</a></p></span>
	</header>
	
	
	<div class="mui-content" style="background-color:gray;height:74px;margin-top:60px;">
		<img src="image/LB1.jpg"/ style="width:40px;border-radius: 100%;height:40px;margin-left: 42px;margin-top:-35px;">
			<div id="text" style="margin-left: 90px;margin-top: -50px;">
				<h4 style="color: white;"><?php 
					session_start(); 
					echo $_SESSION['user']; 
					?>，您好<br><h5 style="color: white;">欢迎您，晚上好</h5></h4>
			</div>
			<h4 style="margin-left: 80%;margin-top: -9%;font-weight:400;"><a href="#" style="color: white;">设置</a></h4>
	</div>
	
	 <ul class="mui-table-view"> 
        <li class="mui-table-view-cell">
            <a class="mui-navigate-right" href="#">我的积分</a>
        </li>
    </ul>
     <ul class="mui-table-view"> 
        <li class="mui-table-view-cell">
            <a class="mui-navigate-right" href="#">我的收藏</a>
        </li>
    </ul>
     <ul class="mui-table-view"> 
        <li class="mui-table-view-cell">
            <a class="mui-navigate-right" href="#">我的文件</a>
        </li>
    </ul>
     <ul class="mui-table-view"> 
        <li class="mui-table-view-cell">
            <a class="mui-navigate-right" href="#">发现招聘</a>
        </li>
    </ul>
    
    
    <div id="hudong"  style="background-color: white;margin-top:0px;height:220px;border-top: 1px solid gainsboro;">
    	<h4 style="padding-top:40px;margin-top: -24px;margin-left: 35px;font-weight:bolder;">我的互动</h4>
    	<div style="height:140px;background-color: white;width:360px;">
    		<ul>
    			
    			<li> 
    			<a><span class="mui-icon mui-icon mui-icon-contact" ></span></a>
    	        <p style="color: black;">日常打卡</p>
    			</li>
    			
    			<li> 
    			<a style="color:orange;"><span class="mui-icon mui-icon-pengyouquan"></span></a>
    	        <p style="color: black;">我的圈子</p>
    			</li>
    			
    			<li>
    			<a style="color: blue;" ><span class="mui-icon mui-icon-chatboxes"></span></a>
    	        <p style="color: black;">我的评论</p>
    			</li>
    			
    			<li>
    			<a style="color: red"><span class="mui-icon mui-icon-list"></span></a>
    	        <p style="color: black;">交易明细</p>
    			</li>
    			
    			<li> 
    			<a style="color: rgb(45,149,122);"><span class="mui-icon mui-icon-chatbubble" ></span></a>
    	        <p style="color: black;">我的问答</p>
    			</li>
    			
    			<li> 
    			<a style="color: black;"><span class="mui-icon mui-icon-loop" ></span></a>
    	        <p style="color: black;">历史记录</p>
    			</li>
    			
    			<li> 
    			<a style="color: greenyellow;"><span class="mui-icon mui-icon-weixin" ></span></a>
    	        <p style="color: black;">我的分享</p>
    			</li>
    			
    			<li> 
    			<a style="color: deepskyblue;"><span class="mui-icon mui-icon-mic"></span></a>
    	        <p style="color: black;">科技通讯</p>
    			</li>
    		</ul>
    	</div>
    	
    </div>

    <div class="mui-content" style="background-color: white;margin-top: 30px;height:260px;">
    	<h4 style="margin-top: -30px;margin-left: 35px;font-weight:bolder;">百宝箱</h4>
    	<p style="float: right;margin-top: -25px;margin-right: 30px;">查看更多工具</p>
    	<a class="mui-action-back mui-icon mui-icon-arrowright" style="float: right;position: absolute;left:330px;margin-top: -23px;color: gray;font-size: 15px;"></a>
    	<div id="hudong"  style="background-color: white;margin-top:0px;height:220px;border-top: 1px solid gainsboro;">
    	<div style="height:140px;background-color: white;width:360px;">
    		<ul>
    			
    			<li> 
    			<a style="color: red;"><span class="mui-icon mui-icon-star" ></span></a>
    	        <p style="color: black;">我的关注</p>
    			</li>
    			
    			<li> 
    			<a style="color: royalblue;"><span class="mui-icon mui-icon-bars"></span></a>
    	        <p style="color: black;">课程管理</p>
    			</li>
    			
    			<li>
    			<a style="color: orange;"><span class="mui-icon mui-icon-personadd"></span></a>
    	        <p style="color: black;">考核认证</p>
    			</li>
    			
    			<li>
    			<a style="color: greenyellow;"><span class="mui-icon mui-icon-locked"></span></a>
    	        <p style="color: black;">安全中心</p>
    			</li>
    			
    			<li> 
    			<a style="color: orange;"><span class="mui-icon mui-icon-chat" ></span></a>
    	        <p style="color: black;">招聘查询</p>
    			</li>
    			
    			<li> 
    			<a style="color: blue;"><span class="mui-icon mui-icon-spinner mui-spin" ></span></a>
    	        <p style="color: black;">版本更新</p>
    			</li>
    		</ul>
    	</div>
    </div> 

    <footer>
			<nav class="mui-bar mui-bar-tab" >
			    <a class="mui-tab-item mui-active" id="toshouye" >
			        <span class="mui-icon mui-icon-home"></span>
			        <span class="mui-tab-label">首页</span>
			    </a>
			    <a class="mui-tab-item" id="toxuexi" >
			        <span class="mui-icon mui-icon-compose"></span>
			        <span class="mui-tab-label">学习</span>
			    </a>
			    <a class="mui-tab-item" id="tozixun" >
			        <span class="mui-icon mui-icon-spinner-cycle mui-spin"></span>
			        <span class="mui-tab-label">咨询</span>
			    </a>
			    <a class="mui-tab-item" id="toMy"style="color: cornflowerblue;" >
			        <span class="mui-icon mui-icon-person"></span>
			        <span class="mui-tab-label">我的</span>
			    </a>
			</nav>
		</footer>
		<script type="text/javascript">
			 document.getElementById('toshouye').addEventListener('tap',function(){
           	mui.openWindow({
           		url:'shouye.html'
           	})
           });
 
           document.getElementById('toxuexi').addEventListener('tap',function(){
           	mui.openWindow({
           		url:'study.html'
           	})
           });
		
		     document.getElementById('tozixun').addEventListener('tap',function(){
           	mui.openWindow({
           		url:'zixun1.html'
           	})
           });
		
		     document.getElementById('toMy').addEventListener('tap',function(){
           	mui.openWindow({
           		url:'my.php'
           	})
           }); 
           
            
		</script>
</body>
</html>