<?php

declare(strict_types=1);

namespace Baraja\FontAwesome;


use Baraja\Cms\Proxy\GlobalAsset\CmsAsset;

final class FontAwesomeAsset implements CmsAsset
{
	public function getUrl(): string
	{
		return 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css';
	}


	public function getFormat(): string
	{
		return 'css';
	}
}
