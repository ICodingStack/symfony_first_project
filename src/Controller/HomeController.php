<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    // composer require annotantion liobary to add route before any function
    /**
     *@Route("/hello")
     */
    public function HomePage(){
       return new Response('hello this is the first route');
    }

    /**
     * @Route("/newMessage/{slug}")
     */
    public function newMessage($slug){
        return new Response(sprintf(
            'this is the second Route "$%s"!'
            ,$slug));
    }


}