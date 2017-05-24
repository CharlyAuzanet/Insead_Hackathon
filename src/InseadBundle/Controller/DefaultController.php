<?php

namespace InseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InseadBundle:user:index.html.twig');
    }
    public function rulesAction()
    {
        return $this->render('InseadBundle:user:rules.html.twig');
    }
    public function adlistAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ads = $em->getRepository('InseadBundle:Ad')->findAll();

        return $this->render('@Insead/user/listAd.html.twig', array(
            'ads' => $ads
        ));
    }

}
