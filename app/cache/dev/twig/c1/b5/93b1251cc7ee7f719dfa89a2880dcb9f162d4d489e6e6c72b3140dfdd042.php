<?php

/* MopaBootstrapBundle::icons.html.twig */
class __TwigTemplate_c1b593b1251cc7ee7f719dfa89a2880dcb9f162d4d489e6e6c72b3140dfdd042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function geticon($_name = null, $_inverted = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "inverted" => $_inverted,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<i class=\"icon-";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            if (((array_key_exists("inverted", $context)) ? (_twig_default_filter((isset($context["inverted"]) ? $context["inverted"] : $this->getContext($context, "inverted")), false)) : (false))) {
                echo " icon-white";
            }
            echo "\"></i>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  21 => 1,);
    }
}
