<?php

namespace WebDevBr\Html\Abstracts;

use WebDevBr\Html\Attributes;

abstract class Tags
{
	protected $attr = '';
	protected $content = '';

	abstract public function get() :string;

	public function attributes(Attributes $attr)
	{
		if ($attr) {
			$this->attr .= ' '.$attr;
		}
		return $this;
	}

	public function __toString()
	{
		return $this->get();
	}
}