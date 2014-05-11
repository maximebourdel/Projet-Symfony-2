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
        echo "



<header role=\"banner\" id=\"top\"
\tclass=\"navbar navbar-static-top bs-docs-nav\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button data-target=\".bs-navbar-collapse\" data-toggle=\"collapse\"
\t\t\t\ttype=\"button\" class=\"navbar-toggle\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span> <span
\t\t\t\t\tclass=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span
\t\t\t\t\tclass=\"icon-bar\"></span>
\t\t\t</button>

\t\t</div>
\t\t<nav role=\"navigation\"
\t\t\tclass=\"collapse navbar-collapse bs-navbar-collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li class=\"active\"><a href=\"#\">Accueil</a></li>
\t\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("sdzblog_ajouter");
        echo "\">Ajouter Article</a></li>
\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li><a
\t\t\t\t\tonclick=\"_gaq.push(['_trackEvent', 'Navbar', 'Community links', 'Expo']);\"
\t\t\t\t\thref=\"http://expo.getbootstrap.com\">Expo</a></li>
\t\t\t\t<li><a
\t\t\t\t\tonclick=\"_gaq.push(['_trackEvent', 'Navbar', 'Community links', 'Blog']);\"
\t\t\t\t\thref=\"http://blog.getbootstrap.com\">Blog</a></li>
\t\t\t</ul>
\t\t</nav>
\t</div>
</header>

<div id=\"content\" class=\"bs-docs-header\">
\t<div class=\"container\">

\t\t<h1>Maxime Bourdel</h1>

\t\t<div id=\"carbonads-container\">
\t\t\t<div class=\"carbonad\">
\t\t\t\t<div id=\"azcarbon\"></div>
\t\t\t\t<script>var z = document.createElement(\"script\"); z.async = true; z.src = \"http://engine.carbonads.com/z/32341/azcarbon_2_1_0_HORIZ\"; var s = document.getElementsByTagName(\"script\")[0]; s.parentNode.insertBefore(z, s);</script>
\t\t\t</div>
\t\t</div>

\t</div>
</div>

</div>
<div class=\"container\">
\t<div class=\"progress\">
\t\t<div style=\"width: 25%\" class=\"progress-bar progress-bar-info\">
\t\t\t
\t\t</div>
\t\t<div style=\"width: 25%\" class=\"progress-bar progress-bar-success\">
\t\t\t
\t\t</div>
\t\t<div style=\"width: 25%\" class=\"progress-bar progress-bar-danger\">
\t\t\t
\t\t</div>
\t\t<div style=\"width: 25%\" class=\"progress-bar progress-bar-warning\">
\t\t\t
\t\t</div>

\t</div>
</div>

<div class=\"container\">OK, même s'il est pour l'instant un peu vide, mon
\tblog sera trop bien !</div>
</br>
<div class=\"container\">
\t<div class=\"col-sm-d\">
\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\"
\t\t\t\t\t\t\thref=\"#collapseOne\"> NUMBER 1 </a>
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div id=\"collapseOne\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"panel-body\">Anim pariatur cliche reprehenderit, enim
\t\t\t\t\t\teiusmod high life accusamus terry richardson ad squid. 3 wolf moon
\t\t\t\t\t\tofficia aute, non cupidatat skateboard dolor brunch. Food truck
\t\t\t\t\t\tquinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
\t\t\t\t\t\taliqua put a bird on it squid single-origin coffee nulla assumenda
\t\t\t\t\t\tshoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
\t\t\t\t\t\twes anderson cred nesciunt sapiente ea proident. Ad vegan
\t\t\t\t\t\texcepteur butcher vice lomo. Leggings occaecat craft beer
\t\t\t\t\t\tfarm-to-table, raw denim aesthetic synth nesciunt you probably
\t\t\t\t\t\thaven't heard of them accusamus labore sustainable VHS.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\"
\t\t\t\t\t\t\thref=\"#collapseTwo\"> NUMBER 2 </a>
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div id=\"collapseTwo\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"panel-body\">Anim pariatur cliche reprehenderit, enim
\t\t\t\t\t\teiusmod high life accusamus terry richardson ad squid. 3 wolf moon
\t\t\t\t\t\tofficia aute, non cupidatat skateboard dolor brunch. Food truck
\t\t\t\t\t\tquinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
\t\t\t\t\t\taliqua put a bird on it squid single-origin coffee nulla assumenda
\t\t\t\t\t\tshoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
\t\t\t\t\t\twes anderson cred nesciunt sapiente ea proident. Ad vegan
\t\t\t\t\t\texcepteur butcher vice lomo. Leggings occaecat craft beer
\t\t\t\t\t\tfarm-to-table, raw denim aesthetic synth nesciunt you probably
\t\t\t\t\t\thaven't heard of them accusamus labore sustainable VHS.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\"
\t\t\t\t\t\t\thref=\"#collapseThree\"> NUMBER 3 </a>
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div id=\"collapseThree\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"panel-body\">Anim pariatur cliche reprehenderit, enim
\t\t\t\t\t\teiusmod high life accusamus terry richardson ad squid. 3 wolf moon
\t\t\t\t\t\tofficia aute, non cupidatat skateboard dolor brunch. Food truck
\t\t\t\t\t\tquinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
\t\t\t\t\t\taliqua put a bird on it squid single-origin coffee nulla assumenda
\t\t\t\t\t\tshoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
\t\t\t\t\t\twes anderson cred nesciunt sapiente ea proident. Ad vegan
\t\t\t\t\t\texcepteur butcher vice lomo. Leggings occaecat craft beer
\t\t\t\t\t\tfarm-to-table, raw denim aesthetic synth nesciunt you probably
\t\t\t\t\t\thaven't heard of them accusamus labore sustainable VHS.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t<a data-toggle=\"collapse\" data-parent=\"#accordion\"
\t\t\t\t\t\t\thref=\"#collapseFour\"> Collapsible Group Item #4 </a>
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div id=\"collapseFour\" class=\"panel-collapse collapse\">
\t\t\t\t\t<div class=\"panel-body\">dfsdjfsjfjslfskfsfsm;,dsfm,smfsm
\t\t\t\t\t\tnbfdfkjsbfsnfsf;:vn:c,;:vxvnfdgjl:dgjnkdjk
\t\t\t\t\t\tngdlfgjndl:v,v;nxckjlwsf xbgkh:lvkd!dffcjml,xd
\t\t\t\t\t\tnffdsljfsf,lnvvc,!x,kdlvfkc!f,v fdn:c</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<div class=\"container\">
<div data-ride=\"carousel\" class=\"carousel slide\" id=\"carousel-example-generic\">
      <ol class=\"carousel-indicators\">
        <li class=\"active\" data-slide-to=\"0\" data-target=\"#carousel-example-generic\"></li>
        <li data-slide-to=\"1\" data-target=\"#carousel-example-generic\" class=\"\"></li>
        <li data-slide-to=\"2\" data-target=\"#carousel-example-generic\" class=\"\"></li>
      </ol>
      <div class=\"carousel-inner\">
        <div class=\"item active\">
          <img alt=\"First slide\" data-src=\"holder.js/900x500/auto/#777:#555/text:First slide\" src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNTU1O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+\">
        </div>
        <div class=\"item\">
          <img alt=\"Second slide\" data-src=\"holder.js/900x500/auto/#666:#444/text:Second slide\" src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNDQ0O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==\">
        </div>
        <div class=\"item\">
          <img alt=\"Third slide\" data-src=\"holder.js/900x500/auto/#555:#333/text:Third slide\" src=\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojMzMzO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+\">
        </div>
      </div>
      <a data-slide=\"prev\" href=\"#carousel-example-generic\" class=\"left carousel-control\">
        <span class=\"glyphicon glyphicon-chevron-left\"></span>
      </a>
      <a data-slide=\"next\" href=\"#carousel-example-generic\" class=\"right carousel-control\">
        <span class=\"glyphicon glyphicon-chevron-right\"></span>
      </a>
    </div>
</div>





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
        return array (  61 => 23,  39 => 3,  32 => 2,  29 => 1,);
    }
}
