<?php

namespace monsieurgourmand\Bundle\AcmeBundle\EventListener;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

/**
 * Class FooListener
 * @package monsieurgourmand\Bundle\AcmeBundle\EventListener
 */
class FooListener implements EventSubscriberInterface
{
    /**
     * @param FilterControllerEvent $event
     * @param string $eventName
     * @param EventDispatcherInterface $dispatcher
     */
    public function onKernelController(FilterControllerEvent $event, $eventName, EventDispatcherInterface $dispatcher)
    {
        // add your code here
    }

    /**
     * @inheritdoc
     */
    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::CONTROLLER => 'onKernelController',
        );
    }
}
