<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'boss-consumer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">请注意，凡是带 <span class="required">*</span> 为必填项.</p>
	



	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'consumer_bype'); ?>
		<?php //echo $form->textField($model,'consumer_bype',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->dropDownList($model,'consumer_bype',array('1'=>'生活用品','2'=>'工作需要','3'=>'投资理财','4'=>'聚餐娱乐'));?>
		<?php echo $form->error($model,'consumer_bype'); ?>

		<?php echo $form->labelEx($model,'consumer_name'); ?>
		<?php echo $form->textField($model,'consumer_name'); ?>
		<?php echo $form->error($model,'consumer_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consumer_uintprice'); ?>
		<?php echo $form->textField($model,'consumer_uintprice'); ?>
		<?php echo $form->error($model,'consumer_uintprice'); ?>

		<?php echo $form->labelEx($model,'consumer_num'); ?>
		<?php echo $form->textField($model,'consumer_num'); ?>
		<?php echo $form->error($model,'consumer_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consumer_totalprice'); ?>
		<?php echo $form->textField($model,'consumer_totalprice'); ?>
		<?php echo $form->error($model,'consumer_totalprice'); ?>


		<?php //echo date('Y',time());?>
		<?php //echo date('y-m-d h:i:s',time());?>

		<?php echo $form->hiddenField($model,'consumer_year',array('value'=>date('Y',time()))); ?>

		<?php echo $form->hiddenField($model,'consumer_date',array('value'=>date('Y-m-d',time()))); ?>
		<?php echo $form->hiddenField($model,'consumer_time',array('value'=>date('H:i:s',time()))); 
		      $this->widget('zii.widgets.jui.CJuiDatePicker',array(  
                        'language'=>'zh_cn',  
            'name'=>'worktime[start]',  
            'value'=>$query['start'] ? $query['start'] : Date('Y-m-d'),  
            'options'=>array(  
                        'showAnim'=>'fold',  
                        'showOn'=>'both',  
                        'buttonImage'=>Yii::app()->request->baseUrl.'/images/calendar.gif',  
                                    'maxDate'=>'new Date()',  
                        'buttonImageOnly'=>true,  
                        'dateFormat'=>'yy-mm-dd',  
            ),  
            'htmlOptions'=>array(  
                        'style'=>'height:18px',  
                        'maxlength'=>8,  
            ),  
    ));  
		
		?>
		
		    <input type="text" name="worktime[start]" value="2012-11-02" id="worktime_start" maxlength="8" style="height:18px" class="hasDatepicker">  
    <img class="ui-datepicker-trigger" src="/oss/images/calendar.gif" alt="..." title="...">

		<?php //echo $form->hiddenField($model,'consumer_timestamp',array('value'=>time())); ?>

		<?php echo $form->hiddenField($model,'consumer_week',array('value'=>date('l',time()))); ?>

		<?php echo $form->hiddenField($model,'consumer_mon',array('value'=>date('m',time()))); ?>

		<?php echo $form->hiddenField($model,'consumer_quarter',array('value'=>'0')); ?>


		<?php echo $form->labelEx($model,'consumer_datetime'); ?>
		<?php echo $form->textField($model,'consumer_datetime',array('value'=>date('Y-m-d H:i:s',time()))); ?>
		<?php echo $form->error($model,'consumer_datetime'); ?>
	</div>

		<?php echo $form->hiddenField($model,'user_id',array('value'=>Yii::app()->user->id)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'consumer_profile'); ?>
		<?php echo $form->textArea($model,'consumer_profile',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'consumer_profile'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '添加' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->