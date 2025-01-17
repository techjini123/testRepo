<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
      $username=$request->query->get("username");
      return $this->render("login/login.html.twig",["username"=>$username]);
    }
}
