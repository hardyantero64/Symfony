<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class Login extends AbstractController
{
    /**
     * @Route("/login")
     */
    public function annotate()
    {
        return new Response ('You finally got annotate to work');
    }
}