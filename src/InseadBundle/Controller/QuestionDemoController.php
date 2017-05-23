<?php

namespace InseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuestionDemoController extends Controller
{
    public function questionDemo1Action()
    {
        $em = $this->getDoctrine()->getManager();
        $q1 = $em->getRepository('InseadBundle:Questions')->findOneById(1);
       // $choice = $em->getRepository('InseadBundle:Choices')->findBy(array('questions_id' => 1));

        return $this->render('InseadBundle:user:questionDemo1.html.twig', array(
            'q1' => $q1,
           // 'choice' => $choice
        ));
    }

    public function questionDemo2Action()
    {
        $em = $this->getDoctrine()->getManager();
        $q1 = $em->getRepository('InseadBundle:Questions')->findOneById(1);
       // $choice = $em->getRepository('InseadBundle:Choices')->findBy(array('questions_id' => 1));

        return $this->render('InseadBundle:user:questionDemo2.html.twig', array(
            'q1' => $q1,
           // 'choice' => $choice
        ));
    }

    public function questionDemo3Action()
    {
        $em = $this->getDoctrine()->getManager();
        $q1 = $em->getRepository('InseadBundle:Questions')->findOneById(1);
       // $choice = $em->getRepository('InseadBundle:Choices')->findBy(array('questions_id' => 1));

        return $this->render('InseadBundle:user:questionDemo3.html.twig', array(
            'q1' => $q1,
           // 'choice' => $choice
        ));
    }

    public function questionDemo4Action()
    {
        $em = $this->getDoctrine()->getManager();
        $q1 = $em->getRepository('InseadBundle:Questions')->findOneById(1);
       // $choice = $em->getRepository('InseadBundle:Choices')->findBy(array('questions_id' => 1));

        return $this->render('InseadBundle:user:questionDemo4.html.twig', array(
            'q1' => $q1,
           // 'choice' => $choice
        ));
    }

    public function questionDemo5Action()
    {
        $em = $this->getDoctrine()->getManager();
        $q1 = $em->getRepository('InseadBundle:Questions')->findOneById(1);
       // $choice = $em->getRepository('InseadBundle:Choices')->findBy(array('questions_id' => 1));

        return $this->render('InseadBundle:user:questionDemo5.html.twig', array(
            'q1' => $q1,
           // 'choice' => $choice
        ));
    }


}
