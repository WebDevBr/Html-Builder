<?php

namespace WebDevBr\Html;

class Form extends Abstracts\Builder
{
	private static $action;
	private $content;

	public static function create(string $action)
	{
		self::$action = $action;
		return new static;
	}

	public function get()
	{
		$attr = [
			'attributes'=>[
				'action'=>static::$action
			],
			'content'=>implode('', $this->content)
		];
		return $this->anyTag('form', [$attr]);
	}

	public function __call($method, $params)
	{
		$attr['attributes']['type'] = $method;
		
		if (!isset($params[0]) and !is_string($params[0])) {
			throw new \Exception("Please, first param is required and must be string");
		}

		if ($method == 'submit') {
			$attr['attributes']['value'] = $params[0];
		} else {
			$attr['attributes']['name'] = $params[0];
		}

		$this->content[] = $this->anyTag('input', [$attr]);

		return $this;
	}

	public function __toString()
	{
		return $this->get();
	}
}