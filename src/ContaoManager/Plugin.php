<?php

/*
 * file fill bundle for Contao Open Source CMS
 * Copyright (c) 2020 pdir / digital agentur // pdir GmbH
 * @package    contao-file-fill-bundle
 * @link       https://pdir.de
 * @license    LGPL-3.0+
 * @author     Mathias Arzberger <develop@pdir.de>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
