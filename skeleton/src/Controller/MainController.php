<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 08/04/2019
 * Time: 14:21
 */

namespace App\Controller;


use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     *
     */
    public function homepage()
    {

        /*if (true === $this->get("security.authorization_checker")->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute("user_index");
        } elseif (true === $this->get("security.authorization_checker")->isGranted('ROLE_USER')) {
            return $this->redirectToRoute("article");
        } else {
            return $this->redirectToRoute("app_login");
        }*/



        /*
        if (true === $this->get("security.authorization_checker")->isGranted('IS_AUTHENFICATED_FULLY')) {
        */
            return $this->redirectToRoute('article_index');
         /*
        }else{
            return $this->render('accueil.html.twig');
        }
         */
    }
}

