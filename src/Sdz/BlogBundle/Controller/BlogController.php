<?php
// src/Sdz/BlogBundle/Controller/BlogController.php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

// Attention à bien ajouter ce use en début de contrôleur
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Image;

class BlogController extends Controller
{
  public function indexAction($page)
  {
    // On ne sait pas combien de pages il y a
    // Mais on sait qu'une page doit être supérieure ou égale à 1
    if( $page < 1 )
    {
      // On déclenche une exception NotFoundHttpException
      // Cela va afficher la page d'erreur 404 (on pourra personnaliser cette page plus tard d'ailleurs)
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    // Ici, on récupérera la liste des articles, puis on la passera au template

    // Mais pour l'instant, on ne fait qu'appeler le template
    return $this->render('SdzBlogBundle:Blog:index.html.twig');
  }
  
  
  public function voirAction($id)
  {
  	
  	// Création de l'entité Article
  	$article = new Article();
  	$article->setTitre('Mon dernier weekend');
  	$article->setContenu("C'était vraiment super et on s'est bien amusé.");
  	$article->setAuteur('winzou');
  	 
  	// Création de l'entité Image
  	$image = new Image();
  	$image->setUrl('http://uploads.siteduzero.com/icones/478001_479000/478657.png');
  	$image->setAlt('Logo Symfony2');
  	 
  	// On lie l'image à l'article
  	$article->setImage($image);
  	 
  	// On récupère l'EntityManager
  	$em = $this->getDoctrine()->getManager();
  	 
  	// Étape 1 : on persiste les entités
  	$em->persist($article);
  	 
  	// Étape 1 bis : si on n'avait pas défini le cascade={"persist"}, on devrait persister à la main l'entité $image
  	// $em->persist($image);
  	 
  	// Étape 2 : on déclenche l'enregistrement
  	$em->flush();
    // Ici, on récupérera l'article correspondant à l'id $id
    
    return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
      'id' => $id, 'article' => $article
    ));
  }
  
  
  public function ajouterAction()
  {
  	// Création de l'entité Article
  	$article = new Article();
  	$article->setTitre('Mon dernier weekend');
  	$article->setContenu("C'était vraiment super et on s'est bien amusé.");
  	$article->setAuteur('winzou');
  	
  	// Création de l'entité Image
  	$image = new Image();
  	$image->setUrl('http://uploads.siteduzero.com/icones/478001_479000/478657.png');
  	$image->setAlt('Logo Symfony2');
  	
  	// On lie l'image à l'article
  	$article->setImage($image);
  	
  	// On récupère l'EntityManager
  	$em = $this->getDoctrine()->getManager();
  	
  	// Étape 1 : on persiste les entités
  	$em->persist($article);
  	
  	// Étape 1 bis : si on n'avait pas défini le cascade={"persist"}, on devrait persister à la main l'entité $image
  	// $em->persist($image);
  	
  	// Étape 2 : on déclenche l'enregistrement
  	$em->flush();
  	
  	
    
    // Reste de la méthode qu'on avait déjà écrit
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => $article->getId())) );
    }

    return $this->render('SdzBlogBundle:Blog:ajouter.html.twig', array(
  			'article' => $article
  	));
  }
    
  
  public function modifierAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on s'occupera de la création et de la gestion du formulaire

    return $this->render('SdzBlogBundle:Blog:index.html.twig');
  }

  public function superfractionnement($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on gérera la suppression de l'article en question

    return $this->render('SdzBlogBundle:Blog:supprimer.html.twig');
  }
}
