<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Person;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextFieldType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


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
     * @Route("/new", name="new")   
     */
    public function newAction()
    {
        $person = new Person();
        $person->setName('NAME');
        $person->setPhoneNumber('phone number');
        $person->setAge('65');
        $person->setDescription('A democratic candidate for the president of the United States of America');

        $form = $this->createFormBuilder($person)
            ->add('name', TextType::class)
            ->add('phoneNumber', TextType::class)
            ->add('age', IntegerType::class)
            ->add('description', TextareaType::class)
            ->add('save', SubmitType::class, array('label' => 'create person'))
            ->getForm();

        return $this->render('default/new.html.twig', array('form' => $form->createView(),
            ));
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
     * @Route("/show/{id}")
     */
    public function showAction($id)
    {
        $person = $this->getDoctrine()->getRepository('AppBundle:Person')->find($id);

        if (!$person) {
            throw $this->createNotFoundException('There is no person with id ' . $id);
        }

        Return new Response('You found '. $person->getName() .' Who is ' .$person->getDescription());
    }
}
