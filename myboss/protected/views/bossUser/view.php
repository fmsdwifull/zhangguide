<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>	掌柜的理财平台</title>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/bossuser_view.css" rel="stylesheet" type="text/css" media="all" />

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
			您好 ,请您<a href="index.php?r=site/logout"><span style="font-size:15px margin-top:0px">&nbsp;登陆或返回首页</span></a>
			

		

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
				<li><a href="/myboss/index.php?r=bossConsumer/account">报表</a></li>  
                <li><a href="javascript:void(0);">金融理财</a></li> 

                <li><a href="/myboss/index.php?r=bossConsumer/create">每日记账</a></li>  
				<li><a href="/myboss/index.php">主页</a></li>  
                 
			</ul>
		</div>
	</div>

	
	<div id="mainx">

	</div>
	
	<div id="pagebody">
		<span style="text-align:left"><h4 >&nbsp;注册成功，您的用户名称为 <?php echo $model->user_name; ?>。请您 &nbsp;<a href="index.php?r=site/logout">登陆</a>&nbsp;您的注册详情如下：</h4></span>
        
		<?php $this->widget('zii.widgets.CDetailView', array(
		    	'data'=>$model,
			    'attributes'=>array(
				'user_id',
				'user_type',
				'user_name',
				'user_password',
				'user_createtime',
				'user_email',
				'user_telephone',
				'user_profile',
			),
		)); ?>
		</span>

	</div>
	<div id="footer">
		<a href="">版权归掌柜的金融平台所有，联系我们</a>
	</div>
</div>
</body>
</html>


