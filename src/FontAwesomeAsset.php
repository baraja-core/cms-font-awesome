<?php

declare(strict_types=1);

namespace Baraja\FontAwesome;


use Baraja\Cms\Proxy\GlobalAsset\CmsAsset;

final class FontAwesomeAsset implements CmsAsset
{
	public function getUrl(): string
	{
		return 'https://pro.fontawesome.com/releases/v5.15.3/css/all.css';
	}


	public function getFormat(): string
	{
		return 'css';
	}
}
