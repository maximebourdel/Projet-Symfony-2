<?php
// src/Sdz/BlogBundle/Controller/BlogController.php
namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

// Attention à bien ajouter ce use en début de contrôleur
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Image;
use Sdz\BlogBundle\Entity\Commentaire;

class BlogController extends Controller {
	public function indexAction($page) {
		// On ne sait pas combien de pages il y a
		// Mais on sait qu'une page doit être supérieure ou égale à 1
		if ($page < 1) {
			// On déclenche une exception NotFoundHttpException
			// Cela va afficher la page d'erreur 404 (on pourra personnaliser cette page plus tard d'ailleurs)
			throw $this->createNotFoundException ( 'Page inexistante (page = ' . $page . ')' );
		}
		
		// Ici, on récupérera la liste des articles, puis on la passera au template
		
		// Mais pour l'instant, on ne fait qu'appeler le template
		return $this->render ( 'SdzBlogBundle:Blog:index.html.twig' );
	}
	public function voirAction($id) {
		
		// On récupère l'EntityManager
		$em = $this->getDoctrine ()->getManager ();
		
		// On récupère l'entité correspondant à l'id $id
		$article = $em->getRepository ( 'SdzBlogBundle:Article' )->find ( $id );
		
		if ($article === null) {
			throw $this->createNotFoundException ( 'Article[id=' . $id . '] inexistant.' );
		}
		
		// On récupère la liste des commentaires
		$liste_commentaires = $em->getRepository ( 'SdzBlogBundle:Commentaire' )->findBy ( array (
				'article' => $id 
		) );
		
		// Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
		return $this->render ( 'SdzBlogBundle:Blog:voir.html.twig', array (
				'article' => $article,
				'liste_commentaires' => $liste_commentaires 
		) );
	}
	public function ajouterAction() {
		// Création de l'entité Article
		$article = new Article ();
		$article->setTitre ( 'Mon dernier weekend' );
		$article->setContenu ( "C'était vraiment super et on s'est bien amusé." );
		$article->setAuteur ( 'winzou' );
		
		// Création d'un premier commentaire
		$commentaire1 = new Commentaire ();
		$commentaire1->setAuteur ( 'winzou' );
		$commentaire1->setContenu ( 'On veut les photos !' );
		
		// Création d'un deuxième commentaire, par exemple
		$commentaire2 = new Commentaire ();
		$commentaire2->setAuteur ( 'Choupy' );
		$commentaire2->setContenu ( 'Les photos arrivent !' );
		
		// On lie les commentaires à l'article
		$commentaire1->setArticle ( $article );
		$commentaire2->setArticle ( $article );
		
		// Création de l'entité Image
		$image = new Image ();
		$image->setUrl ( 'http://uploads.siteduzero.com/icones/478001_479000/478657.png' );
		$image->setAlt ( 'Logo Symfony2' );
		
		// On lie l'image à l'article
		$article->setImage ( $image );
		
		// On récupère l'EntityManager
		$em = $this->getDoctrine ()->getManager ();
		
		// Étape 1 : on persiste les entités
		$em->persist ( $article );
		
		// Pour cette relation pas de cascade, car elle est définie dans l'entité Commentaire et non Article
		// On doit donc tout persister à la main ici
		$em->persist ( $commentaire1 );
		$em->persist ( $commentaire2 );
		
		// Étape 1 bis : si on n'avait pas défini le cascade={"persist"}, on devrait persister à la main l'entité $image
		// $em->persist($image);
		
		// Étape 2 : on déclenche l'enregistrement
		$em->flush ();
		
		// Reste de la méthode qu'on avait déjà écrit
		if ($this->getRequest ()->getMethod () == 'POST') {
			$this->get ( 'session' )->getFlashBag ()->add ( 'info', 'Article bien enregistré' );
			return $this->redirect ( $this->generateUrl ( 'sdzblog_voir', array (
					'id' => $article->getId () 
			) ) );
		}
		
		return $this->render ( 'SdzBlogBundle:Blog:ajouter.html.twig', array (
				'article' => $article 
		) );
	}
	
	// Ajout d'un article existant à plusieurs catégories existantes :
	public function modifierAction($id) {
		// On récupère l'EntityManager
		$em = $this->getDoctrine ()->getManager ();
		
		// On récupère l'entité correspondant à l'id $id
		$article = $em->getRepository ( 'SdzBlogBundle:Article' )->find ( $id );
		
		if ($article === null) {
			throw $this->createNotFoundException ( 'Article[id=' . $id . '] inexistant.' );
		}
		
		// On récupère toutes les catégories :
		$liste_categories = $em->getRepository ( 'SdzBlogBundle:Categorie' )->findAll ();
		
		// On boucle sur les catégories pour les lier à l'article
		foreach ( $liste_categories as $categorie ) {
			$article->addCategorie ( $categorie );
		}
		
		// Inutile de persister l'article, on l'a récupéré avec Doctrine
		
		// Étape 2 : On déclenche l'enregistrement
		$em->flush ();
		
		return new Response ( 'OK' );
		
		// … reste de la méthode
	}
	
	// Suppression des catégories d'un article :
	public function supprimerAction($id) {
		// On récupère l'EntityManager
		$em = $this->getDoctrine ()->getManager ();
		
		// On récupère l'entité correspondant à l'id $id
		$article = $em->getRepository ( 'SdzBlogBundle:Article' )->find ( $id );
		
		if ($article === null) {
			throw $this->createNotFoundException ( 'Article[id=' . $id . '] inexistant.' );
		}
		
		// On récupère toutes les catégories :
		$liste_categories = $em->getRepository ( 'SdzBlogBundle:Categorie' )->findAll ();
		
		if ($liste_categories == null ) {
			throw $this->createNotFoundException ( 'Aucune ligne Categorie dans la BDD' );
		}		
		
		// On enlève toutes ces catégories de l'article
		foreach ( $liste_categories as $categorie ) {
			// On fait appel à la méthode removeCategorie() dont on a parlé plus haut
			// Attention ici, $categorie est bien une instance de Categorie, et pas seulement un id
			$article->removeCategorie ( $categorie );
		}
		
		// On n'a pas modifié les catégories : inutile de les persister
		
		// On a modifié la relation Article - Categorie
		// Il faudrait persister l'entité propriétaire pour persister la relation
		// Or l'article a été récupéré depuis Doctrine, inutile de le persister
		
		// On déclenche la modification
		$em->flush ();
		
		return new Response ( 'OK' );
	}
}
