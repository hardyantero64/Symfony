<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class Login extends AbstractController
{
	
	/**
     * @Route(" / ")
     */
    public function main_screen()
    {
        return new Response (' <form action="/login" method="post">
		
		<img src="https://www.parentsone.com/wp-content/uploads/2017/07/caturday-cat-cafe-shop-2.jpg" alt="Cat Cafe">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>');
    }
	
	
    /**
     * @Route("/login")
     */
    public function annotate()
    {
        return new Response ('You finally got annotate to work');
    }
}