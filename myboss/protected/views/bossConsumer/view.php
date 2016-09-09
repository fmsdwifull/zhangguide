<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>	掌柜的理财平台</title>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/consumer.css" rel="stylesheet" type="text/css" media="all" />


<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery/jquery-1.11.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/highcharts/highcharts.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/highcharts-line.js"></script>


 
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
	
	<div id="pagebodyxx" >
	<div style="padding-left:10px; ">
	    <br/>
		<span style="float:left ">您好，您此次的消费账单号为： <?php echo $model->consumer_id; ?>。&nbsp;详细如下：

		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'consumer_id',
				'consumer_bype',
				'consumer_name',
				'consumer_uintprice',
				'consumer_num',
				'consumer_totalprice',
				'consumer_year',
				'consumer_date',
				'consumer_time',
				//'consumer_timestamp',
				'consumer_week',
				'consumer_mon',
				'consumer_quarter',
				'consumer_datetime',
				'user_id',
				'consumer_profile',
			),
		)); ?>

    </div>
		
	</div>
	

	<div id="footer">
		<a href="">版权归掌柜的金融平台所有，联系我们</a>
	</div>
</div>
</body>
</html>
