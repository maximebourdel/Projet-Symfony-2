<?php

/* MopaBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_9c164b262760a2f6519af9cd8c069e09fcaf00397da80897fe3bd458f5f0a15f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'button_attributes' => array($this, 'block_button_attributes'),
            'button_widget' => array($this, 'block_button_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'form_legend' => array($this, 'block_form_legend'),
            'form_label' => array($this, 'block_form_label'),
            'help_label' => array($this, 'block_help_label'),
            'help_label_tooltip' => array($this, 'block_help_label_tooltip'),
            'help_label_popover' => array($this, 'block_help_label_popover'),
            'form_rows_visible' => array($this, 'block_form_rows_visible'),
            'form_row' => array($this, 'block_form_row'),
            'form_message' => array($this, 'block_form_message'),
            'form_help' => array($this, 'block_form_help'),
            'form_widget_add_btn' => array($this, 'block_form_widget_add_btn'),
            'form_widget_remove_btn' => array($this, 'block_form_widget_remove_btn'),
            'collection_button' => array($this, 'block_collection_button'),
            'label_asterisk' => array($this, 'block_label_asterisk'),
            'widget_addon' => array($this, 'block_widget_addon'),
            '_form_errors' => array($this, 'block__form_errors'),
            'form_errors' => array($this, 'block_form_errors'),
            'error_type' => array($this, 'block_error_type'),
            'widget_control_group_start' => array($this, 'block_widget_control_group_start'),
            'widget_control_group_end' => array($this, 'block_widget_control_group_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_491ec9cde47274e06dad5463c151e6992c321c0cc6247b99f6db68b586ca481d"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ("btn " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")))));
        // line 7
        echo "    ";
        $this->displayParentBlock("button_attributes", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_button_widget($context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 13
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 14
            echo "    ";
        }
        // line 15
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 16
        if ((!twig_test_empty((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"))))) {
            echo " <i class=\"icon-";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            if ((!twig_test_empty((isset($context["icon_color"]) ? $context["icon_color"] : $this->getContext($context, "icon_color"))))) {
                echo " icon-";
                echo twig_escape_filter($this->env, (isset($context["icon_color"]) ? $context["icon_color"] : $this->getContext($context, "icon_color")), "html", null, true);
            }
            echo "\"></i> ";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 23
        ob_start();
        // line 24
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 25
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && (!(null === (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type"), null)) : (null)))))) {
            // line 26
            echo "    <div class=\"input-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "type"), "html", null, true);
            echo "\">
        ";
            // line 27
            if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "type") == "prepend")) {
                // line 28
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 30
            echo "    ";
        }
        // line 31
        echo "    ";
        if ((!((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn")), null)) : (null)))) {
            // line 32
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " not-removable")));
            // line 33
            echo "    ";
        }
        // line 34
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        // line 35
        if ((((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden") && (!(null === (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type"), null)) : (null)))))) {
            // line 36
            echo "        ";
            if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "type") == "append")) {
                // line 37
                echo "        ";
                $this->displayBlock("widget_addon", $context, $blocks);
                echo "
        ";
            }
            // line 39
            echo "    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 45
        ob_start();
        // line 46
        echo "    ";
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
            // line 47
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : $this->getContext($context, "render_fieldset"))) {
                echo "<fieldset>";
            }
            // line 48
            echo "        ";
            if ((isset($context["show_legend"]) ? $context["show_legend"] : $this->getContext($context, "show_legend"))) {
                $this->displayBlock("form_legend", $context, $blocks);
            }
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        $this->displayBlock("form_rows_visible", $context, $blocks);
        echo "
    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 52
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
            // line 53
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : $this->getContext($context, "render_fieldset"))) {
                echo "</fieldset>";
            }
            // line 54
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 58
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 59
        ob_start();
        // line 60
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 64
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 65
        ob_start();
        // line 66
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " ") . (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")))));
        // line 67
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class") . " ") . (((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type"))) ? ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type"))) : ("")))));
        // line 68
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class") . " ") . (((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) ? ("inline") : (""))))));
        // line 69
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 71
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
            ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
        </label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 80
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        ob_start();
        // line 82
        echo "        ";
        if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "type") == "prepend")) {
            // line 83
            echo "            ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
        ";
        }
        // line 85
        echo "        <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 86
        if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
            // line 87
            echo "                <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
            ";
        }
        // line 89
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 90
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 91
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 92
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")))))) {
                // line 93
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
                ";
            }
            // line 95
            echo "            ";
        }
        // line 96
        echo "            ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 97
        echo "            ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
        </select>
        ";
        // line 99
        if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "type") == "append")) {
            // line 100
            echo "            ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
        ";
        }
        // line 102
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 105
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 106
        ob_start();
        // line 107
        if (((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 108
            echo "    ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
        }
        // line 110
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes"))) && (isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")))) {
            // line 111
            echo "    <label class=\"checkbox";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                echo " inline";
            }
            echo "\">
";
        }
        // line 113
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('translator')->trans((isset($context["help_inline"]) ? $context["help_inline"] : $this->getContext($context, "help_inline")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "
";
        // line 114
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"), "vars"), "block_prefixes")))) {
            // line 115
            echo "    ";
            if (((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render")) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 116
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
        ";
                // line 117
                if (((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")) == "widget")) {
                    // line 118
                    echo "            ";
                    $this->displayBlock("label_asterisk", $context, $blocks);
                    echo "
        ";
                }
                // line 120
                echo "    ";
            }
            // line 121
            echo "    ";
            $context["help_inline"] = false;
            // line 122
            echo "    ";
            if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                // line 123
                echo "    </label>
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 129
    public function block_date_widget($context, array $blocks = array())
    {
        // line 130
        ob_start();
        // line 131
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 132
            echo "    ";
            if (array_key_exists("datepicker", $context)) {
                // line 133
                echo "        <div class=\"input-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "type"), "html", null, true);
                echo " date\" ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo " data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" data-date-format=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format"))), "html", null, true);
                echo "\" data-form=\"datepicker\">
            ";
                // line 134
                if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "type") == "prepend")) {
                    // line 135
                    echo "                ";
                    $this->displayBlock("widget_addon", $context, $blocks);
                    echo "
            ";
                }
                // line 137
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " not-removable grd-white")));
                // line 138
                echo "            <input type=\"text\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\"  data-form=\"datepicker\" data-date-format=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format"))), "html", null, true);
                echo "\"/>
            ";
                // line 139
                if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "type") == "append")) {
                    // line 140
                    echo "                ";
                    $this->displayBlock("widget_addon", $context, $blocks);
                    echo "
            ";
                }
                // line 142
                echo "            <script type=\"text/javascript\">
                \$(document).ready(function () {
                    \$(";
                // line 144
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo ").datepicker();
                    \$(";
                // line 145
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo ").datepicker().on(
                            \"changeDate\",
                            function(event){
                                \$(";
                // line 148
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo ").datepicker('hide');
                            }
                    )
                });
            </script>
        </div>
    ";
            } else {
                // line 155
                echo "        ";
                $this->displayBlock("form_widget_simple", $context, $blocks);
                echo "
    ";
            }
        } else {
            // line 158
            echo "        ";
            $context["attrYear"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline")) . " input-small")));
            // line 159
            echo "        ";
            $context["attrMonth"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline")) . " input-mini")));
            // line 160
            echo "        ";
            $context["attrDay"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline")) . " input-mini")));
            // line 161
            echo "
            ";
            // line 162
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 163
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget', array("attr" => (isset($context["attrYear"]) ? $context["attrYear"] : $this->getContext($context, "attrYear")))), "{{ month }}" =>             // line 164
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget', array("attr" => (isset($context["attrMonth"]) ? $context["attrMonth"] : $this->getContext($context, "attrMonth")))), "{{ day }}" =>             // line 165
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), 'widget', array("attr" => (isset($context["attrDay"]) ? $context["attrDay"] : $this->getContext($context, "attrDay"))))));
            // line 166
            echo "
        ";
            // line 167
            $this->displayBlock("help", $context, $blocks);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 172
    public function block_time_widget($context, array $blocks = array())
    {
        // line 173
        ob_start();
        // line 174
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 175
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 177
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline"))));
            // line 178
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 179
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            }
            // line 180
            echo "        </div>
        ";
            // line 181
            $this->displayBlock("help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 186
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 187
        ob_start();
        // line 188
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 189
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 191
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 192
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 193
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
            echo "
                ";
            // line 194
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'errors');
            echo "
                ";
            // line 195
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
                ";
            // line 196
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 202
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 203
        ob_start();
        // line 204
        echo "    ";
        $context["widget_addon"] = twig_array_merge((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), array("text" => (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text"), "%")) : ("%"))));
        // line 205
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 209
    public function block_money_widget($context, array $blocks = array())
    {
        // line 210
        ob_start();
        // line 211
        echo "    ";
        $context["widget_addon"] = twig_array_merge((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), array("text" => strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => ""))));
        // line 212
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 218
    public function block_form_legend($context, array $blocks = array())
    {
        // line 219
        ob_start();
        // line 220
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 221
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 222
            echo "    ";
        }
        // line 223
        echo "    <legend>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</legend>
    ";
        // line 224
        if ((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn"))) {
            // line 225
            echo "        ";
            $this->displayBlock("form_widget_add_btn", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 230
    public function block_form_label($context, array $blocks = array())
    {
        // line 231
        if ((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes"))) || twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "label", 1 => "both")))) {
            // line 232
            ob_start();
            // line 233
            echo "    ";
            if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
                // line 234
                echo "        ";
                if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                    // line 235
                    echo "            ";
                    $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
                    // line 236
                    echo "        ";
                }
                // line 237
                echo "        ";
                if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                    // line 238
                    echo "            ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                    // line 239
                    echo "        ";
                }
                // line 240
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label") . (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? (" required") : (" optional")))));
                // line 241
                echo "        <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
        ";
                // line 242
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
        ";
                // line 243
                $this->displayBlock("label_asterisk", $context, $blocks);
                echo "
        ";
                // line 244
                if ((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn"))) {
                    // line 245
                    echo "            ";
                    $this->displayBlock("form_widget_add_btn", $context, $blocks);
                    echo "
        ";
                }
                // line 247
                echo "        ";
                if ((isset($context["help_label_tooltip_title"]) ? $context["help_label_tooltip_title"] : $this->getContext($context, "help_label_tooltip_title"))) {
                    // line 248
                    echo "            ";
                    $this->displayBlock("help_label_tooltip", $context, $blocks);
                    echo "
        ";
                }
                // line 250
                echo "        ";
                if ((isset($context["help_label_popover_title"]) ? $context["help_label_popover_title"] : $this->getContext($context, "help_label_popover_title"))) {
                    // line 251
                    echo "            ";
                    $this->displayBlock("help_label_popover", $context, $blocks);
                    echo "
        ";
                }
                // line 253
                echo "        ";
                if ((isset($context["help_label"]) ? $context["help_label"] : $this->getContext($context, "help_label"))) {
                    // line 254
                    echo "            ";
                    $this->displayBlock("help_label", $context, $blocks);
                    echo "
        ";
                }
                // line 256
                echo "        </label>
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    // line 262
    public function block_help_label($context, array $blocks = array())
    {
        // line 263
        echo "    <p class=\"help-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label"]) ? $context["help_label"] : $this->getContext($context, "help_label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</p>
";
    }

    // line 266
    public function block_help_label_tooltip($context, array $blocks = array())
    {
        // line 267
        echo "    <p class=\"help-inline\">
        <a href=\"#\" id=\"";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label_tooltip_title"]) ? $context["help_label_tooltip_title"] : $this->getContext($context, "help_label_tooltip_title")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" tabindex=\"-1\" data-toggle=\"tooltip\" data-placement=\"";
        echo twig_escape_filter($this->env, (isset($context["help_label_tooltip_placement"]) ? $context["help_label_tooltip_placement"] : $this->getContext($context, "help_label_tooltip_placement")), "html", null, true);
        echo "\"><i class=\"";
        echo twig_escape_filter($this->env, (isset($context["help_label_tooltip_icon"]) ? $context["help_label_tooltip_icon"] : $this->getContext($context, "help_label_tooltip_icon")), "html", null, true);
        echo "\"></i></a>
    </p>
";
    }

    // line 272
    public function block_help_label_popover($context, array $blocks = array())
    {
        // line 273
        echo "    <p class=\"help-inline\">
        <a href=\"#\" id=\"";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_popover\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label_popover_title"]) ? $context["help_label_popover_title"] : $this->getContext($context, "help_label_popover_title")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" tabindex=\"-1\" data-toggle=\"popover\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label_popover_content"]) ? $context["help_label_popover_content"] : $this->getContext($context, "help_label_popover_content")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\" data-placement=\"";
        echo twig_escape_filter($this->env, (isset($context["help_label_popover_placement"]) ? $context["help_label_popover_placement"] : $this->getContext($context, "help_label_popover_placement")), "html", null, true);
        echo "\" data-trigger=\"hover\" data-html=\"true\"><i class=\"";
        echo twig_escape_filter($this->env, (isset($context["help_label_popover_icon"]) ? $context["help_label_popover_icon"] : $this->getContext($context, "help_label_popover_icon")), "html", null, true);
        echo "\"></i></a>
    </p>
";
    }

    // line 281
    public function block_form_rows_visible($context, array $blocks = array())
    {
        // line 282
        ob_start();
        // line 283
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 284
            echo "        ";
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "block_prefixes"))) {
                // line 285
                echo "            ";
                if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")) && (!(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : $this->getContext($context, "omit_collection_item"))))) {
                    // line 286
                    echo "            <div class=\"collection-item ";
                    echo twig_escape_filter($this->env, twig_join_filter((($this->getAttribute((isset($context["widget_items_attr"]) ? $context["widget_items_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_items_attr"]) ? $context["widget_items_attr"] : null), "class"))) : ("")), " "), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars"), "id"), "html", null, true);
                    echo "_control_group\">
            ";
                }
                // line 288
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
                echo "
            ";
                // line 289
                if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")) && (!(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : $this->getContext($context, "omit_collection_item"))))) {
                    // line 290
                    echo "            </div>
            ";
                }
                // line 292
                echo "        ";
            }
            // line 293
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 297
    public function block_form_row($context, array $blocks = array())
    {
        // line 298
        ob_start();
        // line 299
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) ? (" error") : ("")))));
        // line 300
        echo "    ";
        $this->displayBlock("widget_control_group_start", $context, $blocks);
        echo "
    ";
        // line 301
        echo $this->env->getExtension('translator')->trans((isset($context["widget_prefix"]) ? $context["widget_prefix"] : $this->getContext($context, "widget_prefix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', $context);
        echo " ";
        echo $this->env->getExtension('translator')->trans((isset($context["widget_suffix"]) ? $context["widget_suffix"] : $this->getContext($context, "widget_suffix")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        echo "
    ";
        // line 302
        if (array_key_exists("widget_remove_btn", $context)) {
            // line 303
            echo "        ";
            $this->displayBlock("form_widget_remove_btn", $context, $blocks);
            echo "
    ";
        }
        // line 305
        $this->displayBlock("form_message", $context, $blocks);
        echo "
    ";
        // line 306
        $this->displayBlock("widget_control_group_end", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 312
    public function block_form_message($context, array $blocks = array())
    {
        // line 313
        ob_start();
        // line 314
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 315
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 321
    public function block_form_help($context, array $blocks = array())
    {
        // line 322
        ob_start();
        // line 323
        if (!twig_in_filter("checkbox", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes"))) {
            // line 324
            echo "    ";
            if ((isset($context["help_inline"]) ? $context["help_inline"] : $this->getContext($context, "help_inline"))) {
                echo "<p class=\"help-inline\">";
                echo $this->env->getExtension('translator')->trans((isset($context["help_inline"]) ? $context["help_inline"] : $this->getContext($context, "help_inline")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                echo "</p>";
            }
        }
        // line 326
        if ((isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block"))) {
            echo "<p class=\"help-block\">";
            echo $this->env->getExtension('translator')->trans((isset($context["help_block"]) ? $context["help_block"] : $this->getContext($context, "help_block")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "</p>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 330
    public function block_form_widget_add_btn($context, array $blocks = array())
    {
        // line 331
        ob_start();
        // line 332
        echo "    ";
        if ((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn"))) {
            // line 333
            echo "    ";
            $context["button_type"] = "add";
            // line 334
            echo "    ";
            $context["button_values"] = (isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : $this->getContext($context, "widget_add_btn"));
            // line 335
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 340
    public function block_form_widget_remove_btn($context, array $blocks = array())
    {
        // line 341
        ob_start();
        // line 342
        echo "    ";
        if ((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn"))) {
            // line 343
            echo "    ";
            $context["button_type"] = "remove";
            // line 344
            echo "    ";
            $context["button_values"] = (isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : $this->getContext($context, "widget_remove_btn"));
            // line 345
            echo "    ";
            $this->displayBlock("collection_button", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 350
    public function block_collection_button($context, array $blocks = array())
    {
        // line 351
        echo "<a ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " data-collection-";
        echo twig_escape_filter($this->env, (isset($context["button_type"]) ? $context["button_type"] : $this->getContext($context, "button_type")), "html", null, true);
        echo "-btn=\"#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "id", array(), "array"), "html", null, true);
        echo "_control_group\">
";
        // line 352
        if ($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon", array(), "any", true, true)) {
            // line 353
            echo "<i class=\"icon-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon"), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_color", array(), "any", true, true)) {
                echo "icon-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "icon_color"), "html", null, true);
            }
            echo "\"></i>
";
        }
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : $this->getContext($context, "button_values")), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "
</a>

";
    }

    // line 360
    public function block_label_asterisk($context, array $blocks = array())
    {
        // line 361
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 362
            echo "    ";
            if ((isset($context["render_required_asterisk"]) ? $context["render_required_asterisk"] : $this->getContext($context, "render_required_asterisk"))) {
                echo "<span>*</span>";
            }
        } else {
            // line 364
            echo "    ";
            if ((isset($context["render_optional_text"]) ? $context["render_optional_text"] : $this->getContext($context, "render_optional_text"))) {
                echo "<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(optional)", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>";
            }
        }
    }

    // line 368
    public function block_widget_addon($context, array $blocks = array())
    {
        // line 369
        ob_start();
        // line 371
        $context["__internal_9b20f59e7dcd174b2af2b6573a66da8ab353621403d950fc718649cfba2e26e5"] = $this->env->loadTemplate("MopaBootstrapBundle::icons.html.twig");
        // line 372
        echo "<span class=\"add-on\">";
        echo (((($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text"), false)) : (false))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "text"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ($context["__internal_9b20f59e7dcd174b2af2b6573a66da8ab353621403d950fc718649cfba2e26e5"]->geticon($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "icon"))));
        echo " ";
        echo (((($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "html", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "html"), false)) : (false))) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : $this->getContext($context, "widget_addon")), "html")) : (""));
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 378
    public function block__form_errors($context, array $blocks = array())
    {
        // line 379
        ob_start();
        // line 380
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 381
            echo "    <ul>
        ";
            // line 382
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 383
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 390
    public function block_form_errors($context, array $blocks = array())
    {
        // line 391
        ob_start();
        // line 392
        if (((isset($context["errors_on_forms"]) ? $context["errors_on_forms"] : $this->getContext($context, "errors_on_forms")) && ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null))) {
            // line 393
            echo "    ";
            // line 394
            echo "    ";
            $context["__internal_abc16626df3b14d464daab8ac91e49e90371115175ae3af6489830641e6e81fd"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
            // line 395
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 396
                echo "        ";
                echo $context["__internal_abc16626df3b14d464daab8ac91e49e90371115175ae3af6489830641e6e81fd"]->getflash("error", (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))));
                // line 403
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((isset($context["error_delay"]) ? $context["error_delay"] : $this->getContext($context, "error_delay"))) {
            // line 406
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 407
                echo "        ";
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") == 1)) {
                    // line 408
                    echo "            ";
                    if ($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "set", array(0 => "errors", 1 => (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "method")) {
                    }
                    // line 409
                    echo "        ";
                }
                // line 410
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 412
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 413
                echo "    <span class=\"help-";
                $this->displayBlock("error_type", $context, $blocks);
                echo "\">
        <span class=\"text-error\">
            ";
                // line 415
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 416
                    echo "                ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))), "html", null, true);
                    // line 420
                    echo " <br>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 422
                echo "        </span>
    </span>
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 432
    public function block_error_type($context, array $blocks = array())
    {
        // line 433
        ob_start();
        // line 434
        if ((isset($context["error_type"]) ? $context["error_type"] : $this->getContext($context, "error_type"))) {
            // line 435
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["error_type"]) ? $context["error_type"] : $this->getContext($context, "error_type")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null)) {
            // line 437
            echo "    ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "error_type"), "inline")) : ("inline")), "html", null, true);
            echo "
";
        } else {
            // line 439
            echo "inline
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 446
    public function block_widget_control_group_start($context, array $blocks = array())
    {
        // line 447
        ob_start();
        // line 448
        if ((((array_key_exists("widget_control_group", $context)) ? (_twig_default_filter((isset($context["widget_control_group"]) ? $context["widget_control_group"] : $this->getContext($context, "widget_control_group")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null))) {
            // line 449
            echo "    ";
            if (array_key_exists("prototype", $context)) {
                // line 450
                echo "        ";
                $context["data_prototype"] = (((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")) && (!(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : $this->getContext($context, "omit_collection_item"))))) ? ((((((("<div class=\"collection-item " . twig_join_filter((($this->getAttribute((isset($context["widget_items_attr"]) ? $context["widget_items_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_items_attr"]) ? $context["widget_items_attr"] : null), "class"))) : ("")), " ")) . "\" id=\"") . $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars"), "id")) . "_control_group\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')) . "</div>")) : ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
                // line 451
                echo "        ";
                $context["data_prototype_name"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name"), "__name__")) : ("__name__"));
                // line 452
                echo "        ";
                $context["widget_control_group_attr"] = twig_array_merge(twig_array_merge((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : $this->getContext($context, "widget_control_group_attr")), array("data-prototype" => (isset($context["data_prototype"]) ? $context["data_prototype"] : $this->getContext($context, "data_prototype")), "data-prototype-name" => (isset($context["data_prototype_name"]) ? $context["data_prototype_name"] : $this->getContext($context, "data_prototype_name")), "data-widget-controls" => ((((array_key_exists("widget_controls", $context)) ? (_twig_default_filter((isset($context["widget_controls"]) ? $context["widget_controls"] : $this->getContext($context, "widget_controls")), false)) : (false))) ? ("true") : ("false")))), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
                // line 453
                echo "    ";
            }
            // line 454
            echo "    ";
            $context["widget_control_group_attr"] = twig_array_merge((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : $this->getContext($context, "widget_control_group_attr")), array("id" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_control_group"), "class" => ((($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class"), "")) : ("")) . " control-group")));
            // line 455
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 456
                echo "        ";
                $context["widget_control_group_attr"] = twig_array_merge((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : $this->getContext($context, "widget_control_group_attr")), array("class" => ((($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class"), "")) : ("")) . " error")));
                // line 457
                echo "    ";
            }
            // line 458
            echo "\t";
            if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true))) {
                // line 459
                echo "\t\t";
                $context["widget_control_group_attr"] = twig_array_merge((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : $this->getContext($context, "widget_control_group_attr")), array("class" => (((($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class"), "")) : ("")) . " ") . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class"))));
                // line 460
                echo "\t";
            }
            // line 461
            echo "    <div ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : $this->getContext($context, "widget_control_group_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 463
            echo "    ";
            if ((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) > 0) && ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") != null)) && !twig_in_filter("field", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes")))) {
                // line 465
                echo "        ";
                if ((isset($context["show_child_legend"]) ? $context["show_child_legend"] : $this->getContext($context, "show_child_legend"))) {
                    // line 466
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                    // line 468
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 470
                echo "    ";
            } else {
                // line 471
                echo "        ";
                if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                    // line 472
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 474
                echo "    ";
            }
            // line 475
            echo "    ";
            if ((((array_key_exists("widget_controls", $context)) ? (_twig_default_filter((isset($context["widget_controls"]) ? $context["widget_controls"] : $this->getContext($context, "widget_controls")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null))) {
                // line 476
                echo "        ";
                $context["widget_controls_attr"] = twig_array_merge((isset($context["widget_controls_attr"]) ? $context["widget_controls_attr"] : $this->getContext($context, "widget_controls_attr")), array("class" => ((($this->getAttribute((isset($context["widget_controls_attr"]) ? $context["widget_controls_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_controls_attr"]) ? $context["widget_controls_attr"] : null), "class"), "")) : ("")) . " controls")));
                // line 477
                echo "        <div ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["widget_controls_attr"]) ? $context["widget_controls_attr"] : $this->getContext($context, "widget_controls_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
    ";
            }
        } else {
            // line 480
            echo "    ";
            if ((isset($context["label_render"]) ? $context["label_render"] : $this->getContext($context, "label_render"))) {
                // line 481
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
    ";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 487
    public function block_widget_control_group_end($context, array $blocks = array())
    {
        // line 488
        ob_start();
        // line 489
        if ((((array_key_exists("widget_control_group", $context)) ? (_twig_default_filter((isset($context["widget_control_group"]) ? $context["widget_control_group"] : $this->getContext($context, "widget_control_group")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null))) {
            // line 490
            echo "    ";
            if ((((array_key_exists("widget_controls", $context)) ? (_twig_default_filter((isset($context["widget_controls"]) ? $context["widget_controls"] : $this->getContext($context, "widget_controls")), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent") == null))) {
                // line 491
                echo "        </div>
    ";
            }
            // line 493
            echo "    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1405 => 493,  1401 => 491,  1398 => 490,  1396 => 489,  1394 => 488,  1391 => 487,  1381 => 481,  1378 => 480,  1361 => 477,  1358 => 476,  1355 => 475,  1352 => 474,  1346 => 472,  1343 => 471,  1340 => 470,  1334 => 468,  1328 => 466,  1325 => 465,  1322 => 463,  1306 => 461,  1303 => 460,  1300 => 459,  1297 => 458,  1294 => 457,  1291 => 456,  1288 => 455,  1285 => 454,  1282 => 453,  1279 => 452,  1276 => 451,  1273 => 450,  1270 => 449,  1268 => 448,  1266 => 447,  1263 => 446,  1256 => 439,  1250 => 437,  1244 => 435,  1242 => 434,  1240 => 433,  1237 => 432,  1228 => 422,  1221 => 420,  1218 => 416,  1214 => 415,  1208 => 413,  1205 => 412,  1190 => 410,  1187 => 409,  1183 => 408,  1180 => 407,  1162 => 406,  1154 => 403,  1151 => 396,  1146 => 395,  1143 => 394,  1141 => 393,  1139 => 392,  1137 => 391,  1134 => 390,  1127 => 385,  1118 => 383,  1114 => 382,  1111 => 381,  1108 => 380,  1106 => 379,  1103 => 378,  1093 => 372,  1091 => 371,  1089 => 369,  1086 => 368,  1076 => 364,  1070 => 362,  1068 => 361,  1065 => 360,  1057 => 355,  1046 => 353,  1044 => 352,  1024 => 351,  1021 => 350,  1012 => 345,  1009 => 344,  1006 => 343,  1003 => 342,  1001 => 341,  998 => 340,  989 => 335,  986 => 334,  983 => 333,  980 => 332,  978 => 331,  975 => 330,  966 => 326,  958 => 324,  956 => 323,  954 => 322,  951 => 321,  944 => 315,  939 => 314,  937 => 313,  934 => 312,  927 => 306,  923 => 305,  917 => 303,  915 => 302,  907 => 301,  902 => 300,  899 => 299,  897 => 298,  894 => 297,  885 => 293,  882 => 292,  878 => 290,  876 => 289,  871 => 288,  863 => 286,  860 => 285,  857 => 284,  852 => 283,  850 => 282,  847 => 281,  832 => 274,  829 => 273,  826 => 272,  813 => 268,  810 => 267,  807 => 266,  800 => 263,  797 => 262,  789 => 256,  783 => 254,  780 => 253,  774 => 251,  771 => 250,  765 => 248,  762 => 247,  756 => 245,  754 => 244,  750 => 243,  746 => 242,  730 => 241,  727 => 240,  724 => 239,  721 => 238,  718 => 237,  715 => 236,  712 => 235,  709 => 234,  706 => 233,  704 => 232,  702 => 231,  699 => 230,  690 => 225,  688 => 224,  683 => 223,  680 => 222,  677 => 221,  674 => 220,  672 => 219,  669 => 218,  661 => 212,  658 => 211,  656 => 210,  653 => 209,  645 => 205,  642 => 204,  640 => 203,  637 => 202,  628 => 196,  624 => 195,  620 => 194,  616 => 193,  611 => 192,  608 => 191,  602 => 189,  599 => 188,  597 => 187,  594 => 186,  586 => 181,  583 => 180,  573 => 179,  568 => 178,  565 => 177,  559 => 175,  556 => 174,  554 => 173,  551 => 172,  543 => 167,  540 => 166,  538 => 165,  537 => 164,  536 => 163,  535 => 162,  532 => 161,  529 => 160,  526 => 159,  523 => 158,  516 => 155,  506 => 148,  500 => 145,  496 => 144,  492 => 142,  486 => 140,  484 => 139,  475 => 138,  472 => 137,  466 => 135,  464 => 134,  453 => 133,  450 => 132,  448 => 131,  446 => 130,  443 => 129,  435 => 123,  432 => 122,  429 => 121,  426 => 120,  420 => 118,  418 => 117,  413 => 116,  410 => 115,  408 => 114,  393 => 113,  385 => 111,  383 => 110,  379 => 108,  377 => 107,  375 => 106,  372 => 105,  367 => 102,  361 => 100,  359 => 99,  353 => 97,  350 => 96,  347 => 95,  341 => 93,  339 => 92,  334 => 91,  331 => 90,  328 => 89,  318 => 87,  316 => 86,  308 => 85,  302 => 83,  299 => 82,  296 => 81,  293 => 80,  287 => 76,  278 => 73,  274 => 72,  258 => 71,  254 => 70,  249 => 69,  246 => 68,  243 => 67,  240 => 66,  238 => 65,  235 => 64,  227 => 60,  225 => 59,  222 => 58,  216 => 54,  211 => 53,  209 => 52,  205 => 51,  200 => 50,  197 => 49,  192 => 48,  187 => 47,  184 => 46,  182 => 45,  179 => 44,  172 => 39,  166 => 37,  163 => 36,  161 => 35,  148 => 34,  145 => 33,  142 => 32,  139 => 31,  136 => 30,  130 => 28,  128 => 27,  123 => 26,  120 => 25,  117 => 24,  115 => 23,  112 => 22,  95 => 16,  88 => 15,  85 => 14,  82 => 13,  79 => 12,  77 => 11,  74 => 10,  67 => 7,  64 => 6,  61 => 5,  56 => 2,  58 => 19,  54 => 18,  48 => 14,  39 => 6,  36 => 5,  29 => 3,);
    }
}
