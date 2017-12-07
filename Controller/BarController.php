<?php

namespace monsieurgourmand\Bundle\AcmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as Sensio;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class BarController
 * @package monsieurgourmand\Bundle\AcmeBundle\Controller
 *
 * @Sensio\Route("/bar")
 */
class BarController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     *
     * @Sensio\Route("", name="yb_acme_bar_index")
     * @Sensio\Method({"GET"})
     */
    public function indexAction(Request $request)
    {
        return $this->render('YBAcmeBundle:bar:index.html.twig', [
            'value' => 'YBAcmeBundle:bar:index.html.twig',
            'key1' => uniqid(),
            'key2' => uniqid(),
            'key3' => uniqid(),
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @Sensio\Route("/create", name="yb_acme_bar_create")
     * @Sensio\Method({"GET", "POST"})
     */
    public function createAction(Request $request)
    {
        return $this->render('YBAcmeBundle:bar:create.html.twig', [
            'value' => 'YBAcmeBundle:bar:create.html.twig',
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
     * @Sensio\Route("/update/{id}", name="yb_acme_bar_update", requirements={"id": "\d+"})
     * @Sensio\Method({"GET", "POST"})
     */
    public function updateAction($id, Request $request)
    {
        return $this->render('YBAcmeBundle:bar:update.html.twig', [
            'value' => 'YBAcmeBundle:bar:update.html.twig',
            'key1' => uniqid(),
            'key2' => uniqid(),
            'key3' => uniqid(),
        ]);
    }
}
