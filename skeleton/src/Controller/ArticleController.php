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

use App\Entity\Article;

class ArticleController extends AbstractController
  {
    /**
     * @Route("/", name="app_homepage")
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
            return $this->render('article/show.html.twig',["title"=>$titre, "comments"=>$comments]);
            #return new Response("Mon super article...");

        }

    /**
     * @Route("/articleCreate", name="article_create")
     */
        public function create()
        {
            $entityManager = $this->getDoctrine()->getManager();

            $article = new Article();
            $article->setArticleTitre('Titre Que Vous Voulez');
            $article->setArticleContenu('Du contenu');

            $article->setArticleDate('2019-04-03');
            $article->setUserId('1');


            // Cette instruction permet d'indiquer à Doctrine qu'on souhaite sauvegarder en mémoire le nouvel enregistrement
            $entityManager->persist($article);

            // Cette instruction éxécute la requete , en réalité il s'agit d'éxécuter toutes les requetes plaçées en mémoire,
            // dans notre cas, il n'y en a qu'une
            $entityManager->flush();

            return new Response('Saved new article with id '.$article->getId());
        }

    /**
     * @Route("/article/{id}", name="article_show_from_db")
     */
        public function showFromDB(Article $article)
        {
            $comments = ["Commentaire 1","Commentaire 2","Commentaire 3"];

            return $this->render('article/show.html.twig',
            ["title"=>$article->getArticleTitre(),
                "contenu"=>$article->getArticleContenu(),
                "comments"=>$comments
            ]);

        }

  }