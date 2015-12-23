<?php

require '../vendor/autoload.php';

use WebDevBr\Html\{Html, Attributes};

$img = Html::img('photo.jpg');
$link = Html::link($img, 'http://www.webdevbr.com.br');
$link->attributes((new Attributes)->set('class', 'btn btn-primary'));

echo $link;
