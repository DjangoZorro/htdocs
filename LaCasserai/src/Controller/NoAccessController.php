<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NoAccessController extends AbstractController
{
    /**
     * @Route("/noaccess", name="no_access")
     */
    public function index()
    {
        return $this->render('no_access/index.html.twig', [
            'controller_name' => 'NoAccessController',
        ]);
    }
}
