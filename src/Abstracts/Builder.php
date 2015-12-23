<?php

namespace WebDevBr\Html\Abstracts;

use WebDevBr\Html\Attributes;

abstract class builder
{
	protected static $options;
	
	public static function config(array $options = [])
	{
        self::$options = $options;
	}

	protected static function tagPreCreated($class, $method, $attr)
	{
		$reflect = new \ReflectionClass($class);
		$tag = $reflect->newInstanceArgs($attr);
		$tag = self::setAttr($tag, $method, self::$options);
		return $tag;
	}

	protected static function anyTag($method, $attr)
	{
		$class = 'WebDevBr\Html\Tags\Any';
		$any = new $class($method);

		if (!empty($attr[0]['content']))
			$any->content($attr[0]['content']);

		$any = self::setAttr($any, 'attributes', ($attr[0]) ?? null);
		$any = self::setAttr($any, $method, self::$options);

		return $any;
	}

	protected static function setAttr($obj, $method, $attributes)
	{
		if (isset($attributes[$method]) and is_array($attributes[$method])) {
			$attr = (new Attributes)->setMany($attributes[$method]);
			$obj->attributes($attr);
		}
		return $obj;
	}
}