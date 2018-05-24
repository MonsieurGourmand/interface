<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Mgd;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;



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
        if (empty($request->getSession()->get('me')->getRoles()))
            $roles = array('ROLE_USER');
        else
            $roles = $request->getSession()->get('me')->getRoles();
        $token = new UsernamePasswordToken(
            $request->getSession()->get('me')->getEmail(),
            null,
            'main',
            $roles
        );
        $this->get('security.token_storage')->setToken($token);
        return $this->redirectToRoute('index');
    }

    public function disconnectAction(Request $request)
    {
        $request->getSession()->clear();
        return $this->redirectToRoute('connect');
    }
}