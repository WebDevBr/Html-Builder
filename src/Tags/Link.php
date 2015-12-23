<?php

namespace WebDevBr\Html\Tags;

use WebDevBr\Html\Attributes;
use WebDevBr\Html\Abstracts\TagsWithContent;

class Link extends TagsWithContent
{
	public function __construct(string $text, string $href)
	{
		$this->href = $href;
		$this->content = $text;
	}

	private function setHref()
	{
		$attr = new Attributes;
		$attr->set('href', $this->href);
		return $attr;
	}

	protected function toHtml(string $content, string $attr = null) :string
	{
		$href = $this->setHref();
		return sprintf(TagsWithContent::TAG_PATTERN, 'a', $content, ' '.$href.$attr);
	}
}