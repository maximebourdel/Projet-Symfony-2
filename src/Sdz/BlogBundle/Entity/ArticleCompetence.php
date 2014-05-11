<?php
// src/Sdz/BlogBundle/Entity/ArticleCompetence.php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ArticleCompetence
{
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Sdz\BlogBundle\Entity\Article")
   */
  private $article;

  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Sdz\BlogBundle\Entity\Competence")
   */
  private $competence;

  /**
   * @ORM\Column()
   */
  private $niveau; // Ici j'ai un attribut de relation « niveau »
}