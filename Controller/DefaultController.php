<?php

namespace Studia\XerksesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('XerksesBundle:Default:index.html.twig', array('name' => $name));
    }
}
