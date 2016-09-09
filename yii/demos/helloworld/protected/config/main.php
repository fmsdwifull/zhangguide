<?php

return array(

	'name'=>'Hangman Game',
	'defaultController'=>'site',

	'components'=>array(
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'xxx/xxx/<g:\w>'=>'xxx/xxx',
			),
		),
	),


);