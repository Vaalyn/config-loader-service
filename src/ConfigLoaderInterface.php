<?php

declare(strict_types = 1);

namespace Vaalyn\ConfigLoaderService;

use Psr\Container\ContainerInterface;

interface ConfigLoaderInterface {
	/**
	 * @param ContainerInterface $container
	 *
	 * @return void
	 */
	public function loadConfigs(ContainerInterface $container): void;

	/**
	 * @param string $configFile
	 *
	 * @return ConfigLoaderInterface
	 */
	public function registerConfig(string $configFile): ConfigLoaderInterface;

	/**
	 * @return ConfigInterface[]
	 */
	public function getConfigs(): array;
}
