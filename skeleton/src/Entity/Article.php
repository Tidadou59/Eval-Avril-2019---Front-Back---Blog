<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
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
    private $article_titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $article_contenu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $article_date;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleTitre(): ?string
    {
        return $this->article_titre;
    }

    public function setArticleTitre(string $article_titre): self
    {
        $this->article_titre = $article_titre;

        return $this;
    }

    public function getArticleContenu(): ?string
    {
        return $this->article_contenu;
    }

    public function setArticleContenu(string $article_contenu): self
    {
        $this->article_contenu = $article_contenu;

        return $this;
    }

    public function getArticleDate(): ?string
    {
        return $this->article_date;
    }

    public function setArticleDate(string $article_date): self
    {
        $this->article_date = $article_date;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
