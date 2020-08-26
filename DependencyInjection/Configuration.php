<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package monsieurgourmand\Bundle\InterfaceBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @inheritdoc
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('interface');
        $rootNode
            ->children()
            ->scalarNode('client_id')->end()
            ->scalarNode('secret')->end()
            ->scalarNode('callback')->end()
            ->scalarNode('api_root')->end()
            ->booleanNode('credentials')->end()
            ->scalarNode('client_command_id')->end()
            ->scalarNode('secret_command')->end()
            ->scalarNode('local')->end()
            ->end();
        return $treeBuilder;
    }
}
