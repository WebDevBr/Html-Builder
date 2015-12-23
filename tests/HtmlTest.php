<?php

namespace WebDevBr\Html;

class HtmlTest extends \PHPUnit_Framework_TestCase
{
	public function testRetornaQualquerClasseQueNaoSejaAny()
	{
		$tag = Html::link('Meu Site', 'http://www.webdevbr.com.br');
		$expected = '<a href="http://www.webdevbr.com.br">Meu Site</a>';

		$this->assertEquals($expected, $tag->get());
	}

	public function testRetornaClasseAnyComConteudo()
	{
		$tag = Html::div([
			'content'=>'Conteúdo da div'
		]);
		$expected = '<div>Conteúdo da div</div>';

		$this->assertEquals($expected, (string)$tag);
	}

	public function testRetornaClasseAnyComConteudoEAtributo()
	{
		$tag = Html::div([
			'content'=>'Conteúdo da div',
			'attributes'=>[
				'class'=>'alert alert-info'
			]
		]);
		
		$expected = '<div class="alert alert-info">Conteúdo da div</div>';

		$this->assertEquals($expected, (string)$tag);
	}

	public function testRetornaClasseAnyComAtributoESemConteudo()
	{
		$tag = Html::input([
			'attributes'=>[
				'type'=>'text',
				'name'=>'username',
			]
		]);

		$expected = '<input type="text" name="username"/>';

		$this->assertEquals($expected, (string)$tag);
	}

	public function testRetornaClasseAnyComConfiguracaoPadrao()
	{
		Html::config([
			'input'=>[
				'class'=>'form-input',
			],
			'form'=>[
				'class'=>"form-horizontal"
			]
		]);
		$username = Html::input([
			'attributes'=>[
				'type'=>'text',
				'name'=>'username',
			]
		]);
		$password = Html::input([
			'attributes'=>[
				'type'=>'password',
				'name'=>'password',
			]
		]);

		$form = Html::form([
			'attributes'=>[
				'action'=>'save.php'
			],
			'content'=>$username.PHP_EOL.$password
		]);

		$expected = '<form action="save.php" class="form-horizontal">';
		$expected .= '<input type="text" name="username" class="form-input"/>'.PHP_EOL;
		$expected .= '<input type="password" name="password" class="form-input"/>';
		$expected .= '</form>';

		$this->assertEquals($expected, (string)$form);
	}

}