<?php
$this->breadcrumbs=array(
	'Boss Consumers'=>array('index'),
	$model->consumer_id=>array('view','id'=>$model->consumer_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BossConsumer', 'url'=>array('index')),
	array('label'=>'Create BossConsumer', 'url'=>array('create')),
	array('label'=>'View BossConsumer', 'url'=>array('view', 'id'=>$model->consumer_id)),
	array('label'=>'Manage BossConsumer', 'url'=>array('admin')),
);
?>

<h1>Update BossConsumer <?php echo $model->consumer_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>