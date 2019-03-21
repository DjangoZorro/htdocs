<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NoAccessController extends AbstractController
{
    /**
     * @Route("/noaccess", name="noaccess")
     */
    public function index()
    {
        return $this->render('default/noaccess.html.twig', [
            'controller_name' => 'NoAccessController',
        ]);
    }
}
