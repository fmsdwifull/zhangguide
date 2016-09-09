<?php
$this->breadcrumbs=array(
	'Boss Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BossUser', 'url'=>array('index')),
	array('label'=>'Manage BossUser', 'url'=>array('admin')),
);
?>

<h1>Create BossUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>