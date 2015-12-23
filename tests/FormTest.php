<?php

namespace WebDevBr\Html;

class FormTest extends \PHPUnit_Framework_TestCase
{
	public function testCriaUmFormularioComCampos()
	{
		$form = Form::create('save.php')
			->text('username', 'erikfig')
			->password('password')
			->submit('enviar');

		$expected = '<form action="save.php">';
		$expected .= '<input type="text" name="username"/>';
		$expected .= '<input type="password" name="password"/>';
		$expected .= '<input type="submit" value="enviar"/>';
		$expected .= '</form>';

		$this->assertEquals($expected, (string)$form->get());
	}

	public function testCriaUmFormularioComCamposEAtributosPadrao()
	{
		Form::config([
			'form'=>[
				'class'=>'form-horizontal'
			],
			'input'=>[
				'class'=>'form-input'
			]
		]);
		$form = Form::create('save.php')
			->text('username', 'erikfig')
			->password('password')
			->submit('enviar');

		$expected = '<form action="save.php" class="form-horizontal">';
		$expected .= '<input type="text" name="username" class="form-input"/>';
		$expected .= '<input type="password" name="password" class="form-input"/>';
		$expected .= '<input type="submit" value="enviar" class="form-input"/>';
		$expected .= '</form>';

		$this->assertEquals($expected, (string)$form->get());
		Form::config([]);
	}
}