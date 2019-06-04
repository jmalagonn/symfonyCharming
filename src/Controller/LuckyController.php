<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{   
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('home/homepage.html.twig');
    }
    
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = random_int(0, 100);
        
        return $this->render('lucky/number.html.twig',[
            'number' => $number,
        ]);
    }
}