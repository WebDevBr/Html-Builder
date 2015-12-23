<?php

require '../vendor/autoload.php';

use WebDevBr\Html\Html;

$img = Html::img('photo.jpg');
echo Html::link($img, 'http://www.webdevbr.com.br');