<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'boss-user-form',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_type'); ?>
		<?php echo $form->textField($model,'user_type',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'user_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_password'); ?>
		<?php echo $form->passwordField($model,'user_password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'user_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_createtime'); ?>
		<?php echo $form->textField($model,'user_createtime',array('value'=>date('Y-m-d H:i:s',time()))); ?>
		<?php echo $form->error($model,'user_createtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_telephone'); ?>
		<?php echo $form->textField($model,'user_telephone',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'user_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_profile'); ?>
		<?php echo $form->textArea($model,'user_profile',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'user_profile'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '注册' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->