<?php

class SiteController extends Controller
{
	public $layout='column1';

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
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
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
		if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH)
			throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");

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
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	
	
	/**
	 * Mytest
	 */
	public function actionMytest()
	{
		/*
		echo "----------------------------------------";
		$this->widget('zii.widgets.grid.CGridView', array(
			'dataProvider'=>$dataProvider, //数据源
			'columns'=>array(
				'title',          // display the 'title' attribute
				'category.name',  // display the 'name' attribute of the 'category' relation //显示与category相关的name
				'content:html',   // display the 'content' attribute as purified HTML 显示净化过的HTML格式
				array(            // display 'create_time' using an expression
					'name'=>'create_time',
					'value'=>'date("M j, Y", $data->create_time)',
				),
				array(            // display 'author.username' using an expression
					'name'=>'authorName',
					'value'=>'$data->author->username',
				),
				array(            // display a column with "view", "update" and "delete" buttons
					'class'=>'CButtonColumn',
				),
			),
			'filter'=>$model,//对用户的输入进行过滤
		));
		*/

	}
	
	public function actionSqltest()  
    {   
        $model = new TblUser();  
        $model->username = 'admin';  
        $model->password = '123456';  
        $model->email = 'admin@admin.com';  
          
        var_dump($model->save());  
        exit();  
        $this->render('index'); 
    }  
}

