<?php
/**
 * Created by PhpStorm.
 * User: Tom
 * Date: 16/05/2017
 * Time: 09:16
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Connect;


use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckMGD
{

    private $router;
    private $credentials;

    public function __construct(Router $router, $credentials)
    {
        $this->router = $router;
        $this->credentials = $credentials;
    }

    public function check(Request $request)
    {
        if (!$this->credentials) {
            if ($request->getBaseUrl() . $request->getPathInfo() == $this->router->generate('connect') || $request->getBaseUrl() . $request->getPathInfo() == $this->router->generate('token')) {
                return;
            } else {
                if ($request->isXmlHttpRequest()) {
                    return;
                }
                if (!$client = $request->getSession()->get('client')) {
                    return new RedirectResponse($this->router->generate('connect'));
                }
            }
        } else {
            return;
        }
    }

}
