<?php

namespace Pdir\FileFillBundle\Test\DependencyInjection;

use Contao\TestCase\ContaoTestCase;
use Pdir\FileFillBundle\DependencyInjection\PdirMaklermodulExtension;
use Pdir\FileFillBundle\Image\FileFill;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

class PdirFileFillExtensionTest extends ContaoTestCase
{
    /**
     * @var ContainerBuilder
     */
    private $container;

    public function setUp(): void
    {
        parent::setUp();

        $this->container = new ContainerBuilder(new ParameterBag(['kernel.debug' => false]));

        $extension = new PdirFileFillExtension();
        $extension->load([], $this->container);
    }

    /**
     * Tests the object instantiation.
     */
    public function testCanBeInstantiated()
    {
        $extension = new PdirFileFillExtension();
        $this->assertInstanceOf(PdirFileFillExtension::class, $extension);
    }
}
