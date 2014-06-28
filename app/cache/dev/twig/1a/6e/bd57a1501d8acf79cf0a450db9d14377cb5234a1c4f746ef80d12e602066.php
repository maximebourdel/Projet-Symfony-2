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
        return array (  77 => 20,  70 => 18,  58 => 14,  265 => 51,  262 => 50,  256 => 24,  223 => 35,  206 => 24,  114 => 15,  100 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 50,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 53,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 34,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 47,  119 => 42,  102 => 32,  71 => 17,  67 => 24,  63 => 15,  59 => 19,  28 => 3,  93 => 28,  88 => 6,  78 => 21,  87 => 25,  46 => 10,  44 => 12,  31 => 5,  38 => 6,  26 => 6,  201 => 21,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 19,  117 => 16,  105 => 36,  91 => 27,  62 => 23,  49 => 11,  21 => 1,  25 => 3,  94 => 28,  89 => 26,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  27 => 4,  24 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 30,  83 => 23,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 45,  125 => 44,  122 => 43,  116 => 41,  112 => 40,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 11,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 16,  60 => 6,  57 => 11,  54 => 13,  51 => 14,  48 => 14,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 9,  30 => 7,);
    }
}
