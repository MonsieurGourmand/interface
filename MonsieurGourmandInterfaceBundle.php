<?php

namespace monsieurgourmand\Bundle\InterfaceBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class YBAcmeBundle
 */
class InterfaceBundle extends Bundle
{
    /**
     * @inheritdoc
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        // add your code here
    }
}
