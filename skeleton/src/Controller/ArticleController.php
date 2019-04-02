<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 02/04/2019
 * Time: 13:26
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
            $comments = ["Commentaire 1","Commentaire 2","Commentaire 3"];

            #return new Response("Mon article ayant pour titre ".$titre." s'affiche.");
            return $this->render('article/show.html.twig',["title"=>$titre, "coms"=>$comments]);
            #return new Response("Mon super article...");

        }


    }

