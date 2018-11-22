<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController {

  public function index() {
    return $this->render('index/index.html.twig');
  }

  public function ledOn() {
    return $this->redirectToRoute('index');
  }

  public function ledOff() {
    return $this->redirectToRoute('index');
  }

}