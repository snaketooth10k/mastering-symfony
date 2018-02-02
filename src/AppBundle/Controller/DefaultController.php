<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/about/{name}", name="about", defaults={"name":null})
     *
     * @param $name - The name to be passed to the controller
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction($name)
    {
        return $this->render('about/index.html.twig', array('name' => $name));
    }
}
