<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>	掌柜的理财平台</title>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/consumer.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="jquery/jquery-1.11.2.min.js"></script>
<script src="highcharts/highcharts.js"></script>
 
</head>

<body>
<div id="container">
<div id="headerx">
	    
	    <div id="biaozhi">
			掌柜的理财平台 
		</div>
		
		<div id="loginx">
			您好 <a href="#"><span style="font-size:15px margin-top:0px"><?php echo Yii::app()->user->name ?></span></a>
			 <a href="index.php?r=site/logout">退出</a>

		

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

	
	<div id="mainx">

	</div>
	
	<div id="pagebody">
<div class="formxx">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'boss-user-form',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>
	<br/>

	
		<?php echo $form->labelEx($model,'user_type'); ?>
		<?php echo $form->textField($model,'user_type',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'user_type'); ?>
<br/><br/>


		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	
<br/><br/>

		<?php echo $form->labelEx($model,'user_password'); ?>
		<?php echo $form->passwordField($model,'user_password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'user_password'); ?>
<br/>	<br/>

		<?php echo $form->labelEx($model,'user_createtime'); ?>
		<?php echo $form->textField($model,'user_createtime',array('value'=>date('Y-m-d H:i:s',time()))); ?>
		<?php echo $form->error($model,'user_createtime'); ?>
<br/><br/>
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'user_email'); ?>
<br/><br/>
		<?php echo $form->labelEx($model,'user_telephone'); ?>
		&nbsp;&nbsp;<?php echo $form->textField($model,'user_telephone',array('size'=>20,'maxlength'=>26)); ?>
		<?php echo $form->error($model,'user_telephone'); ?>
<br/><br/>
		<?php echo $form->labelEx($model,'user_profile'); ?>
		&nbsp;&nbsp;<?php echo $form->textArea($model,'user_profile',array('rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'user_profile'); ?>
		
<br/><br/>		
	 	<?php echo $form->labelEx($model,'yanzhen'); ?></span><input type="text" name="BossUser[yanzhen]" id="checkout" placeholder="">
<nobr>
	<?php
	$this->widget('CCaptcha',array('showRefreshButton'=>false,'clickableImage'=>true,
			'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style'=>'cursor:pointer')))?>
<nobr/>		
<br/><br/>

		<input type="submit" value="注册">

	

<?php $this->endWidget(); ?>

</div><!-- form -->
	</div>
	<div id="footer">
		<a href="">版权归掌柜的金融平台所有，联系我们</a>
	</div>
</div>
</body>
</html>
