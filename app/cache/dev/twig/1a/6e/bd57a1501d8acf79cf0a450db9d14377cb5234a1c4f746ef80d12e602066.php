<?php

/* SdzBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_1a6ebd57a1501d8acf79cf0a450db9d14377cb5234a1c4f746ef80d12e602066 extends Twig_Template
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

    // line 1
    public function block_title($context, array $blocks = array())
    {
        // line 2
        echo "Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<h2>
\t";
        // line 5
        echo " 
\t";
        // line 6
        if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
            echo " 
\t\t<img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "url"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "alt"), "html", null, true);
            echo "\" /> 
\t";
        }
        // line 8
        echo " 
\t";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
        echo "
</h2>
<i>Par ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
        echo "</i>

<div class=\"well\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
        echo "</div>

<p>
\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\" class=\"btn\"> <i
\t\tclass=\"icon-chevron-left\"></i> Retour à la liste
\t</a> <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\"
\t\tclass=\"btn\"> <i class=\"icon-edit\"></i> Modifier l'article
\t</a> <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\"
\t\tclass=\"btn\"> <i class=\"icon-trash\"></i> Supprimer l'article
\t</a>
</p>

";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_commentaires"]) ? $context["liste_commentaires"] : $this->getContext($context, "liste_commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 26
            echo "\t<div class=\"well\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "contenu"), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " 

";
        // line 29
        if ((twig_length_filter($this->env, (isset($context["liste_articleCompetence"]) ? $context["liste_articleCompetence"] : $this->getContext($context, "liste_articleCompetence"))) > 0)) {
            // line 30
            echo "\t<div>
\tCompétences utilisées dans cet article :
\t    <ul>
            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_articleCompetence"]) ? $context["liste_articleCompetence"] : $this->getContext($context, "liste_articleCompetence")));
            foreach ($context['_seq'] as $context["_key"] => $context["articleCompetence"]) {
                // line 34
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleCompetence"]) ? $context["articleCompetence"] : $this->getContext($context, "articleCompetence")), "competence"), "nom"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleCompetence"]) ? $context["articleCompetence"] : $this->getContext($context, "articleCompetence")), "niveau"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleCompetence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </ul>
    </div>
";
        }
        // line 39
        echo "
";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 41
            echo "\t<div class=\"well\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo " 



";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 42,  148 => 41,  144 => 40,  141 => 39,  136 => 36,  125 => 34,  121 => 33,  116 => 30,  114 => 29,  110 => 27,  101 => 26,  97 => 25,  89 => 20,  84 => 18,  79 => 16,  73 => 13,  66 => 11,  61 => 9,  58 => 8,  51 => 7,  47 => 6,  44 => 5,  40 => 3,  32 => 2,  29 => 1,);
    }
}
