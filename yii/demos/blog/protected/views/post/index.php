<?php if(!empty($_GET['tag'])): ?>
<h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>

<?php
	//echo "sdfsfsfsfsfsfsfsddddddddddddddddd";
	//$this->widget('zii.widgets.CListView',"mytest");

	print_r($dataProvider);
	
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); 

?>
