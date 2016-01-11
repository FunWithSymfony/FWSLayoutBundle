<?php

use FWS\LayoutBundle\DependencyInjection\FWSLayoutExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FWSLayoutExtensionTest extends \PHPUnit_Framework_TestCase

{

    public function testLayout()
    {
        $container = new ContainerBuilder();
        $loader = new FWSLayoutExtension();
        $loader->load(array(array()), $container);

        $this->assertTrue($container->hasDefinition('fws_layout.twig_extension.layout'), 'The Twig Extension is loaded');
        $this->assertEquals('FWSLayoutBundle::layout-default.html.twig', $container->getParameter('fws_layout.templates.twig.default'));
    }

}