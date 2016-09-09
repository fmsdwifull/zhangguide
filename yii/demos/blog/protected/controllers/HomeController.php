<?php
	class HomeController extends CController
	{
		public $layout = 'home';
		public $breadcrumbs=array();

		public function actionIndex()
		{
			$this->render('index', array('assignKey'=>'assignValue'));
		}
	}
?>