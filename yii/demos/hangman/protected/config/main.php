<?php

return array(

	'name'=>'Hangman Game',
	'defaultController'=>'game',

	'components'=>array(
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'game/guess/<g:\w>'=>'game/guess',//下一步应该研究下这个rules
			),
		),
	),


);