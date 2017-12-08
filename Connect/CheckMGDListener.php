<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 16/05/2017
 * Time: 09:26
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Connect;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class CheckMGDListener
{
    /**
     * @var CheckMGD
     */
    protected $mgd;

    public function __construct(CheckMGD $mgd)
    {
        $this->mgd = $mgd;
    }

    public function process(GetResponseEvent $event)
    {
        $response = $this->mgd->check($event->getRequest());
        if ($response != null)
            $event->setResponse($response);
    }
}