<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
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
        $user = null;

        if ($name) {
            $user = $this->getDoctrine()
                ->getRepository('AppBundle:User')
                ->findOneBy(array('name' => $name));
            if (false === $user instanceof User) {
                throw $this->createNotFoundException(
                    'No user named '. $name .' found.'
                );
            }
        }
        return $this->render('about/index.html.twig', array('user' => $user));
    }
}
