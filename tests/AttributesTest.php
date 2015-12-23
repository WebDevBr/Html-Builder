<?php

namespace WebDevBr\Html;

class AttributesTest extends \PHPUnit_Framework_TestCase
{
	public function testSeRetornaUmAtributoHtml()
	{
		$attribute = new Attributes;
		$attribute->set('href', 'http://www.webdevbr.com.br');

		$this->assertEquals('href="http://www.webdevbr.com.br"', $attribute->get());
	}

	public function testSeRetornaVariosAtributosHtml()
	{
		$attribute = new Attributes;
		$attribute->set('href', 'http://www.webdevbr.com.br');
		$attribute->set('class', 'btn btn-success');

		$this->assertEquals('href="http://www.webdevbr.com.br" class="btn btn-success"', $attribute->get());
	}

	public function testSeRetornaVariosAtributosHtmlComBaseEmUmArray()
	{
		$attribute = new Attributes;
		$attribute->setMany([
			'href'=>'http://www.webdevbr.com.br',
			'class'=>'btn btn-success'
		]);

		$this->assertEquals('href="http://www.webdevbr.com.br" class="btn btn-success"', $attribute->get());
	}

	public function testSeRetornaEmFormatoString()
	{
		$attribute = new Attributes;
		$attribute->setMany([
			'href'=>'http://www.webdevbr.com.br',
			'class'=>'btn btn-success'
		]);

		$this->assertEquals('href="http://www.webdevbr.com.br" class="btn btn-success"', (string)$attribute);
	}

	public function testVerificaSeUmItemExisteComEleInformado()
	{
		$attribute = new Attributes;
		$attribute->setMany([
			'href'=>'http://www.webdevbr.com.br',
			'class'=>'btn btn-success'
		]);

		$this->assertEquals(true, $attribute->exists('href'));
	}

	public function testVerificaSeUmItemExisteComEleNaoInformado()
	{
		$attribute = new Attributes;
		$attribute->setMany([
			'href'=>'http://www.webdevbr.com.br',
			'class'=>'btn btn-success'
		]);

		$this->assertEquals(false, $attribute->exists('src'));
	}
}