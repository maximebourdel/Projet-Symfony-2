<?php

/* SdzBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_58960f76d50276e3982d6a6967bd069d202333379b42a03849b2c5fd226d81f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SdzBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"container\">
\t\t";
        // line 10
        echo "\t\t<div class=\"well\">
  \t\t\t<form method=\"post\" ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
   \t\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
   \t\t\t \t<input type=\"submit\" class=\"btn btn-primary\" />
  \t\t\t</form>
\t\t</div>
\t</div>
\t
\t
\t
\t
\t";
        // line 23
        echo "\t<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>

\t";
        // line 26
        echo "\t<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
\t  var \$container = \$('div#sdz_blogbundle_article_categories_control_group');
\t
\t  // On ajoute un lien pour ajouter une nouvelle catégorie
\t  var \$lienAjout = \$('<a href=\"#\" id=\"ajout_categorie\" class=\"btn\">Ajouter une catégorie</a>');
\t  \$container.append(\$lienAjout);
\t
\t  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
\t  \$lienAjout.click(function(e) {
\t    ajouterCategorie(\$container);
\t    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
\t    return false;
\t  });
\t
\t  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
\t  var index = \$container.find(':input').length;
\t
\t  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
\t  if (index == 0) {
\t    ajouterCategorie(\$container);
\t  } else {
\t    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
\t    \$container.children('div').each(function() {
\t      ajouterLienSuppression(\$(this));
\t    });
\t  }
\t
\t  // La fonction qui ajoute un formulaire Categorie
\t  function ajouterCategorie(\$container) {
\t    // Dans le contenu de l'attribut « data-prototype », on remplace :
\t    // - le texte \"__name__label__\" qu'il contient par le label du champ
\t    // - le texte \"__name__\" qu'il contient par le numéro du champ
\t    var \$prototype = \$(
\t    \t    \t\t\t\$container.attr('data-prototype').replace(
\t    \t    \t    \t\t/__name__label__/g, 
\t    \t    \t    \t\t'Catégorie n°' + (index+1)
\t    \t    \t    \t).replace(
\t    \t    \t    \t    /__name__/g, index
\t    \t    \t   \t));
\t
\t    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
\t    ajouterLienSuppression(\$prototype);
\t
\t    // On ajoute le prototype modifié à la fin de la balise <div>
\t    \$container.append(\$prototype);
\t
\t    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
\t    index++;
\t  }
\t
\t  // La fonction qui ajoute un lien de suppression d'une catégorie
\t  function ajouterLienSuppression(\$prototype) {
\t    // Création du lien
\t    \$lienSuppression = \$('<a href=\"#\" id=\"btnSupprimer'+index+'\" class=\"btn btn-danger\">Supprimer</a>');
\t
\t    // Ajout du lien
\t    \$prototype.append(\$lienSuppression);
\t
\t    // Ajout du listener sur le clic du lien
\t    \$lienSuppression.click(function(e) {
\t      \t\$prototype.remove();
\t      \te.preventDefault(); // évite qu'un # apparaisse dans l'URL
\t      \t
\t      \tindex--;
\t      \treturn false;
\t    });
\t  }
\t});
\t</script>
\t
\t


\t<script> \$('#Exprimez-vous').addClass('active')</script>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 26,  63 => 23,  51 => 12,  47 => 11,  44 => 10,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
