<?php

namespace Pdir\FileFillBundle\Tests\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\TestCase\ContaoTestCase;
use Pdir\FileFillBundle\ContaoManager\Plugin;
use Pdir\FileFillBundle\PdirFileFillBundle;

class PluginTest extends ContaoTestCase
{
    public function testReturnsTheBundles()
    {
        $parser = $this->createMock(ParserInterface::class);

        /** @var BundleConfig $config */
        $config = (new Plugin())->getBundles($parser)[0];

        $this->assertInstanceOf(BundleConfig::class, $config);
        $this->assertSame(PdirFileFillBundle::class, $config->getName());
        $this->assertSame([ContaoCoreBundle::class], $config->getLoadAfter());
    }
}
