<?php
namespace Cody\Bundle\ProductBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('cody_product');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->integerNode('id')->defaultValue(10)->info('Set the producid')->end()
                ->scalarNode('validity')->defaultValue(null)->info('Set the validity')->end()
            ->end();

        return $treeBuilder;
    }
}
