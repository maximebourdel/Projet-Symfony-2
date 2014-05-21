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
        return array (  197 => 94,  195 => 93,  182 => 90,  175 => 89,  170 => 88,  161 => 86,  152 => 78,  145 => 76,  130 => 73,  128 => 72,  125 => 71,  123 => 70,  105 => 69,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
