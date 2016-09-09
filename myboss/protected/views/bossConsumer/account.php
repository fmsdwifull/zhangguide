<div id="history">
	<?php
	$this->breadcrumbs=array(
		'消费信息',
	);

	$this->menu=array(
		array('label'=>'Create BossConsumer', 'url'=>array('create')),
		array('label'=>'Manage BossConsumer', 'url'=>array('admin')),
	);
	?>

	<h3>您的所有消费账单：</h3>

	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>
</div>