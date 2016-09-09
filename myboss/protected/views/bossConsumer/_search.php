<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'consumer_id'); ?>
		<?php echo $form->textField($model,'consumer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_bype'); ?>
		<?php echo $form->textField($model,'consumer_bype',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_name'); ?>
		<?php echo $form->textField($model,'consumer_name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_uintprice'); ?>
		<?php echo $form->textField($model,'consumer_uintprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_num'); ?>
		<?php echo $form->textField($model,'consumer_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_totalprice'); ?>
		<?php echo $form->textField($model,'consumer_totalprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_year'); ?>
		<?php echo $form->textField($model,'consumer_year',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_date'); ?>
		<?php echo $form->textField($model,'consumer_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_time'); ?>
		<?php echo $form->textField($model,'consumer_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_timestamp'); ?>
		<?php echo $form->textField($model,'consumer_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_week'); ?>
		<?php echo $form->textField($model,'consumer_week'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_mon'); ?>
		<?php echo $form->textField($model,'consumer_mon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_quarter'); ?>
		<?php echo $form->textField($model,'consumer_quarter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_datetime'); ?>
		<?php echo $form->textField($model,'consumer_datetime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumer_profile'); ?>
		<?php echo $form->textArea($model,'consumer_profile',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->