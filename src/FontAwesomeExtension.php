<?php

declare(strict_types=1);

namespace Baraja\FontAwesome;


use Baraja\Cms\CmsExtension;
use Baraja\Cms\Proxy\GlobalAsset\CustomGlobalAssetManager;
use Nette\DI\CompilerExtension;
use Nette\DI\Definitions\ServiceDefinition;

final class FontAwesomeExtension extends CompilerExtension
{
	/**
	 * @return string[]
	 */
	public static function mustBeDefinedAfter(): array
	{
		return [CmsExtension::class];
	}


	public function beforeCompile(): void
	{
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('fontAwesomeAsset'))
			->setFactory(FontAwesomeAsset::class);

		/** @var ServiceDefinition $manager */
		$manager = $builder->getDefinitionByType(CustomGlobalAssetManager::class);
		$manager->addSetup('?->addAsset(?)', ['@self', '@' . FontAwesomeAsset::class]);
	}
}
