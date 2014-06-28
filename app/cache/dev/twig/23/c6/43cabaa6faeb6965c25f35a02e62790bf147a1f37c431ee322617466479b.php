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
        return array (  265 => 51,  262 => 50,  256 => 24,  243 => 53,  241 => 50,  223 => 35,  219 => 34,  206 => 24,  201 => 21,  121 => 19,  117 => 16,  114 => 15,  100 => 13,  95 => 11,  33 => 9,  21 => 1,  197 => 94,  195 => 93,  182 => 90,  175 => 89,  170 => 88,  161 => 86,  152 => 78,  145 => 76,  130 => 73,  128 => 72,  125 => 71,  123 => 70,  105 => 69,  42 => 8,  39 => 7,  32 => 4,  29 => 7,);
    }
}
