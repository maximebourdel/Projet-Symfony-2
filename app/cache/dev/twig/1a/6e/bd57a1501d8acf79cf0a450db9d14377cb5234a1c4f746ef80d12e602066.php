<?php

/* SdzBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_1a6ebd57a1501d8acf79cf0a450db9d14377cb5234a1c4f746ef80d12e602066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tLecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"container-fluid\">
\t<h2>
\t\t";
        // line 10
        echo " 
\t\t";
        // line 11
        if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
            echo " 
\t\t\t<img 
\t\t\t\tsrc=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "webPath")), "html", null, true);
            echo "\"
  \t\t\t\talt=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "alt"), "html", null, true);
            echo "\"
\t\t\t/> 
\t\t";
        }
        // line 16
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
        echo "
\t</h2>
\t<i>Par ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
        echo "</i>
\t
\t<div class=\"well\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
        echo "</div>
\t
\t<p>
\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\" class=\"btn\"> 
\t\t\t<i class=\"icon-chevron-left\"></i> Retour à la liste
\t\t</a> 
\t\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\"
\t\t\tclass=\"btn\"> 
\t\t\t<i class=\"icon-edit\"></i> Modifier l'article
\t\t</a> 
\t\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\"
\t\t\tclass=\"btn\"> 
\t\t\t<i class=\"icon-trash\"></i> Supprimer l'article
\t\t</a>
\t</p>
\t
\t";
        // line 36
        if ((twig_length_filter($this->env, (isset($context["liste_articleCompetence"]) ? $context["liste_articleCompetence"] : $this->getContext($context, "liste_articleCompetence"))) > 0)) {
            // line 37
            echo "\t\t<div>
\t\tCompétences utilisées dans cet article :
\t\t\t<ul>
\t\t\t\t";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_articleCompetence"]) ? $context["liste_articleCompetence"] : $this->getContext($context, "liste_articleCompetence")));
            foreach ($context['_seq'] as $context["_key"] => $context["articleCompetence"]) {
                // line 41
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleCompetence"]) ? $context["articleCompetence"] : $this->getContext($context, "articleCompetence")), "competence"), "nom"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleCompetence"]) ? $context["articleCompetence"] : $this->getContext($context, "articleCompetence")), "niveau"), "html", null, true);
                echo "
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleCompetence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 47
        echo " 
</div>
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
        return array (  135 => 47,  130 => 45,  119 => 42,  116 => 41,  112 => 40,  107 => 37,  105 => 36,  96 => 30,  89 => 26,  83 => 23,  77 => 20,  70 => 18,  64 => 16,  58 => 14,  54 => 13,  49 => 11,  46 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
