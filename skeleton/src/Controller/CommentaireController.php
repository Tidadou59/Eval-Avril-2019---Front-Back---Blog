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

use App\Entity\Commentaire;

class CommentaireController extends AbstractController
{
    /**
     * @Route("/commentaire", name="commentaire_list")
     */

    public function show()
    {
        $repocommentaire = $this->getDoctrine()->getRepository(Commentaire::class);
        $commentaire = $repocommentaire->findAll();

        return $this->render('commentaire/show.html.twig',["comments"=>$commentaire]);

    }

    /**
     * @Route("/commentaireCreate", name="commentaire_create")
     */
    public function create()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $commentaire = new Commentaire();
        $commentaire->setComContenu('blablabla');

        $commentaire->setComDate('2019-04-03');
        $commentaire->setComUserId('1');


        // Cette instruction permet d'indiquer à Doctrine qu'on souhaite sauvegarder en mémoire le nouvel enregistrement
        $entityManager->persist($commentaire);

        // Cette instruction éxécute la requete , en réalité il s'agit d'éxécuter toutes les requetes plaçées en mémoire,
        // dans notre cas, il n'y en a qu'une
        $entityManager->flush();

        return new Response('Saved new article with id '.$commentaire->getId());
    }

    /**
     * @Route("/commentaires", name="commentaire_show_from_db")
     */
    public function showFromDB(Commentaire $commentaire)
    {
        return $this->render('commentaire/show.html.twig',
            ["contenu"=>$commentaire->getComContenu(),
                "date"=>$commentaire->getComDate(),
                "user"=>$commentaire->setComUserId()
            ]);

    }
}