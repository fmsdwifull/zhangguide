<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>掌柜的理财平台</title>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/login.css" rel="stylesheet" type="text/css" media="all" />
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div class="login">
  	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
  
  
    <br/><br/>
	<span style="font-size:15px; color:white">用户名：</span><input type="text" name="LoginForm[username]" class="login-input" placeholder="" autofocus>
     <br/>
 	<span style="font-size:15px; color:white">密 &nbsp;&nbsp;码：</span><input type="password" name="LoginForm[password]" class="login-input" placeholder="">
	<br/>
	 	<span style="font-size:15px; color:white">验证码：</span><input type="text" name="LoginForm[yanzhen]" id="checkout" placeholder="">
	<div id="bbb">
	<?php
	$this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,
			'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer')))?>
			</div>
	
	
<!--    	<span style="font-size:15px; color:white">验证码：</span><input type="text" name="check" id="check">
	<br/> -->
	<div id="btn">
		<input type="submit" value="登陆"  name="login_xxx" class="login-submit">
	
		<input type="submit" value="注册" name="register_xxx" class="login-submit">

	</div>
 <?php $this->endWidget(); ?>

 </div>
</body>
</html>
