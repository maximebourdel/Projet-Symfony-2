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
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo " 



<header role=\"banner\" id=\"top\" class=\"navbar navbar-static-top bs-docs-nav\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button data-target=\".bs-navbar-collapse\" data-toggle=\"collapse\" type=\"button\" class=\"navbar-toggle\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      
    </div>
    <nav role=\"navigation\" class=\"collapse navbar-collapse bs-navbar-collapse\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\">
          <a href=\"#\">Accueil</a>
        </li>
        <li>
          <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("sdzblog_ajouter");
        echo "\">Ajouter Article</a>
        </li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a onclick=\"_gaq.push(['_trackEvent', 'Navbar', 'Community links', 'Expo']);\" href=\"http://expo.getbootstrap.com\">Expo</a></li>
        <li><a onclick=\"_gaq.push(['_trackEvent', 'Navbar', 'Community links', 'Blog']);\" href=\"http://blog.getbootstrap.com\">Blog</a></li>
      </ul>
    </nav>
  </div>
</header>

      <div id=\"content\" class=\"bs-docs-header\">
      <div class=\"container\">
        
        <h1>Maxime Bourdel</h1>
        
        <div id=\"carbonads-container\"><div class=\"carbonad\"><div id=\"azcarbon\"></div><script>var z = document.createElement(\"script\"); z.async = true; z.src = \"http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ\"; var s = document.getElementsByTagName(\"script\")[0]; s.parentNode.insertBefore(z, s);</script></div></div>

      </div>
    </div>

      </div>
    

<div class=\"container\">
    OK, même s'il est pour l'instant un peu vide, mon blog sera trop bien !
    
    
   
    <div id=\"accordion\">
<h3>Section 1</h3>
<div>
<p>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
</p>
</div>
<h3>Section 2</h3>
<div>
<p>
Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
suscipit faucibus urna.
</p>
</div>
<h3>Section 3</h3>
<div>
<p>
Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
</p>
<ul>
<li>List item one</li>
<li>List item two</li>
<li>List item three</li>
</ul>
</div>
<h3>Section 4</h3>
<div>
<p>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus
et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
mauris vel est.
</p>
<p>
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
inceptos himenaeos.
</p>
</div>
</div>
</div>

\t
    
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
        return array (  62 => 27,  39 => 6,  36 => 5,  29 => 3,);
    }
}
