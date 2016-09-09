<?php

// include Yii bootstrap file

//require_once(dirname(__FILE__).'/../../framework/yii.php');

// create a Web application instance and run
//Yii::createWebApplication()->run();

$yii=dirname(__FILE__).'/../../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

require_once($yii);
Yii::createWebApplication($config)->run();