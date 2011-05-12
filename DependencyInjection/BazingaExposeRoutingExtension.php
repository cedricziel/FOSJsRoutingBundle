<?php

namespace Bazinga\ExposeRoutingBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

/**
 * BazingaExposeRoutingExtension
 * Load configuration.
 *
 * @author William DURAND <william.durand1@gmail.com>
 */
class BazingaExposeRoutingExtension extends Extension
{
    /**
     * Load configuration.
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('controllers.xml');
    }
}
