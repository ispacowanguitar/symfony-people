<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Person;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/people/create")
     */
    public function createAction() 
    {
        $person = new Person();
        $person->setName("Alex Ispa-Cowan");
        $person->setPhoneNumber("5739992019");
        $person->setAge(27);
        $person->setDescription("The greatest god damn person who ever lived!");

        $em = $this->getDoctrine()->getManager();

        $em->persist($person);

        $em->flush();

        Return new Response('Created Person id' . $person->getId());
    }

    /**
     * @Route("/Show/{id}")
     */
    public function showAction($id)
    {
        $person = $this->getDoctrine()->getRepository('AppBundle:Person')->find($id);
    }
}
