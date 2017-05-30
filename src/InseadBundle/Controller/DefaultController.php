<?php

namespace InseadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

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

    public function adVideoAction()
    {
        return $this->render('InseadBundle:user:adVideo.html.twig');
    }

    public function questionAd1Action()
    {
        return $this->render('@Insead/user/questionAd1.html.twig');
    }

    public function questionAd2Action()
    {
        return $this->render('@Insead/user/questionAd2.html.twig');
    }

    public function questionAd3Action()
    {
        return $this->render('@Insead/user/questionAd3.html.twig');
    }
    public function indexAction()
    {
        return $this->render('@Insead/user/index.html.twig');
    }
}
