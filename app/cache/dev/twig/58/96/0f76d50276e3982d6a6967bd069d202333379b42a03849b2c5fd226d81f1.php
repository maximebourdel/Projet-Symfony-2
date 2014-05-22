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

    // line 1
    public function block_title($context, array $blocks = array())
    {
        // line 2
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">

\t<h3>Formulaire d'article</h3>

\t<div class=\"well\">
\t\t<form method=\"post\"  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " <input type=\"submit\" class=\"btn btn-primary\" />
\t\t</form>
\t</div>

</div>
<!-- /container -->





<script> \$('#Exprimez-vous').addClass('active')</script>
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
        return array (  50 => 9,  46 => 8,  39 => 3,  32 => 2,  29 => 1,);
    }
}
