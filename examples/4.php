<?php

require '../vendor/autoload.php';

use WebDevBr\Html\Html;

$img = Html::img('photo.jpg');
echo Html::div([
		'content'=>'Conteúdo da div',
		'attributes'=>[
			'class'=>'alert alert-info'
		]
	]);