<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->consumer_id), array('view', 'id'=>$data->consumer_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_bype')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_bype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_name')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_uintprice')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_uintprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_num')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_totalprice')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_totalprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_year')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_year); ?>
	<br />
	
	<div style="margin:0;padding:0;width:500px;height:10px;background-color:red;overflow:hidden;"></div>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_date')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_time')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_week')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_week); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_mon')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_mon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_quarter')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_quarter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_datetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumer_profile')); ?>:</b>
	<?php echo CHtml::encode($data->consumer_profile); ?>
	<br />

	*/ ?>

</div>