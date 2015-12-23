<?php

namespace WebDevBr\Html\Abstracts;

abstract class TagsNoContent extends Tags
{
	const TAG_PATTERN = '<%s%s/>';

	abstract protected function toHtml(string $attr = null) :string;

	public function get() :string
	{
		$tag = $this->toHtml($this->attr);
		return $tag;
	}

}