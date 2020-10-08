<?php

namespace Pdir\FileFillBundle\Image;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\Image;
use Contao\File;
use Contao\System;
use Symfony\Component\ErrorHandler\Debug;

class FileFill
{
    function isActive()
    {
        $container = System::getContainer();
        $config = $container->getParameter('pdir.file_fill');

        if (isset($config['server'])) {
            return true;
        }

        return false;
    }

    function run($picture)
    {
        if(is_string($picture))
        {
            dump('<br>is string!<br>');
        }

        $dir = System::getContainer()->getParameter('kernel.project_dir');
        $server = System::getContainer()->getParameter('pdir_file_fill.server');

        dump($dir . $picture);

        if(!file_exists($dir . $picture))
        {
            dump('Download File!');
        }

        return null;
    }
}
