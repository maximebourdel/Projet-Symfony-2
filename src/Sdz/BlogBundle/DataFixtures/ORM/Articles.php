<?php
// src/Sdz/BlogBundle/DataFixtures/ORM/Categories.php

namespace Sdz\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sdz\BlogBundle\Entity\Article;

class Articles implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    // Liste des noms de catégorie à ajouter
  	$id = array('1', '2', '3', '4');
    $titre = array('titre1', 'titre2', 'titre3', 'titre4');
    $auteur = array('bourdel', 'bourdel2', 'bourdel3', 'bourdel4');
    $contenu = array(
    		'Quidem iudicium audietis esse iuratis declarat Nam nostra sed squalor cernitis dixistis Romani iudicantibus dixistis.', 
    		'Congressione magnis frequentibus inpares omnia congressione praesidiis caedium campestrem stataria caedium igitur tramitibus se diu.', 
    		'Et Nisibi ex inplorans litis iunxerat praeceptum metu ruinarum subsidia quorum ruinarum cerneret militum consociatos.', 
    		'Fractis multiplices villam ambo et est Antiochia nomine Apollinares ad quae Antiochia ut fortunas multorum.'
    );
    
    
    for($i = 0; $i < 4; $i++)
    {
    	// On crée la catégorie
	    $article = new Article();
	    $article->setTitre($titre[$i]);
	    $article->setAuteur($auteur[$i]);
	    $article->setContenu($contenu[$i]);
	    
	    // On la persiste
	    $manager->persist($article);
    }

    // On déclenche l'enregistrement
    $manager->flush();
  }
}