<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FirstSymfonyController{
  #[Route('/')]
  public function firstsymfony() {
    return new Response("Hello Symfony");
  }
}

?>