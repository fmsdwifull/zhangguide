<?php
$this->breadcrumbs=array(
	'Boss Consumers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BossConsumer', 'url'=>array('index')),
	array('label'=>'Create BossConsumer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('boss-consumer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Boss Consumers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'boss-consumer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'consumer_id',
		'consumer_bype',
		'consumer_name',
		'consumer_uintprice',
		'consumer_num',
		'consumer_totalprice',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
