<?php

namespace WebDevBr\Html\Tags;

use WebDevBr\Html\Attributes;
use WebDevBr\Html\Abstracts\TagsNoContent;

class Img extends TagsNoContent
{
	public function __construct(string $src)
	{
		$this->src = $src;
	}

	private function setSrc()
	{
		$attr = new Attributes;
		$attr->set('src', $this->src);
		return $attr;
	}

	protected function toHtml(string $attr = null) :string
	{
		$src = $this->setSrc();
		return sprintf(TagsNoContent::TAG_PATTERN, 'img', ' '.$src.$attr);
	}
}