<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function HomePage(){
       return new Response('hello this is the first route');
    }

}