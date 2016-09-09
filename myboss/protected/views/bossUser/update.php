<?php
$this->breadcrumbs=array(
	'Boss Users'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BossUser', 'url'=>array('index')),
	array('label'=>'Create BossUser', 'url'=>array('create')),
	array('label'=>'View BossUser', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage BossUser', 'url'=>array('admin')),
);
?>

<h1>Update BossUser <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>