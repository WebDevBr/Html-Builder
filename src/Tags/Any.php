<?php

namespace WebDevBr\Html\Tags;

use WebDevBr\Html\Abstracts\{TagsWithContent, TagsNoContent};

class Any extends TagsWithContent
{
	public function __construct(string $tag)
	{
		$this->tag = $tag;
	}

	protected function toHtml(string $content, string $attr = null) :string
	{
		return sprintf(TagsWithContent::TAG_PATTERN, $this->tag, $content, $attr);
	}

	protected function toHtmlNoContent(string $attr)
	{
		return sprintf(TagsNoContent::TAG_PATTERN, $this->tag, $attr);
	}

	public function get() :string
	{
		if ($this->content) {
			$tag = $this->toHtml($this->content, $this->attr);
		} else {
			$tag = $this->toHtmlNoContent($this->attr);
		}
		return $tag;
	}

}
