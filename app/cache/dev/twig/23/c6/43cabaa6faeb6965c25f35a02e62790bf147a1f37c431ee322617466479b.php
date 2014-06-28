<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_23c643cabaa6faeb6965c25f35a02e62790bf147a1f37c431ee322617466479b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>

<html>
\t<head>
\t\t<script src=\"//code.jquery.com/jquery-1.9.1.js\"></script>
\t\t<script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
\t\t";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4b6e302_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b6e302_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b6e302_part_1_bootstrap-rtl_1.css");
            // line 9
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
            // asset "4b6e302_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b6e302_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b6e302_part_1_bootstrap-rtl.min_2.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
            // asset "4b6e302_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b6e302_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b6e302_part_1_bootstrap-theme_3.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
            // asset "4b6e302_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b6e302_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b6e302_part_1_bootstrap-theme.css_4.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
            // asset "4b6e302_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b6e302_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b6e302_part_1_bootstrap-theme.min_5.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
            // asset "4b6e302_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b6e302_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b6e302_part_1_bootstrap_6.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
            // asset "4b6e302_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b6e302_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b6e302_part_1_bootstrap.css_7.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
            // asset "4b6e302_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b6e302_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b6e302_part_1_bootstrap_8.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
            // asset "4b6e302_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b6e302_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b6e302_part_1_bootstrap.min_9.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
        } else {
            // asset "4b6e302"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4b6e302") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/4b6e302.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 11
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "14d5829_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_14d5829_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/14d5829_part_1_docs.min_1.css");
            // line 13
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
        } else {
            // asset "14d5829"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_14d5829") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/14d5829.css");
            echo "\t\t\t<link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 15
        echo "\t\t
\t\t";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "93d9c5a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_affix_1.js");
            // line 19
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_alert_2.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_button_3.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_carousel_4.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_collapse_5.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_dropdown_6.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_modal_7.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_popover_8.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_scrollspy_9.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_tab_10.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_tooltip_11.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
            // asset "93d9c5a_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a_part_1_transition_12.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
        } else {
            // asset "93d9c5a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_93d9c5a") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/93d9c5a.js");
            echo "        \t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    \t";
        }
        unset($context["asset_url"]);
        // line 21
        echo "
\t\t
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<title>";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
\t</head>
  <body>
  
\t  <nav role=\"navigation\" class=\"navbar navbar-inverse\">
\t\t<div class=\"container-fluid\">
\t \t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t<div id=\"bs-example-navbar-collapse-9\" class=\"collapse navbar-collapse\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t            \t<li id=\"home\"><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil", array("page" => 1));
        echo "\">Accueil</a></li>
\t            \t<li id=\"Exprimez-vous\"><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("sdzblog_ajouter");
        echo "\">Exprimez-vous</a></li>
\t            \t<li id=\"search\">
\t            \t\t<div class=\"input-group\">
\t  \t\t\t\t\t\t<input type=\"text\" class=\"form-control\">
\t  \t\t\t\t\t\t<span class=\"input-group-addon\">
\t  \t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-link\"></span> Rechercher
\t  \t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t            \t</li>
\t          \t</ul>
\t        </div><!-- /.navbar-collapse -->
\t \t</div><!-- /.container-fluid -->
\t</nav>
  \t
  \t
    ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "    
    <div class=\"container\">
    \t© Maxime Bourdel 2014 Tous droits réservés
    </div>
  
  </body>
</html>


";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        echo "myBlog";
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "\t    \t
    ";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 51,  262 => 50,  256 => 24,  223 => 35,  206 => 24,  114 => 15,  100 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 50,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 53,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 34,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 24,  63 => 15,  59 => 19,  28 => 3,  93 => 28,  88 => 6,  78 => 21,  87 => 25,  46 => 7,  44 => 12,  31 => 5,  38 => 6,  26 => 6,  201 => 21,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 19,  117 => 16,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  21 => 1,  25 => 3,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  27 => 4,  24 => 2,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 6,  41 => 5,  35 => 5,  32 => 6,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 11,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 18,  51 => 14,  48 => 14,  45 => 17,  42 => 10,  39 => 9,  36 => 5,  33 => 9,  30 => 7,);
    }
}
