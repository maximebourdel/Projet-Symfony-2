<?php
// src/Sdz/BlogBundle/Controller/BlogController.php
namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;
use JMS\SecurityExtraBundle\Annotation\Secure;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

// Attention à bien ajouter ce use en début de contrôleur
// Entités
use Sdz\BlogBundle\Entity\Article;
use Sdz\BlogBundle\Entity\Image;
use Sdz\BlogBundle\Entity\Commentaire;
use Sdz\BlogBundle\Entity\ArticleCompetence;
// Formulaire
use Sdz\BlogBundle\Form\ArticleType;
use Sdz\BlogBundle\Form\ArticleEditType;

class BlogController extends Controller {
	
	public function indexAction($page) {
		// Pour récupérer la liste de tous les articles : on utilise findAll()
		$articles = $this->getDoctrine ()->getManager ()->getRepository ( 'SdzBlogBundle:Article' )->getArticles ( 3, $page );
		
		// Mais pour l'instant, on ne fait qu'appeler le template
		return $this->render ( 'SdzBlogBundle:Blog:index.html.twig', array (
				'articles' => $articles,
				'page' => $page,
				'nombrePage' => ceil ( count ( $articles ) / 3 ) 
		) );
	}
	
	public function voirAction(Article $article) {
		// On récupère les articleCompetence pour l'article $article
		$liste_articleCompetence = $this->getDoctrine ()->getManager ()->getRepository ( 'SdzBlogBundle:ArticleCompetence' )->findByArticle ( $article->getId () );
		
		// Puis modifiez la ligne du render comme ceci, pour prendre en compte les variables :
		return $this->render ( 'SdzBlogBundle:Blog:voir.html.twig', array (
				'article' => $article,
				'liste_articleCompetence' => $liste_articleCompetence 
		// Pas besoin de passer les commentaires à la vue, on pourra y accéder via {{ article.commentaires }}
		// 'liste_commentaires' => $article->getCommentaires()
				) );
	}
	
	public function ajouterAction() {
		
		
		$article = new Article ();
		
		// On crée le formulaire grâce à l'ArticleType
		$form = $this->createForm ( new ArticleType (), $article );
		
		// On récupère la requête
		$request = $this->getRequest ();
		
		// On vérifie qu'elle est de type POST
		if ($request->getMethod () == 'POST') {
			// On fait le lien Requête <-> Formulaire
			$form->bind ( $request );
			
			// On vérifie que les valeurs entrées sont correctes
			// (Nous verrons la validation des objets en détail dans le prochain chapitre)
			if ($form->isValid ()) {
				// On enregistre notre objet $article dans la base de données
				$em = $this->getDoctrine ()->getManager ();
				$em->persist ( $article );
				$em->flush ();
				
				// On définit un message flash
				$this->get ( 'session' )->getFlashBag ()->add ( 'info', 'Article bien ajouté' );
				
				// On redirige vers la page de visualisation de l'article nouvellement créé
				return $this->redirect ( $this->generateUrl ( 'sdzblog_voir', array (
						'slug' => $article->getSlug () 
				) ) );
			}
		}
		
		// À ce stade :
		// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
		// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
		
		return $this->render ( 'SdzBlogBundle:Blog:ajouter.html.twig', array (
				'form' => $form->createView () 
		) );
	}
	public function modifierAction(Article $article) {
		// On utiliser le ArticleEditType
		$form = $this->createForm ( new ArticleEditType (), $article );
		
		$request = $this->getRequest ();
		
		if ($request->getMethod () == 'POST') {
			$form->bind ( $request );
			
			if ($form->isValid ()) {
				// On enregistre l'article
				$em = $this->getDoctrine ()->getManager ();
				$em->persist ( $article );
				$em->flush ();
				
				// On définit un message flash
				$this->get ( 'session' )->getFlashBag ()->add ( 'info', 'Article bien modifié' );
				
				return $this->redirect ( $this->generateUrl ( 'sdzblog_voir', array (
						'slug' => $article->getSlug () 
				) ) );
			}
		}
		
		return $this->render ( 'SdzBlogBundle:Blog:modifier.html.twig', array (
				'form' => $form->createView (),
				'article' => $article 
		) );
	}
	
	public function supprimerAction(Article $article) {
		// On crée un formulaire vide, qui ne contiendra que le champ CSRF
		// Cela permet de protéger la suppression d'article contre cette faille
		$form = $this->createFormBuilder ()->getForm ();
		
		$request = $this->getRequest ();
		if ($request->getMethod () == 'POST') {
			$form->bind ( $request );
			
			if ($form->isValid ()) {
				// On supprime l'article
				$em = $this->getDoctrine ()->getManager ();
				$em->remove ( $article );
				$em->flush ();
				
				// On définit un message flash
				$this->get ( 'session' )->getFlashBag ()->add ( 'info', 'Article bien supprimé' );
				
				// Puis on redirige vers l'accueil
				return $this->redirect ( $this->generateUrl ( 'sdzblog_accueil' ) );
			}
		}
		
		// Si la requête est en GET, on affiche une page de confirmation avant de supprimer
		return $this->render ( 'SdzBlogBundle:Blog:supprimer.html.twig', array (
				'article' => $article,
				'form' => $form->createView () 
		) );
	}
	
	public function menuAction($nombre) {
		$liste = $this->getDoctrine ()->getManager ()->getRepository ( 'SdzBlogBundle:Article' )->findBy ( array (), 		// Pas de critère
		array (
				'date' => 'desc' 
		), 		// On trie par date décroissante
		$nombre, 		// On sélectionne $nombre articles
		0 );		// À partir du premier
		
		
		return $this->render ( 'SdzBlogBundle:Blog:menu.html.twig', array (
				'liste_articles' => $liste  // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
				) );
	}
}
