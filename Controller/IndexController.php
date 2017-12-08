<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Mgd;


class IndexController extends Controller
{

    public function indexAction(Request $request)
    {
        $mgd = $this->get('interface.MGD');
        $url = $mgd->login();
        return $this->render('InterfaceBundle:index:index.html.twig', array(
            'url' => $url
        ));
    }

    public function tokenAction(Request $request)
    {
        $mgd = $this->get('interface.MGD');
        $mgd->access($request);
        return $this->redirectToRoute('index');
    }

    public function disconnectAction(Request $request)
    {
        $request->getSession()->clear();
        return $this->redirectToRoute('connect');
    }
}