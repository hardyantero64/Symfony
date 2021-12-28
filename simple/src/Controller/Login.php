<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class Login extends AbstractController
{
	
	/**
     * @Route("/ ")
     */
    public function main_screen()
    {
        return new Response ('Lets test annotation in AWS');
    }
	
	
    /**
     * @Route("/login")
     */
    public function annotate()
    {
        return new Response ('You finally got annotate to work');
    }
} 