<?php
	$this->breadcrumbs=array(
		'Manage Posts',
	);
?>
<h2>Theme Layout start</h2>
<h2>Controller Layout start</h2>
View content
<h2>Controller Layout start</h2>
<h2>Theme Layout end</h2>
<table>
	<tr>国家</tr>
	<tr>中国</tr>
</table>

<?php
/*
	   $form=$this->beginWidget('CActiveForm', array(  
		'id'=>'user-form',  
		'enableAjaxValidation'=>false,  
		'htmlOptions'=>array('enctype'=>'multipart/form-data'),  
	)); 
	
	 $this->endWidget();

	$this->widget('zii.widgets.CMenu',array(
		//'activeCssClass'=>'当前热点元素的样式',
		//'firstItemCssClass'=>'第一个元素的样式',
		//'lastItemCssClass'=>'最后一个元素的样式',
		
		//'htmlOptions'=>array('class'=>'默认样式'),
	 
		'items'=>array(
			array('label'=>'网站概况', 'url'=>array('/admin'),'itemOptions'=>array('class'=>'li_status'),'active'=>$this->id=='admin'?true:false),
			array('label'=>'图片管理', 'url'=>array('/picture'),'template'=>'{menu}<span>this is additional infomation</span>','itemOptions'=>array('class'=>'li_picture'),'active'=>$this->id=='picture'?true:false, 'visible'=>true),
			array('label'=>'管理员管理', 'url'=>array('/manager'),'itemOptions'=>array('class'=>'li_manager'),'submenuOptions'=>array('class'=>'subclass'),'active'=>($this->id=='manager' && $this->action->id!='changepswd')?true:false, 'visible'=>false),
			array('label'=>'密码修改', 'url'=>array('/manager/changepswd'),'linkOptions'=>array('target'=>'_blank'),'itemOptions'=>array('class'=>'li_changepswd'),'items'=>array(array('label'=>'子栏目'))),'active'=>($this->id=='manager' && $this->action->id=='changepswd')?true:false, 'visible'=>true),
			array('label'=>'登陆', 'url'=>array('/site/login'),'itemOptions'=>array('class'=>'li_login'), 'visible'=>Yii::app()->user->isGuest),
			//array('label'=>'退出 ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'),'itemOptions'=>array('class'=>'li_login'), 'visible'=>!Yii::app()->user->isGuest)
		)
	);
	*/
	/*
				$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('post/index')),
				array('label'=>'About', 'url'=>array('site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('site/contact')),
				array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
	*/
?>