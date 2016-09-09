<?php
$this->breadcrumbs=array(
	'Boss Users'=>array('index'),
	$model->user_id,
);

$this->menu=array(
	array('label'=>'List BossUser', 'url'=>array('index')),
	array('label'=>'Create BossUser', 'url'=>array('create')),
	array('label'=>'Update BossUser', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'Delete BossUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BossUser', 'url'=>array('admin')),
);
?>

<h1>View BossUser #<?php echo $model->user_id; ?></h1>

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
