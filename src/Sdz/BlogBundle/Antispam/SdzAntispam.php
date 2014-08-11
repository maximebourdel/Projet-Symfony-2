<?php
// src/Sdz/BlogBundle/Antispam/SdzAntispam.php

namespace Sdz\BlogBundle\Antispam;

class SdzAntispam extends \Twig_Extension
{
    protected $mailer;
    protected $locale;
    protected $nbForSpam;
    
    // Dans le constructeur, on retire $locale des arguments
    public function __construct(\Swift_Mailer $mailer, $nbForSpam)
    {
        $this->mailer    = $mailer;
        $this->nbForSpam = (int) $nbForSpam;
    }
    
    // Et on ajoute un setter
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }
    
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