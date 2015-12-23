<?php

namespace WebDevBr\Html\Tags;

use WebDevBr\Html\Attributes;

class AnyTest extends \PHPUnit_Framework_TestCase
{
	public function testClasseAnyGeraUmaTagComConteudo()
	{
		$tag = new Any('div');
		$tag->content('Conteúdo da div');
		$expected = '<div>Conteúdo da div</div>';

		$this->assertEquals($expected, (string)$tag);
	}

	public function testClasseAnyGeraUmaTagComConteudoEAtributos()
	{
		$tag = new Any('div');
		$tag->content('Conteúdo da div');
		$tag->attributes((new Attributes)->set('class', 'alert alert-info'));
		$expected = '<div class="alert alert-info">Conteúdo da div</div>';

		$this->assertEquals($expected, (string)$tag);
	}

	public function testClasseAnyGeraUmaTagSemConteudo()
	{
		$tag = new Any('img');
		$tag->attributes((new Attributes)->set('src', 'profile.jpg'));
		$expected = '<img src="profile.jpg"/>';

		$this->assertEquals($expected, (string)$tag);
	}

	public function testClasseAnyGeraUmaTagDentroDeOutra()
	{
		$img = new Any('img');
		$img->attributes((new Attributes)->set('src', 'profile.jpg'));

		$link = new Any('a');
		$link->attributes((new Attributes)->set('href', 'http://www.webdevbr.com.br'));
		$link->content($img);
		$expected = '<a href="http://www.webdevbr.com.br"><img src="profile.jpg"/></a>';

		$this->assertEquals($expected, (string)$link);
	}
}