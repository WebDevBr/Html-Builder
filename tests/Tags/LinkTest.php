<?php

namespace WebDevBr\Html\Tags;

use WebDevBr\Html\Attributes;

class LinkTest extends \PHPUnit_Framework_TestCase
{
	public function testCriaUmLinkSemAtributos()
	{
		$tag = new Link('Meu Site', 'http://www.webdevbr.com.br');
		$expected = '<a href="http://www.webdevbr.com.br">Meu Site</a>';

		$this->assertEquals($expected, $tag->get());
	}

	public function testCriaUmLinkComAtributos()
	{
		$tag = new Link('Meu Site', 'http://www.webdevbr.com.br');
		$tag->attributes((new Attributes)->set('title', 'Site de Cursos'));
		$expected = '<a href="http://www.webdevbr.com.br" title="Site de Cursos">Meu Site</a>';

		$this->assertEquals($expected, $tag->get());
	}

}