<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 02/04/2019
 * Time: 13:26
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
    {
    /**
     * @Route("/")
     */
        public function homepage()
        {
            return new Response("TEST");
        }

    /**
     * @Route("/articles/{titre}")
     */
        public function show($titre)
        {
            return new Response("Mon article ayant pour titre ".$titre." s'affiche.");
            #return new Response("Mon super article...");
        }
    }