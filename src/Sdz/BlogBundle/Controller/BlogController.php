<?php
// src/Sdz/BlogBundle/Controller/BlogController.php
namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

// Attention à bien ajouter ce use en début de contrôleur
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Image;
use Sdz\BlogBundle\Entity\Commentaire;
use Sdz\BlogBundle\Entity\ArticleCompetence;

class BlogController extends Controller {
	public function indexAction($page) {
		// On ne sait pas combien de pages il y a
		// Mais on sait qu'une page doit être supérieure ou égale à 1
		if ($page < 1) {
			// On déclenche une exception NotFoundHttpException
			// Cela va afficher la page d'erreur 404 (on pourra personnaliser cette page plus tard d'ailleurs)
			throw $this->createNotFoundException ( 'Page inexistante (page = ' . $page . ')' );
		}
		
    	// Pour récupérer la liste de tous les articles : on utilise findAll()
    	$articles = $this->getDoctrine()
                     	->getManager()
                     	->getRepository('SdzBlogBundle:Article')
                     	->findAll();
    	
		// Mais pour l'instant, on ne fait qu'appeler le template
		return $this->render ( 'SdzBlogBundle:Blog:index.html.twig' , array(
      		'articles' => $articles
    	));
	}
	public function voirAction( Article $article ) {		
		// On récupère les articleCompetence pour l'article $article
   	 	$liste_articleCompetence = $this->getDoctrine()
   	 									->getManager()
   	 									->getRepository( 'SdzBlogBundle:ArticleCompetence' )
                                		->findByArticle( $article-> getId () );

    	// Puis modifiez la ligne du render comme ceci, pour prendre en compte les variables :
    	return $this->render('SdzBlogBundle:Blog:voir.html.twig', array(
      		'article'                 => $article,
      		'liste_articleCompetence' => $liste_articleCompetence,
      	// Pas besoin de passer les commentaires à la vue, on pourra y accéder via {{ article.commentaires }}
      	// 'liste_commentaires'   => $article->getCommentaires()
    ));
	}
	public function ajouterAction() {
	    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :
	  
	    if ($this->get('request')->getMethod() == 'POST') {
	      // Ici, on s'occupera de la création et de la gestion du formulaire
	  
	      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
	  
	      // Puis on redirige vers la page de visualisation de cet article
	      return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => 1)) );
	    }
	  
	    // Si on n'est pas en POST, alors on affiche le formulaire
	    return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
	}
	
	// Ajout d'un article existant à plusieurs catégories existantes :
	public function modifierAction( Article $article ) {
	    
	    return $this->render('SdzBlogBundle:Blog:modifier.html.twig', array(
	      'article' => $article
	    ));
	}
	
	// Suppression des catégories d'un article :
	public function supprimerAction( Article $article ) {
		
		if ($this->get('request')->getMethod() == 'POST') {
			// Si la requête est en POST, on supprimera l'article
		
			$this->get('session')->getFlashBag()->add('info', 'Article bien supprimé');
		
			// Puis on redirige vers l'accueil
			return $this->redirect( $this->generateUrl('sdzblog_accueil') );
		}
		
		// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
		return $this->render('SdzBlogBundle:Blog:supprimer.html.twig', array(
				'article' => $article
		));
	}
	
	public function menuAction($nombre)
	{
		$liste = $this->getDoctrine()
		->getManager()
		->getRepository('SdzBlogBundle:Article')
		->findBy(
			array(),          // Pas de critère
			array('date' => 'desc'), // On trie par date décroissante
			$nombre,         // On sélectionne $nombre articles
			0                // À partir du premier
		);
	
		return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
				'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
		));
	}
}
