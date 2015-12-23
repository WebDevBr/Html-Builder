<?php

namespace WebDevBr\Html;

class Attributes
{
	protected $attr = [];

	public function set(string $attribute, string $value)
	{
		$this->attr[$attribute] = $value;
		return $this;
	}

	public function setMany(array $attr)
	{
		$this->attr = array_merge($this->attr, $attr);
		return $this;
	}

	public function exists($attr)
	{
		if (in_array($attr, array_keys($this->attr))) {
			return true;
		}
		return false;
	}

	public function get()
	{
		$text = [];
		foreach ($this->attr as $k=>$v) {
			$text[] = sprintf('%s="%s"', $k, $v);
		}
		return implode(' ', $text);
	}

	public function __toString()
	{
		return $this->get();
	}
}