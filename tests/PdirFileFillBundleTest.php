<?php

namespace Pdir\FileFillBundle\Tests;

use Contao\TestCase\ContaoTestCase;
use Pdir\FileFillBundle\DependencyInjection\PdirMaklermodulExtension;
use Pdir\FileFillBundle\PdirFileFillBundle;

class PdirFileFillBundleest extends ContaoTestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new PdirFileFillBundle();
        $this->assertInstanceOf(PdirFileFillBundle::class, $bundle);
    }

    public function testGetContainerExtension()
    {
        $bundle = new PdirFileFillBundle();
        $this->assertInstanceOf(PdirFileFillExtension::class, $bundle->getContainerExtension());
    }
}
