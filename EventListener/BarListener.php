<?php

namespace monsieurgourmand\Bundle\AcmeBundle\EventListener;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

/**
 * Class BarListener
 * @package monsieurgourmand\Bundle\AcmeBundle\EventListener
 */
class BarListener implements EventSubscriberInterface
{
    /**
     * @param GetResponseEvent $event
     * @param string $eventName
     * @param EventDispatcherInterface $dispatcher
     */
    public function onKernelRequest(GetResponseEvent $event, $eventName, EventDispatcherInterface $dispatcher)
    {
        // add your code here
    }

    /**
     * @inheritdoc
     */
    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::REQUEST => 'onKernelRequest',
        );
    }
}
