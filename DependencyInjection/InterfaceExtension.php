<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class InterfaceExtension
 * @package monsieurgourmand\Bundle\InterfaceBundle\DependencyInjection
 */
class InterfaceExtension extends Extension
{
    /**
     * @inheritdoc
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

        $config = $processor->processConfiguration($configuration, $configs);
        $def = $container->getDefinition('interface.MGD');
        $def->replaceArgument(3, $config['client_id']);
        $def->replaceArgument(4, $config['secret']);
        $def->replaceArgument(5, $config['callback']);
        $def->replaceArgument(6, $config['api_root']);

        $defCheck = $container->getDefinition('interface.check.mgd');
        $defCheck->replaceArgument(1, $config['credentials']);

        $defCommand = $container->getDefinition('interface.MGD.command');
        $defCommand->replaceArgument(3, $config['client_command_id']);
        $defCommand->replaceArgument(4, $config['secret_command']);
        $defCommand->replaceArgument(5, $config['callback']);
        $defCommand->replaceArgument(6, $config['api_root']);
        $defCommand->replaceArgument(0, null);

    }
}
