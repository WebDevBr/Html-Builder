<?php

namespace WebDevBr\Html\Tags;

use WebDevBr\Html\Attributes;

class ImgTest extends \PHPUnit_Framework_TestCase
{
	public function testCriaUmaImagemSemAtributos()
	{
		$tag = new Img('photo.jpg');
		$expected = '<img src="photo.jpg"/>';

		$this->assertEquals($expected, $tag->get());
	}

	public function testCriaUmaImagemComAtributos()
	{
		$tag = new Img('photo.jpg');
		$tag->attributes((new Attributes)->set('class', 'img-responsive'));
		$expected = '<img src="photo.jpg" class="img-responsive"/>';

		$this->assertEquals($expected, $tag->get());
	}

}