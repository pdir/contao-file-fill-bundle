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

namespace Pdir\FileFillBundle\Image;

use Contao\System;

class FileFill
{
    public function isActive()
    {
        $container = System::getContainer();
        $config = $container->getParameter('pdir.file_fill');

        if (isset($config['server'])) {
            return true;
        }

        return false;
    }

    public function run($picture)
    {
        if (\is_string($picture)) {
            dump('<br>is string!<br>');
        }

        $dir = System::getContainer()->getParameter('kernel.project_dir');
        $server = System::getContainer()->getParameter('pdir_file_fill.server');

        dump($dir.$picture);

        if (!file_exists($dir.$picture)) {
            dump('Download File!');
        }

        return null;
    }
}
