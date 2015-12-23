# HTML and Form Builder for PHP 7

Componente desenvolvido para as aulas disponibilizadas na página do [WebDevBr no Facebook](https://www.facebook.com/webdevbrasil/), não deve ser usado em produção.

Ainda em desenvolvimento!

## Instalação

Para instalar use o composer:

	{
		"require": {
			"webdevbr/html-builder": "dev-master"
		}
	}

Ou com o comandos:

	composer require webdevbr/html-builder:dev-master

## Para usar

Para gerar HTML:

	<?php

	use WebDevBr\Html\Html;
	echo Html::link('Meu Site', 'http://www.webdevbr.com.br');

É possível passar um método como conteúdo de outro, por exemplo:

	<?php
	
	use WebDevBr\Html\Html;

	$img = Html::img('photo.jpg');
	echo Html::link($img, 'http://www.webdevbr.com.br');

E até passar atributos HTML para eles

	<?php
	
	use WebDevBr\Html\{Html, Attributes};

	$img = Html::img('photo.jpg');
	$link = Html::link($img, 'http://www.webdevbr.com.br');
	$link->attributes((new Attributes)->set('class', 'btn btn-primary'));

	echo $link;

Outra forma de setar atributos HTML em uma tag pe usando array:

	use WebDevBr\Html\Html;

	$img = Html::img('photo.jpg');
	echo Html::div([
			'content'=>'Conteúdo da div',
			'attributes'=>[
				'class'=>'alert alert-info'
			]
		]);

Vou preparar uma lista de issues para que possa continuar o desenvolvimento deste projeto e até melhorar esta documentação (mostrar alguns exemplos com a classe `Form`, por exemplo), você pode se guiar pelos testes disponíveis no diretório `tests`.

## Como contribuir?

Apenas faça um fork deste projeto e mande pull-requests.