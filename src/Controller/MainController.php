<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController{

    public function index(){
        return "Olá Mundo do Symfony";
    }
}