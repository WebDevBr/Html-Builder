<?php

namespace WebDevBr\Html;

class Html extends Abstracts\Builder
{
	public static function __callStatic($method, $attr)
	{
		$class = 'WebDevBr\Html\Tags\\'.ucfirst($method);

		if (class_exists($class) and $method != 'any') {
			return self::tagPreCreated($class, $method, $attr);
		}
		return self::anyTag($method, $attr);

	}
}