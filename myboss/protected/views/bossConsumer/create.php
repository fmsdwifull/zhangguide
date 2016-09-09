<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>	掌柜的理财平台</title>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/css/consumer.css" rel="stylesheet" type="text/css" media="all" />


<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery/jquery-1.11.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/highcharts/highcharts.js"></script>
<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/highcharts-line.js"></script>-->


<script type="text/javascript">
	$(function () {
		var chart; 
			chart = new Highcharts.Chart({   
				chart: {   
					renderTo: 'right_box_butoom', //图表放置的容器，DIV   
					defaultSeriesType: 'line', //图表类型line(折线图),   
				},   
				credits: {   
					enabled: true   //右下角不显示LOGO   
				},   
				title: {   
					text: '' //图表标题   
				},   
				subtitle: {   
					text: ''  //副标题   
				},   
				xAxis: {  //x轴   
					categories: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月','11月', '12月'], //x轴标签名称   
					gridLineWidth: 1, //设置网格宽度为1   
					lineWidth: 2,  //基线宽度   
					labels:{y:26}  //x轴标签位置：距X轴下方26像素   
				},   
				yAxis: {  //y轴   
					title: {text: ''}, //标题   
					lineWidth: 2 //基线宽度   
				},   

				legend: {  //图例   
					layout: 'horizontal',  //图例显示的样式：水平（horizontal）/垂直（vertical）   
					backgroundColor: '#ffc', //图例背景色   
					align: 'left',  //图例水平对齐方式   
					verticalAlign: 'top',  //图例垂直对齐方式   
					x: 100,  //相对X位移   
					y: 60,   //相对Y位移   
					floating: true, //设置可浮动   
					shadow: true  //设置阴影   
				},   
				exporting: {   
					enabled: false  //设置导出按钮不可用   
				},   
				series: [  
				{  //数据列   
					name: '',   
					data: [ <?php echo $model->getTotals("consumer_mon","1");?>, <?php echo $model->getTotals("consumer_mon","2");?>, <?php echo $model->getTotals("consumer_mon","3");?>, <?php echo $model->getTotals("consumer_mon","4");?>, <?php echo $model->getTotals("consumer_mon","5");?>, <?php echo $model->getTotals("consumer_mon","6");?>,<?php echo $model->getTotals("consumer_mon","7");?>, <?php echo $model->getTotals("consumer_mon","8");?>, <?php echo $model->getTotals("consumer_mon","9");?>, <?php echo $model->getTotals("consumer_mon","10");?>, <?php echo $model->getTotals("consumer_mon","11");?>, <?php echo $model->getTotals("consumer_mon","12");?>]   
				}]   
		
	});
	});
</script>


 
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
	
	<div id="pagebody">
		<div id="pagebody-left">
			<div id="headimage">
				<img src='<?php echo Yii::app()->request->baseUrl; ?>/assets/images/1.jpg' width="200px" height="200px"; />
			</div>
			
			<div id="headname">
				王发财
			</div>
			
			<div id="totalcount">
				<br/>
				<?php 
	/* 				$user=$model;
					//echo Yii::app()->user->id;
					$arr=array(
						"select"=>"consumer_totalprice",  //要查询的字段
						"condition"=>"user_id =".Yii::app()->user->id,   //查询条件
					
					); 
					$ret=$user->findAll($arr);
					print_r($ret); */
					
					
				?>
				
			
				
				年总收入：<span style="font-weight:bold;color:red";>+<?php echo $model->getTotals("consumer_year",date("Y"));?> ￥</span><br/>  
				月总收入：<span style="font-weight:bold;color:red";>+<?php echo $model->getTotals("consumer_mon",date("m"));?> ￥</span><br/>
				周总收入：<span style="font-weight:bold;color:red";>+<?php echo $model->getTotals("consumer_week",date("W"));?> ￥</span><br/><br/>
			</div>
			
			<div id="detailcount">
				<div class="row">
					<div class="box_left"><div class="left-title">本日</div></div>
					<div class="box_right">
						<p align="left">&nbsp;收入：</p>
						<p align="left">&nbsp;支出：</p>
					</div>
				</div> 
				
				<div class="row">
					<div class="box_left"><div class="left-title"><p>本周</p></div></div>
					<div class="box_right">
						<p align="left">&nbsp;收入：</p>
						<p align="left">&nbsp;支出：</p>
					</div>
				</div>
				
				<div class="row">
					<div class="box_left"><div class="left-title"><p>本月</p></div></div>
					<div class="box_right">
						<p align="left">&nbsp;收入：</p>
						<p align="left">&nbsp;支出：</p>
					</div>
				</div>	
			</div>
			
			<div id="licaibtn">
			     <div id="mybtn"><a href="#">我的理财</a></div>
			</div>
		</div>
		<div id="pagebody-right">
			<div id="right_box_up">

				<div id="right_box_up_left">
					<span style='display:block;width:14px;line-height:15px;height:20px;margin:50px auto''>收入</span>
				</div>
				
							<div class="form">
								<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'boss-consumer-form',
						'enableAjaxValidation'=>false,
					)); ?>
				
				<div id="right_box_up_mid">
				
				    <br/>
					<div class="input-row">
						<?php echo $form->labelEx($model,'consumer_bype'); ?>
						<?php echo $form->dropDownList($model,'consumer_bype',array('1'=>'生活用品','2'=>'工作需要','3'=>'投资理财','4'=>'聚餐娱乐'),array('width'=>120,'maxlength'=>128));?>
					
						&nbsp;&nbsp;&nbsp;&nbsp;
			
						<?php echo $form->labelEx($model,'consumer_name'); ?>
						<?php echo $form->textField($model,'consumer_name'); ?>
					
					</div>	
					<div class="input-row">

						<?php echo $form->labelEx($model,'consumer_uintprice'); ?>
						<?php echo $form->textField($model,'consumer_uintprice'); ?>
						<?php echo $form->error($model,'consumer_uintprice'); ?>
											&nbsp;&nbsp;&nbsp;&nbsp;

						<?php echo $form->labelEx($model,'consumer_num'); ?>
						<?php echo $form->textField($model,'consumer_num'); ?>
					</div>
			        <div class="input-row">
						<?php echo $form->labelEx($model,'consumer_totalprice'); ?>
						<?php echo $form->textField($model,'consumer_totalprice'); ?>
						&nbsp;&nbsp;&nbsp;&nbsp;


						<?php //echo date('Y',time());?>
						<?php //echo date('y-m-d h:i:s',time());?>

						<?php echo $form->hiddenField($model,'consumer_year',array('value'=>date('Y',time()))); ?>

						<?php echo $form->hiddenField($model,'consumer_date',array('value'=>date('Y-m-d',time()))); ?>
						<?php echo $form->hiddenField($model,'consumer_time',array('value'=>date('H:i:s',time()))); ?>

						<?php //echo $form->hiddenField($model,'consumer_timestamp',array('value'=>time())); ?>

						<?php echo $form->hiddenField($model,'consumer_week',array('value'=>date('W'))); ?>

						<?php echo $form->hiddenField($model,'consumer_mon',array('value'=>date('m',time()))); ?>

						<?php echo $form->hiddenField($model,'consumer_quarter',array('value'=>'0')); ?>

			

						<?php echo $form->labelEx($model,'consumer_datetime'); ?>
						<?php echo $form->textField($model,'consumer_datetime',array('value'=>date('Y-m-d H:i:s',time()))); ?>
			
						<?php echo $form->hiddenField($model,'user_id',array('value'=>Yii::app()->user->id)); ?>

                    </div> 
					<div class="input-row">
							<?php echo $form->labelEx($model,'consumer_profile'); ?>&nbsp;&nbsp;
							<?php echo $form->textField($model,'consumer_profile',array('rows'=>6, 'cols'=>50)); ?>
							&nbsp;&nbsp;&nbsp;&nbsp;

							<?php echo $form->labelEx($model,'额外信息:'); ?> &nbsp;
							<?php echo $form->textField($model,'consumer_profile',array('rows'=>6, 'cols'=>50)); ?>
					</div>	
					
				</div>
				<div id="right_box_up_right">
					<br/><br/><br/>
					<input type="button" value="添加"><br/><br/>
					<input type="submit" value="保存">
				</div>
				
				<?php $this->endWidget(); ?>
			</div>
				<div id="right_box_down">
				<div id="right_box_down_left">
					<span style='display:block;width:14px;line-height:15px;height:20px;margin:50px auto'>支出</span>
				</div>
				
				<div class="form">
					<?php $form=$this->beginWidget('CActiveForm', array(
						'id'=>'boss-consumer-form',
						'enableAjaxValidation'=>false,
					)); ?>
				
				<div id="right_box_down_mid">
 <br/>
					<div class="input-row">
						<?php echo $form->labelEx($model,'consumer_bype'); ?>
						<?php echo $form->dropDownList($model,'consumer_bype',array('1'=>'生活用品','2'=>'工作需要','3'=>'投资理财','4'=>'聚餐娱乐'),array('width'=>120,'maxlength'=>128));?>
					
						&nbsp;&nbsp;&nbsp;&nbsp;
			
						<?php echo $form->labelEx($model,'consumer_name'); ?>
						<?php echo $form->textField($model,'consumer_name'); ?>
						<?php echo $form->error($model,'consumer_name'); ?>
					
					</div>	
					<div class="input-row">

						<?php echo $form->labelEx($model,'consumer_uintprice'); ?>
						<?php echo $form->textField($model,'consumer_uintprice'); ?>
											&nbsp;&nbsp;&nbsp;&nbsp;

						<?php echo $form->labelEx($model,'consumer_num'); ?>
						<?php echo $form->textField($model,'consumer_num'); ?>
					</div>
			        <div class="input-row">
						<?php echo $form->labelEx($model,'consumer_totalprice'); ?>
						<?php echo $form->textField($model,'consumer_totalprice'); ?>
						&nbsp;&nbsp;&nbsp;&nbsp;


						<?php //echo date('Y',time());?>
						<?php //echo date('y-m-d h:i:s',time());?>

						<?php echo $form->hiddenField($model,'consumer_year',array('value'=>date('Y',time()))); ?>

						<?php echo $form->hiddenField($model,'consumer_date',array('value'=>date('Y-m-d',time()))); ?>
						<?php echo $form->hiddenField($model,'consumer_time',array('value'=>date('H:i:s',time()))); ?>

						<?php //echo $form->hiddenField($model,'consumer_timestamp',array('value'=>time())); ?>

						<?php echo $form->hiddenField($model,'consumer_week',array('value'=>date('l',time()))); ?>

						<?php echo $form->hiddenField($model,'consumer_mon',array('value'=>date('m',time()))); ?>

						<?php echo $form->hiddenField($model,'consumer_quarter',array('value'=>'0')); ?>

			

						<?php echo $form->labelEx($model,'consumer_datetime'); ?>
						<?php echo $form->textField($model,'consumer_datetime',array('value'=>date('Y-m-d H:i:s',time()))); ?>
			
						<?php echo $form->hiddenField($model,'user_id',array('value'=>Yii::app()->user->id)); ?>

                    </div> 
					<div class="input-row">
							<?php echo $form->labelEx($model,'consumer_profile'); ?>&nbsp;&nbsp;
							<?php echo $form->textField($model,'consumer_profile',array('rows'=>6, 'cols'=>50)); ?>
						
							&nbsp;&nbsp;&nbsp;&nbsp;

							<?php echo $form->labelEx($model,'其他信息:'); ?>&nbsp;&nbsp;
							<?php echo $form->textField($model,'consumer_profile',array('rows'=>6, 'cols'=>50)); ?>
										
					</div>	
					
				</div>
				</div>
				
				<div id="right_box_down_right">
					<br/><br/><br/>
					<input type="button" value="添加"><br/><br/>
					<input type="button" value="保存">
				</div>
								
				<?php $this->endWidget(); ?>
			</div>	
			</div>
			
			
			<p align="center">上年度总结：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;本年度总结存：</p>
			<hr style="height:3px;width:100%;border:none;border-top:3px double red;" />
			
			<div id=right_box_butoom>
	
				
			</div>
			
		</div>

		
	</div>
	

	<div id="footer">
		<a href="">版权归掌柜的金融平台所有，联系我们</a>
	</div>
</div>
</body>
</html>
