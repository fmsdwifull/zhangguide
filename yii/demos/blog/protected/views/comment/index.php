<?php
$this->breadcrumbs=array(
	'Comments',
);
?>

<h1>Comments</h1>




<?php

 //两个问题，zii.widgets.CListView怎么使用？
 // $dataProvider的值怎么使用进去的？
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
