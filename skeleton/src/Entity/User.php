<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *     fields={"user_mail"},
 *     message="l'email que vous avez indiqué est déjà utilisé !"
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire 8 caractères minimum")
     */
    private $user_password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $user_mail;

    /**
     * @ORM\Column(type="bigint")
     */
    private $user_statut;

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getUserPseudo(): ?string
    {
        return $this->user_pseudo;
    }

    public function setUserPseudo(string $user_pseudo): self
    {
        $this->user_pseudo = $user_pseudo;

        return $this;
    }





    public function getUsername(): ?string
    {
        return $this->user_pseudo;
    }

    public function setUsername(string $user_pseudo): self
    {
        $this->user_pseudo = $user_pseudo;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->user_password;
    }

    public function setPassword(string $user_password): self
    {
        $this->user_password = $user_password;

        return $this;
    }





    public function getUserPassword(): ?string
    {
        return $this->user_password;
    }

    public function setUserPassword(string $user_password): self
    {
        $this->user_password = $user_password;

        return $this;
    }






    public function getUserMail(): ?string
    {
        return $this->user_mail;
    }

    public function setUserMail(string $user_mail): self
    {
        $this->user_mail = $user_mail;

        return $this;
    }

    public function getUserStatut(): ?int
    {
        return $this->user_statut;
    }

    public function setUserStatut(int $user_statut): self
    {
        $this->user_statut = $user_statut;

        return $this;
    }




    public function eraseCredentials()
    {
    }

    public function getSalt()
    {
    }

    public function getRoles()
    {
        if ($this->user_statut==1)return ['ROLE_USER'];
        elseif ($this->user_statut==2)return['ROLE_ADMIN'];
        else return[];
    }

}
