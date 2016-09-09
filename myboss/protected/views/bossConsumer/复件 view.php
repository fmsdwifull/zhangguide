<?php
$this->breadcrumbs=array(
	'Boss Consumers'=>array('index'),
	$model->consumer_id,
);

$this->menu=array(
	array('label'=>'List BossConsumer', 'url'=>array('index')),
	array('label'=>'Create BossConsumer', 'url'=>array('create')),
	array('label'=>'Update BossConsumer', 'url'=>array('update', 'id'=>$model->consumer_id)),
	array('label'=>'Delete BossConsumer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->consumer_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BossConsumer', 'url'=>array('admin')),
);
?>

<h1>View BossConsumer #<?php echo $model->consumer_id; ?></h1>

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
		'consumer_timestamp',
		'consumer_week',
		'consumer_mon',
		'consumer_quarter',
		'consumer_datetime',
		'user_id',
		'consumer_profile',
	),
)); ?>
