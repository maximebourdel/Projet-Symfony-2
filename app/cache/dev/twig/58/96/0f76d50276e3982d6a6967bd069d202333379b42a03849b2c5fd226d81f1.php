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
\t
\t\t<h3>Formulaire d'article</h3>
\t
\t\t<div class=\"well\">
\t\t\t<form method=\"post\"  ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t\t
\t\t\t\t
\t\t\t    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'label', array("label" => "Contenu de l'article"));
        echo "
\t\t\t\t</br>
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'errors');
        echo "
\t\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contenu"), 'widget');
        echo "
\t\t\t    
\t\t\t    </br>
\t\t\t\t
\t\t\t    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" />
\t\t\t
\t\t\t</form>
\t\t</div>
\t
\t</div>
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
        return array (  70 => 23,  63 => 19,  59 => 18,  54 => 16,  48 => 13,  41 => 8,  38 => 7,  32 => 4,  29 => 3,);
    }
}
