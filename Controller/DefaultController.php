<?php

namespace GoldenBirdLabs\ReplaceAssetsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GoldenBirdLabsReplaceAssetsBundle:Default:index.html.twig', array('name' => $name));
    }
}
