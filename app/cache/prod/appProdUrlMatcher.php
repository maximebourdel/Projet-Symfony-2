<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/blog')) {
            // sdzblog_accueil
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_accueil')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::indexAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // sdzblog_voir
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_voir')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // sdzblog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'sdzblog_ajouter',);
                }

            }

            // sdzblog_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_modifier')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

            // sdzblog_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sdzblog_supprimer')), array (  '_controller' => 'Sdz\\BlogBundle\\Controller\\BlogController::supprimerAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
