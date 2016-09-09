<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
				'height'=>25,
				'width'=>80,
				'minLength'=>4,
				'maxLength'=>4,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
	
	
	

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->renderPartial('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		//$userinfo = BossUser::model()->find('user_name=:name',array(':name'=>'zhangsan'));
		//echo $userinfo->user_password;
		$model=new LoginForm;
		
	

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}


		
		// collect user input data
		if(isset($_POST['LoginForm']))
		{


			$model->attributes=$_POST['LoginForm'];
			//print_r($_POST['LoginForm']);
			// validate user input and redirect to the previous page if valid
			//print_r($model->validate());
			if($model->validate() && $model->login())
			{
				//echo "xxxxxxxxxxxxxxx----".yii::app()->user->returnUrl;//这里的returnUrl怎么来的？
				//print_r(yii::app()->user);
				//$this->redirect(Yii::app()->user->returnUrl);
				$this->redirect(array('bossConsumer/create'));

			}

			if(isset($_POST['register_xxx']))
				$this->redirect(array('BossUser/create'));
			
			
		}
		// display the login form
		$this->renderPartial('login',array('model'=>$model));

	}

	/*
	*register
	*/
	public function actionRegister()
	{
		//$model=new BossUser;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		//if(isset($_POST['BossUser']))
		//{
		//	$model->attributes=$_POST['BossUser'];
		//	if($model->save())
		//		$this->redirect(array('view','id'=>$model->user_id));
		//}

		//$this->render('create',array(
		//	'model'=>$model,
		//));
		$this->redirect(array('BossUser/create'));
	}
	
	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		echo $this->redirect(Yii::app()->homeUrl);
	}
}