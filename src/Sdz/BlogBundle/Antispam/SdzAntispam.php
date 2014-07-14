<?php
// src/Sdz/BlogBundle/Antispam/SdzAntispam.php

namespace Sdz\BlogBundle\Antispam;

class SdzAntispam extends \Twig_Extension
{
    /*
     * Twig va exécuter cette méthode pour savoir quelle(s) fonction(s) ajoute
     * notre service
     */
    public function getFunctions ()
    {
        return array(
            'checkIfSpam' => new \Twig_Function_Method($this, 'isSpam')
        );
    }
    
    /*
     * La méthode getName() identifie votre extension Twig, elle est obligatoire
     */
    public function getName ()
    {
        return 'SdzAntispam';
    }
    
    // …
}