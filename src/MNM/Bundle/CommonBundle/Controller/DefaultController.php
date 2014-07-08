<?php

namespace MNM\Bundle\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MNMCommonBundle:Default:index.html.twig');
    }
}
