<?php

namespace Pdir\FileFillBundle\ContaoManager;

use Contao\ManagerPlugin\Config\ConfigPluginInterface;
use Symfony\Component\Config\Loader\LoaderInterface;

class Plugin implements ConfigPluginInterface
{
    public function registerContainerConfiguration(LoaderInterface $loader, array $managerConfig)
    {
        $loader->load('@PdirFileFillBundle/Resources/config/config.yml');
    }
}
