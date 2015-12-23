<?php

namespace WebDevBr\Html\Abstracts;

abstract class TagsWithContent  extends Tags
{	
	const TAG_PATTERN = '<%1$s%3$s>%2$s</%1$s>';

	abstract protected function toHtml(string $content, string $attr = null) :string;

	public function content(string $content)
	{
		$this->content = $content;
		return $this;
	}

	public function get() :string
	{
		$tag = $this->toHtml($this->content, $this->attr);
		return $tag;
	}

}