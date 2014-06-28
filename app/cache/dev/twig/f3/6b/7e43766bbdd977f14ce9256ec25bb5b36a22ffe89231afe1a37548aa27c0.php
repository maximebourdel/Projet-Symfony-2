<?php

/* SdzBlogBundle:Blog:index.html.twig */
class __TwigTemplate_f36b7e43766bbdd977f14ce9256ec25bb5b36a22ffe89231afe1a37548aa27c0 extends Twig_Template
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
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t
\t<div class=\"container\">
\t\t<div class=\"col-sm-d\">
\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\"
\t\t\t\t\t\t\t\thref=\"#collapseOne\"> Deroule moi </a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapseOne\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t<div class=\"panel-body\">Je suis vide</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\"
\t\t\t\t\t\t\t\thref=\"#collapseTwo\"> Lorem </a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapseTwo\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t<div class=\"panel-body\">Anim pariatur cliche reprehenderit, enim
\t\t\t\t\t\t\teiusmod high life accusamus terry richardson ad squid. 3 wolf moon
\t\t\t\t\t\t\tofficia aute, non cupidatat skateboard dolor brunch. Food truck
\t\t\t\t\t\t\tquinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
\t\t\t\t\t\t\taliqua put a bird on it squid single-origin coffee nulla assumenda
\t\t\t\t\t\t\tshoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
\t\t\t\t\t\t\twes anderson cred nesciunt sapiente ea proident. Ad vegan
\t\t\t\t\t\t\texcepteur butcher vice lomo. Leggings occaecat craft beer
\t\t\t\t\t\t\tfarm-to-table, raw denim aesthetic synth nesciunt you probably
\t\t\t\t\t\t\thaven't heard of them accusamus labore sustainable VHS.</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\"
\t\t\t\t\t\t\t\thref=\"#collapseThree\"> ipsum </a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"collapseThree\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t<div class=\"panel-body\">Anim pariatur cliche reprehenderit, enim
\t\t\t\t\t\t\teiusmod high life accusamus terry richardson ad squid. 3 wolf moon
\t\t\t\t\t\t\tofficia aute, non cupidatat skateboard dolor brunch. Food truck
\t\t\t\t\t\t\tquinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
\t\t\t\t\t\t\taliqua put a bird on it squid single-origin coffee nulla assumenda
\t\t\t\t\t\t\tshoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
\t\t\t\t\t\t\twes anderson cred nesciunt sapiente ea proident. Ad vegan
\t\t\t\t\t\t\texcepteur butcher vice lomo. Leggings occaecat craft beer
\t\t\t\t\t\t\tfarm-to-table, raw denim aesthetic synth nesciunt you probably
\t\t\t\t\t\t\thaven't heard of them accusamus labore sustainable VHS.</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t
\t<ul>
  \t\t";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 70
            echo "    \t";
            // line 71
            echo "    \t\t<div class=\"container\">
    \t\t\t";
            // line 72
            $this->env->loadTemplate("SdzBlogBundle:Blog:article.html.twig")->display(array_merge($context, array("accueil" => true)));
            // line 73
            echo "    \t\t</div>
    \t\t<hr />
  \t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 76
            echo "    \t\t<p>Pas (encore !) d'articles</p>
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t</ul>
\t
\t
\t
\t
\t<div class=\"container\">
    \t<ul class=\"pagination\">
    \t\t";
        // line 86
        echo "    \t\t";
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_accueil", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1))), "html", null, true);
            echo "\">&laquo;</a></li>";
        }
        echo " 
\t      \t";
        // line 88
        echo "\t      \t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 89
            echo "\t        \t<li";
            if (((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
\t          \t\t<a id=\"page";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_accueil", array("page" => (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "html", null, true);
            echo "</a>
\t        \t</li>
\t      \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "\t      \t";
        // line 94
        echo "\t      \t";
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")))) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_accueil", array("page" => ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1))), "html", null, true);
            echo "\">&raquo;</a></li>";
        }
        echo " 
    \t</ul>
  \t</div>
  \t

<script> \$('#home').addClass('active')</script>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 94,  195 => 93,  175 => 89,  170 => 88,  161 => 86,  152 => 78,  77 => 20,  70 => 18,  58 => 14,  265 => 51,  262 => 50,  256 => 24,  223 => 35,  206 => 24,  114 => 15,  100 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 50,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 72,  107 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 53,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 34,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 47,  119 => 42,  102 => 32,  71 => 17,  67 => 24,  63 => 15,  59 => 19,  28 => 3,  93 => 28,  88 => 6,  78 => 21,  87 => 25,  46 => 10,  44 => 10,  31 => 5,  38 => 7,  26 => 6,  201 => 21,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 19,  117 => 16,  105 => 69,  91 => 27,  62 => 23,  49 => 11,  21 => 1,  25 => 3,  94 => 28,  89 => 26,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  27 => 4,  24 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 11,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 76,  139 => 45,  131 => 52,  123 => 70,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 30,  83 => 23,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 90,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 73,  125 => 71,  122 => 43,  116 => 41,  112 => 40,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 11,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 16,  60 => 6,  57 => 11,  54 => 13,  51 => 12,  48 => 14,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 9,  30 => 7,);
    }
}
