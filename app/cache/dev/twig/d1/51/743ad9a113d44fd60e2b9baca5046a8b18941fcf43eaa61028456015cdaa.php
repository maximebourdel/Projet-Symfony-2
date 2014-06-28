<?php

/* WebProfilerBundle:Collector:request.html.twig */
class __TwigTemplate_d151743ad9a113d44fd60e2b9baca5046a8b18941fcf43eaa61028456015cdaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "file"), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "line"));
            // line 7
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "class"));
            echo "</span>
            <span class=\"sf-toolbar-info-method\" onclick=\"";
            // line 8
            if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                echo "window.location='";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "js"), "html", null, true);
                echo "';window.event.stopPropagation();return false;";
            }
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "method"), "html", null, true);
            echo "
            </span>
        ";
        } else {
            // line 12
            echo "            <span class=\"sf-toolbar-info-class\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "controller"), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        $context["request_status_code_color"] = (((400 > $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"))) ? ((((200 == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"))) ? ("green") : ("yellow"))) : ("red"));
        // line 16
        echo "    ";
        $context["request_route"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route")) ? ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "route")) : ("NONE"));
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statustext"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : $this->getContext($context, "request_route")), "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        ob_start();
        // line 25
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : $this->getContext($context, "request_status_code_color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statuscode"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "statustext"), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : $this->getContext($context, "request_handler")), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["request_route"]) ? $context["request_route"] : $this->getContext($context, "request_route")), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 39
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata"))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        // line 47
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAcCAQAAACn1QXuAAAD2UlEQVR42p2Ve0zTVxTHKS4+KCBqNomCClgEJJAYkznQQIFaWltAiigsxGUgMy6b45HWV4UKUoP1yaMS0DqniVpngKlEMoMzW2Z0QTf4Ax/bdCzFCpQWq60U+Xp/baG/EoGf3vPH7/b3PffTc++55/w8xg+wji4W3ImDw4S3DgSD5fGhA+wcbRxclqsB+30RnmWcda1JPWn1poj8e3TYlvb/l6edTdSLWvYHgcUIdSwiuduxOOdu/n90WF7350648J+a0ClxYNWECglgahP+OyUOPpm34sDMNt6Ez+QwjniAKSzFgKWTw6L33x/3/yMHzU09l/XKlykj7krlXURNDlsEaVm/a8Fh48trUEEKGY4Zb5SaXUpZH4oROAlKvjijPu9GQfcY6jkOQoBlWIgARCAVVbtNo1rxky9/lqiV/hMmQfwXfRtZQxYVVoItC5aUpO8rDIcvYvUNqcN0n7TfJkyC+5lUdYIH9hlOkn3bCWbVCoJLLX9C9+FZEcoIpj2HYHh9XT92ZbUEFl7XSvfhD2EVI5imFh/DX948+lvWhgAEHL3kBrNhNSOYvImCdSgEb+wbGrmjomCFv46DrWn6hN+2QY6ZDYH8Tt6Dv+c4Yfn9bofbN8ABG/xHjYcMKmNHC0Tw/XOF0Ez3+VaH2BMZ1Ezclaynnm1x8LTDBo7U65Tm0tejrltPwwvzIcQO7EIKFsB3c8uoprAqzZruwQpE1cnpeMVxxZLNc8mFQQy2W9Tb+1xSplbjD18EEvM7sjTjuksp6rXVDBeVN29s5ztjFY1VSILpfJAHZiFkG1lAtyTD+gvZsix5emPSC3flm6v3JGvfxNvn+8zDt/HLFR3XUYI6RFPltERkYFro4j6Itdd5JB6JzaaGBAKUFtorpOsHRNoLveAxU1jRQ6xFQbaVNNFBpICN6YjZ00UpN0swj4KFPK/MtTJBffXKoETk3mouiYw7cmoLpsGzNVFkth+NpTKWgnkjof9MnjOflRYqsy4rfV1udebZatIgHhyB0XmylsyL2VXJjtQReMNWe9uGH5JN3ytMubY6HS7J9HSYTI/L1c9ybQoTQfEwG2HN52p7KixuEQ91PH5wEYkE5sRxUYJaFCCr4g+6o+o2slEMNVHjCYqF+RBjJ87m0OI/2YnvwMVCgnLi2AjCcgQgpGen1Mh1bATSgV4pghGISKKyqT6Gj+CHRUj/grT66sGOp7tIjOpmhGEGqYLxA174DOW4gjZiP6EMn2LWO7pz+O8N2nYcQhGq7v+ITZg3wYcPPghFDKibGUNm3u/qq5hL1PWIxgJEIRZBmE69fQsyes/JMSWb+gAAAABJRU5ErkJggg==\" alt=\"Request\"></span>
    <strong>Request</strong>
</span>
";
    }

    // line 53
    public function block_panel($context, array $blocks = array())
    {
        // line 54
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery"), "all"))) {
            // line 57
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestquery")));
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 63
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest"), "all"))) {
            // line 67
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestrequest")));
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 73
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 76
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes"), "all"))) {
            // line 77
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestattributes")));
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 86
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies"), "all"))) {
            // line 87
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestcookies")));
            // line 88
            echo "    ";
        } else {
            // line 89
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 93
        echo "
    <h2>Request Headers</h2>

    ";
        // line 96
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestheaders")));
        // line 97
        echo "
    <h2>Request Content</h2>

    ";
        // line 100
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content") == false)) {
            // line 101
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content")) {
            // line 103
            echo "        <pre>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "content"), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 105
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 107
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 110
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "requestserver")));
        // line 111
        echo "
    <h2>Response Headers</h2>

    ";
        // line 114
        $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "responseheaders")));
        // line 115
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 118
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata"))) {
            // line 119
            echo "    ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionmetadata")));
            // line 120
            echo "    ";
        } else {
            // line 121
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 125
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 128
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes"))) {
            // line 129
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sessionattributes")));
            // line 130
            echo "    ";
        } else {
            // line 131
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 135
        echo "
    <h2>Flashes</h2>

    ";
        // line 138
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes"))) {
            // line 139
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/table.html.twig")->display(array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "flashes")));
            // line 140
            echo "    ";
        } else {
            // line 141
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent")) {
            // line 147
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"))), "html", null, true);
            echo "\">Parent request: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"), "html", null, true);
            echo "</a></h2>

        ";
            // line 149
            $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "getcollector", array(0 => "request"), "method"), "requestattributes")));
            // line 150
            echo "    ";
        }
        // line 151
        echo "
    ";
        // line 152
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"))) {
            // line 153
            echo "        <h2>Sub requests</h2>

        ";
            // line 155
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo "            <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"), "html", null, true);
                echo "</a></h3>
            ";
                // line 157
                $this->env->loadTemplate("@WebProfiler/Profiler/bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "request"), "method"), "requestattributes")));
                // line 158
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "    ";
        }
        // line 160
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 160,  386 => 159,  378 => 157,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  326 => 138,  321 => 135,  307 => 128,  259 => 103,  127 => 35,  462 => 202,  449 => 198,  441 => 196,  439 => 195,  431 => 189,  422 => 184,  415 => 180,  380 => 158,  373 => 156,  351 => 141,  348 => 140,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  303 => 122,  300 => 121,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  226 => 84,  178 => 59,  165 => 60,  150 => 55,  401 => 172,  394 => 168,  391 => 133,  382 => 131,  356 => 122,  338 => 135,  333 => 115,  324 => 112,  315 => 131,  237 => 91,  234 => 90,  232 => 88,  213 => 78,  155 => 47,  1073 => 656,  1069 => 654,  1055 => 648,  1035 => 639,  1026 => 633,  1023 => 632,  1018 => 630,  1013 => 627,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  972 => 608,  963 => 604,  959 => 602,  941 => 595,  935 => 592,  930 => 590,  926 => 589,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  854 => 552,  848 => 548,  838 => 544,  836 => 543,  824 => 537,  815 => 531,  790 => 519,  788 => 518,  770 => 507,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  705 => 480,  698 => 477,  692 => 474,  686 => 472,  682 => 470,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  636 => 446,  626 => 443,  622 => 442,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  563 => 429,  553 => 425,  546 => 423,  542 => 421,  534 => 418,  530 => 417,  514 => 415,  297 => 200,  289 => 113,  280 => 194,  251 => 182,  185 => 66,  167 => 71,  153 => 56,  113 => 38,  20 => 1,  90 => 20,  306 => 286,  110 => 13,  198 => 39,  188 => 76,  180 => 70,  118 => 49,  65 => 22,  1402 => 419,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1349 => 401,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1295 => 381,  1287 => 379,  1283 => 378,  1271 => 375,  1251 => 368,  1249 => 367,  1246 => 366,  1231 => 358,  1223 => 356,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1159 => 329,  1157 => 328,  1145 => 322,  1115 => 319,  1112 => 318,  1109 => 317,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 657,  1074 => 304,  1067 => 299,  1064 => 651,  1056 => 293,  1053 => 292,  1051 => 647,  1048 => 646,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1016 => 276,  1014 => 272,  1004 => 624,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 607,  967 => 606,  964 => 255,  961 => 254,  955 => 600,  952 => 251,  950 => 250,  947 => 597,  936 => 242,  931 => 240,  920 => 235,  918 => 234,  903 => 229,  900 => 228,  892 => 225,  889 => 224,  881 => 220,  873 => 217,  865 => 213,  862 => 557,  849 => 206,  846 => 205,  844 => 546,  841 => 203,  833 => 199,  830 => 539,  828 => 538,  825 => 196,  817 => 192,  814 => 191,  812 => 530,  809 => 189,  801 => 185,  798 => 184,  796 => 521,  793 => 182,  785 => 178,  772 => 172,  769 => 171,  767 => 170,  764 => 505,  753 => 164,  751 => 163,  749 => 162,  739 => 156,  729 => 155,  710 => 149,  707 => 148,  697 => 141,  696 => 476,  695 => 139,  694 => 138,  689 => 137,  678 => 468,  675 => 132,  666 => 126,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  527 => 416,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  459 => 69,  456 => 68,  442 => 62,  433 => 60,  428 => 59,  414 => 52,  405 => 49,  403 => 136,  400 => 47,  390 => 43,  388 => 42,  371 => 156,  366 => 33,  363 => 153,  344 => 24,  342 => 137,  335 => 134,  332 => 20,  313 => 110,  311 => 14,  290 => 119,  288 => 118,  281 => 114,  276 => 111,  271 => 190,  266 => 366,  263 => 365,  260 => 363,  255 => 101,  253 => 100,  250 => 341,  248 => 97,  245 => 335,  233 => 87,  215 => 280,  212 => 279,  210 => 77,  207 => 75,  202 => 266,  194 => 68,  191 => 67,  186 => 72,  181 => 65,  174 => 74,  146 => 181,  134 => 39,  129 => 148,  126 => 147,  124 => 132,  104 => 31,  81 => 23,  76 => 17,  1405 => 493,  1401 => 491,  1398 => 490,  1396 => 417,  1394 => 488,  1391 => 487,  1381 => 481,  1378 => 480,  1361 => 477,  1358 => 476,  1355 => 403,  1352 => 474,  1346 => 472,  1343 => 399,  1340 => 470,  1334 => 468,  1328 => 466,  1325 => 465,  1322 => 463,  1306 => 461,  1303 => 460,  1300 => 459,  1297 => 382,  1294 => 457,  1291 => 380,  1288 => 455,  1285 => 454,  1282 => 453,  1279 => 377,  1276 => 451,  1273 => 376,  1270 => 449,  1268 => 374,  1266 => 447,  1263 => 446,  1256 => 369,  1250 => 437,  1244 => 435,  1242 => 434,  1240 => 433,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1214 => 415,  1208 => 413,  1205 => 412,  1190 => 343,  1187 => 342,  1183 => 408,  1180 => 407,  1162 => 330,  1154 => 327,  1151 => 396,  1146 => 395,  1143 => 321,  1141 => 393,  1139 => 392,  1137 => 391,  1134 => 390,  1127 => 385,  1118 => 320,  1114 => 382,  1111 => 381,  1108 => 380,  1106 => 316,  1103 => 315,  1093 => 372,  1091 => 371,  1089 => 369,  1086 => 368,  1076 => 364,  1070 => 362,  1068 => 361,  1065 => 360,  1057 => 355,  1046 => 353,  1044 => 645,  1024 => 280,  1021 => 631,  1012 => 271,  1009 => 270,  1006 => 343,  1003 => 342,  1001 => 341,  998 => 340,  989 => 335,  986 => 334,  983 => 333,  980 => 332,  978 => 331,  975 => 609,  966 => 326,  958 => 253,  956 => 323,  954 => 322,  951 => 321,  944 => 315,  939 => 243,  937 => 593,  934 => 241,  927 => 306,  923 => 588,  917 => 303,  915 => 233,  907 => 301,  902 => 300,  899 => 299,  897 => 227,  894 => 226,  885 => 293,  882 => 292,  878 => 219,  876 => 218,  871 => 288,  863 => 286,  860 => 211,  857 => 210,  852 => 283,  850 => 282,  847 => 281,  832 => 274,  829 => 273,  826 => 272,  813 => 268,  810 => 529,  807 => 528,  800 => 523,  797 => 262,  789 => 256,  783 => 177,  780 => 513,  774 => 509,  771 => 250,  765 => 248,  762 => 504,  756 => 165,  754 => 499,  750 => 243,  746 => 161,  730 => 241,  727 => 240,  724 => 484,  721 => 153,  718 => 482,  715 => 151,  712 => 150,  709 => 234,  706 => 233,  704 => 232,  702 => 479,  699 => 142,  690 => 225,  688 => 224,  683 => 135,  680 => 134,  677 => 221,  674 => 220,  672 => 219,  669 => 218,  661 => 212,  658 => 124,  656 => 210,  653 => 209,  645 => 205,  642 => 449,  640 => 448,  637 => 202,  628 => 444,  624 => 195,  620 => 194,  616 => 440,  611 => 192,  608 => 191,  602 => 189,  599 => 188,  597 => 187,  594 => 186,  586 => 181,  583 => 180,  573 => 179,  568 => 178,  565 => 430,  559 => 427,  556 => 174,  554 => 173,  551 => 424,  543 => 167,  540 => 166,  538 => 165,  537 => 164,  536 => 419,  535 => 162,  532 => 161,  529 => 92,  526 => 159,  523 => 158,  516 => 155,  506 => 148,  500 => 145,  496 => 79,  492 => 142,  486 => 140,  484 => 139,  475 => 138,  472 => 137,  466 => 135,  464 => 71,  450 => 64,  448 => 131,  446 => 197,  443 => 129,  432 => 122,  429 => 188,  426 => 58,  420 => 118,  418 => 117,  410 => 115,  408 => 176,  385 => 41,  383 => 110,  377 => 129,  375 => 106,  372 => 105,  367 => 155,  361 => 152,  359 => 123,  353 => 149,  350 => 120,  347 => 119,  339 => 92,  334 => 141,  331 => 140,  328 => 139,  318 => 87,  316 => 16,  308 => 109,  302 => 125,  299 => 8,  296 => 121,  293 => 120,  287 => 76,  274 => 110,  249 => 92,  225 => 46,  222 => 83,  216 => 79,  211 => 53,  205 => 51,  200 => 72,  192 => 48,  184 => 63,  172 => 57,  148 => 28,  34 => 5,  84 => 24,  53 => 12,  197 => 69,  195 => 93,  175 => 58,  170 => 56,  161 => 58,  152 => 46,  77 => 20,  70 => 15,  58 => 14,  265 => 105,  262 => 98,  256 => 96,  223 => 35,  206 => 24,  114 => 36,  100 => 36,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 123,  430 => 144,  427 => 143,  423 => 57,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 113,  387 => 164,  384 => 121,  381 => 120,  379 => 108,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 150,  341 => 117,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 90,  285 => 100,  283 => 115,  278 => 106,  268 => 373,  264 => 84,  258 => 187,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 69,  169 => 210,  140 => 55,  132 => 51,  128 => 42,  107 => 16,  61 => 12,  273 => 392,  269 => 107,  254 => 70,  243 => 327,  240 => 326,  238 => 312,  235 => 89,  230 => 303,  227 => 86,  224 => 71,  221 => 80,  219 => 45,  217 => 289,  208 => 76,  204 => 75,  179 => 224,  159 => 57,  143 => 56,  135 => 46,  119 => 40,  102 => 24,  71 => 13,  67 => 14,  63 => 18,  59 => 14,  28 => 3,  93 => 27,  88 => 24,  78 => 19,  87 => 34,  46 => 10,  44 => 9,  31 => 4,  38 => 6,  26 => 6,  201 => 74,  196 => 90,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 67,  156 => 58,  151 => 188,  142 => 26,  138 => 47,  136 => 168,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 12,  49 => 11,  21 => 2,  25 => 3,  94 => 21,  89 => 30,  85 => 23,  75 => 18,  68 => 12,  56 => 6,  27 => 3,  24 => 3,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 8,  40 => 11,  37 => 6,  22 => 2,  246 => 96,  157 => 56,  145 => 33,  139 => 25,  131 => 160,  123 => 42,  120 => 31,  115 => 19,  111 => 47,  108 => 33,  101 => 30,  98 => 34,  96 => 30,  83 => 33,  74 => 20,  66 => 25,  55 => 9,  52 => 12,  50 => 16,  43 => 9,  41 => 8,  35 => 5,  32 => 5,  29 => 3,  209 => 52,  203 => 73,  199 => 265,  193 => 38,  189 => 66,  187 => 47,  182 => 45,  176 => 63,  173 => 65,  168 => 61,  164 => 70,  162 => 59,  154 => 30,  149 => 182,  147 => 43,  144 => 42,  141 => 51,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 39,  112 => 18,  109 => 27,  106 => 104,  103 => 32,  99 => 23,  95 => 27,  92 => 28,  86 => 34,  82 => 19,  80 => 27,  73 => 16,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 16,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
