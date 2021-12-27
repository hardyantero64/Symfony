<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

Class Login
{
	public function work(): Response
	
	{
		return new Response ( '<html><body> Body </body></html>');
	}
	
	
	public function login_form(): Response
	
	{
		return new Response ( '<html><body> login form </body></html>');
	}
	
}