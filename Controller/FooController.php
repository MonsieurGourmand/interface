<?php

namespace YB\Bundle\AcmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as Sensio;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class FooController
 * @package YB\Bundle\AcmeBundle\Controller
 *
 * @Sensio\Route("/foo")
 */
class FooController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     *
     * @Sensio\Route("", name="yb_acme_foo_index")
     * @Sensio\Method({"GET"})
     */
    public function indexAction(Request $request)
    {
        return $this->render('YBAcmeBundle:foo:index.html.twig', [
            'value' => 'YBAcmeBundle:foo:index.html.twig',
            'key1' => uniqid(),
            'key2' => uniqid(),
            'key3' => uniqid(),
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @Sensio\Route("/list", name="yb_acme_foo_list")
     * @Sensio\Method({"GET"})
     */
    public function listAction(Request $request)
    {
        return $this->render('YBAcmeBundle:foo:list.html.twig', [
            'value' => 'YBAcmeBundle:foo:list.html.twig',
            'key1' => uniqid(),
            'key2' => uniqid(),
            'key3' => uniqid(),
        ]);
    }

    /**
     * @param int $id
     * @param Request $request
     * @return Response
     *
     * @Sensio\Route("/view/{id}", name="yb_acme_foo_view", requirements={"id": "\d+"})
     * @Sensio\Method({"GET"})
     */
    public function viewAction($id, Request $request)
    {
        return $this->render('YBAcmeBundle:foo:view.html.twig', [
            'value' => 'YBAcmeBundle:foo:view.html.twig',
            'key1' => uniqid(),
            'key2' => uniqid(),
            'key3' => uniqid(),
        ]);
    }
}
