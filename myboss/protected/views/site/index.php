<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>	掌柜的理财平台</title>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/index.css" rel="stylesheet" type="text/css" media="all" />
	 <style type="text/css">
  a{
  cursor:pointer;
    }
 </style>
<script type="text/javascript" src="jquery/jquery-1.11.2.min.js"></script>
<script src="highcharts/highcharts.js"></script>
<script type="text/javascript">
  var img1="<img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/images/b_1.jpg' />";
  var img2="<img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/images/b_2.jpg' />";
  var img3="<img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/images/b_3.jpg' />";

  var arrays=[img1,img2,img3,img3];
  //document.writeln(arrays[0]);
  var i=0;
  function picture(){
  document.getElementById("imgId").innerHTML=arrays[i];
  i++;
 if(i==4)
  {                                           
     i=0;
  }  
  }
  setInterval("picture()",3000);
//document.bgColor="#46768";

  function out(i){
		document.getElementById("imgId").innerHTML=arrays[i];
	}


</script>
 
</head>

<body>
<div id="container">
	<div id="headerx">
	    
	    <div id="biaozhi">
			掌柜的理财平台
		</div>
		
		<div id="loginx">
			您好，请先 <a href="/myboss/index.php?r=site/login">登陆</a>
		</div>
		<div id="menux">
    
			<a href="/myboss/index.php?r=BossUser/create">用户注册</a></li> |
			<a href="#">帮助中心</a></li> |

			<a href="#">友情链接</a></li>  

		

		</div>
		
	</div>
	
	<div id="barx">
		<div id="barx-left">
			<div id="barx-title">掌柜的理财</div>
		</div>
		
		<div class="barx-right">
            <ul>  
				<li><a href="/myboss/index.php?r=BossConsumer/account">报表</a></li>  
				<li><a href="javascript:void(0);">金融理财</a></li>  

                <li><a href="/myboss/index.php?r=BossConsumer/create">每日记账</a></li>  
				<li><a href="/myboss/index.php">主页</a></li>  
			</ul>
		</div>
	</div>
	<div id="topx">

	<div style="position:absolute;top:310px;left:860px">
		<a onclick="out(0)"><a><span style="font-weight:bold;color:while">1</span></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a onclick="out(1)">2</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a onclick="out(2)">3</a>
	</div>
	<div id="imgId"><img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/images/b_2.jpg' /></div>
	
	</div>
	
	<div id="mainx">
		<div id="mainx-left">
			<a href="#"><img id=obj src ="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/bar_r4_c1.gif" width=325 height=325 border =0></a>
		</div>
		<div id="mainx-mid">
			<a href="#"><img id=obj src ="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/bar_r4_c3.gif" width=326 height=325 border =0></a>
		</div>
		<div id="mainx-right">
			<a href="#"><img id=obj src ="<?php echo Yii::app()->request->baseUrl; ?>/assets/images/bar_r4_c5.gif" width=325 height=325 border =0></a>
		</div>
	</div>
	
	<div id="pagebody">
   
	</div>
	<div id="footer">
		<a href="">版权归掌柜的金融平台所有，联系我们</a>
	</div>
</div>
</body>
</html>
