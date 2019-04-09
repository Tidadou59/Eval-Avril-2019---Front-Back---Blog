<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $com_contenu;

    /**
     * @ORM\Column(type="integer")
     */
    private $com_user_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $com_date;

    /**
     * @ORM\Column(type="bigint")
     */
    private $article_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComContenu(): ?string
    {
        return $this->com_contenu;
    }

    public function setComContenu(string $com_contenu): self
    {
        $this->com_contenu = $com_contenu;

        return $this;
    }

    public function getComUserId(): ?int
    {
        return $this->com_user_id;
    }

    public function setComUserId(int $com_user_id): self
    {
        $this->com_user_id = $com_user_id;

        return $this;
    }

    public function getComDate(): ?\DateTimeInterface
    {
        return $this->com_date;
    }

    public function setComDate(\DateTimeInterface $com_date): self
    {
        $this->com_date = $com_date;

        return $this;
    }

    public function getArticleId(): ?int
    {
        return $this->article_id;
    }

    public function setArticleId(int $article_id): self
    {
        $this->article_id = $article_id;

        return $this;
    }
}
