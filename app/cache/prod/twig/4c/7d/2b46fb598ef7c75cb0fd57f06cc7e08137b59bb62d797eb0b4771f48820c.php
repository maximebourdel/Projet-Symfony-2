<?php

/* MopaBootstrapBundle:Form:fields.html.twig */
class __TwigTemplate_4c7d2b46fb598ef7c75cb0fd57f06cc7e08137b59bb62d797eb0b4771f48820c extends Twig_Template
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
        $context["__internal_a58508dd10326382f8066d20768aad5c9577a274751d88eecf51b10ba4ecd0e1"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_button_attributes($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ("btn " . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")))));
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
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 13
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
            // line 14
            echo "    ";
        }
        // line 15
        echo "    <button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    ";
        // line 16
        if ((!twig_test_empty((isset($context["icon"]) ? $context["icon"] : null)))) {
            echo " <i class=\"icon-";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "\"";
            if ((!twig_test_empty((isset($context["icon_color"]) ? $context["icon_color"] : null)))) {
                echo " style=\"color: ";
                echo twig_escape_filter($this->env, (isset($context["icon_color"]) ? $context["icon_color"] : null), "html", null, true);
                echo ";\" ";
            }
            echo " ></i> ";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
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
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 25
        echo "    ";
        if ((((isset($context["type"]) ? $context["type"] : null) != "hidden") && (!(null === (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type"), null)) : (null)))))) {
            // line 26
            echo "    <div class=\"input-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type"), "html", null, true);
            echo "\">
        ";
            // line 27
            if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type") == "prepend")) {
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
        if ((!((array_key_exists("widget_remove_btn", $context)) ? (_twig_default_filter((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null), null)) : (null)))) {
            // line 32
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " not-removable")));
            // line 33
            echo "    ";
        }
        // line 34
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        // line 35
        if ((((isset($context["type"]) ? $context["type"] : null) != "hidden") && (!(null === (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type"), null)) : (null)))))) {
            // line 36
            echo "        ";
            if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type") == "append")) {
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
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") == null)) {
            // line 47
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : null)) {
                echo "<fieldset>";
            }
            // line 48
            echo "        ";
            if ((isset($context["show_legend"]) ? $context["show_legend"] : null)) {
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    ";
        // line 52
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") == null)) {
            // line 53
            echo "        ";
            if ((isset($context["render_fieldset"]) ? $context["render_fieldset"] : null)) {
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
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => (((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " ") . (((isset($context["multiple"]) ? $context["multiple"] : null)) ? ("checkbox") : ("radio")))));
        // line 67
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class") . " ") . (((isset($context["widget_type"]) ? $context["widget_type"] : null)) ? ((isset($context["widget_type"]) ? $context["widget_type"] : null)) : ("")))));
        // line 68
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class") . " ") . (((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) ? ("inline") : (""))))));
        // line 69
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 71
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
            ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars"), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
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
        if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type") == "prepend")) {
            // line 83
            echo "            ";
            $this->displayBlock("widget_addon", $context, $blocks);
            echo "
        ";
        }
        // line 85
        echo "        <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 86
        if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : null)))) {
            // line 87
            echo "                <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</option>
            ";
        }
        // line 89
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
            // line 90
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
            // line 91
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 92
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : null))))) {
                // line 93
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                echo "</option>
                ";
            }
            // line 95
            echo "            ";
        }
        // line 96
        echo "            ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 97
        echo "            ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
        </select>
        ";
        // line 99
        if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type") == "append")) {
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
        if (((!((isset($context["label"]) ? $context["label"] : null) === false)) && twig_test_empty((isset($context["label"]) ? $context["label"] : null)))) {
            // line 108
            echo "    ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
        }
        // line 110
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent"), "vars"), "block_prefixes"))) && (isset($context["label_render"]) ? $context["label_render"] : null))) {
            // line 111
            echo "    <label class=\"checkbox";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : null))) {
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
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo "/> ";
        echo $this->env->getExtension('translator')->trans((isset($context["help_inline"]) ? $context["help_inline"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo "
";
        // line 114
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent"), "vars"), "block_prefixes")))) {
            // line 115
            echo "    ";
            if (((isset($context["label_render"]) ? $context["label_render"] : null) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : null), array(0 => "both", 1 => "widget")))) {
                // line 116
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "
        ";
                // line 117
                if (((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : null) == "widget")) {
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
            if ((isset($context["label_render"]) ? $context["label_render"] : null)) {
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
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 132
            echo "    ";
            if (array_key_exists("datepicker", $context)) {
                // line 133
                echo "        <div class=\"input-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type"), "html", null, true);
                echo " date\" ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo " data-date=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" data-date-format=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["format"]) ? $context["format"] : null)), "html", null, true);
                echo "\" data-form=\"datepicker\">
            ";
                // line 134
                if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type") == "prepend")) {
                    // line 135
                    echo "                ";
                    $this->displayBlock("widget_addon", $context, $blocks);
                    echo "
            ";
                }
                // line 137
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " not-removable grd-white")));
                // line 138
                echo "            <input type=\"text\" ";
                $this->displayBlock("widget_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\"  data-form=\"datepicker\" data-date-format=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["format"]) ? $context["format"] : null)), "html", null, true);
                echo "\"/>
            ";
                // line 139
                if (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "type") == "append")) {
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
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo ").datepicker();
                    \$(";
                // line 145
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo ").datepicker().on(
                            \"changeDate\",
                            function(event){
                                \$(";
                // line 148
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
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
            $context["attrYear"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline")) . " input-small")));
            // line 159
            echo "        ";
            $context["attrMonth"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline")) . " input-mini")));
            // line 160
            echo "        ";
            $context["attrDay"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline")) . " input-mini")));
            // line 161
            echo "
            ";
            // line 162
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : null), array("{{ year }}" =>             // line 163
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "year"), 'widget', array("attr" => (isset($context["attrYear"]) ? $context["attrYear"] : null))), "{{ month }}" =>             // line 164
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "month"), 'widget', array("attr" => (isset($context["attrMonth"]) ? $context["attrMonth"] : null))), "{{ day }}" =>             // line 165
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "day"), 'widget', array("attr" => (isset($context["attrDay"]) ? $context["attrDay"] : null)))));
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
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 175
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 177
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline"))));
            // line 178
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 179
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "hour"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "minute"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : null)) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "second"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
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
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 189
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 191
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 192
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 193
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date"), 'errors');
            echo "
                ";
            // line 194
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time"), 'errors');
            echo "
                ";
            // line 195
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date"), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
                ";
            // line 196
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "time"), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
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
        $context["widget_addon"] = twig_array_merge((isset($context["widget_addon"]) ? $context["widget_addon"] : null), array("text" => (($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text"), "%")) : ("%"))));
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
        $context["widget_addon"] = twig_array_merge((isset($context["widget_addon"]) ? $context["widget_addon"] : null), array("text" => strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : null), array("{{ widget }}" => ""))));
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
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
            // line 221
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
            // line 222
            echo "    ";
        }
        // line 223
        echo "    <legend>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "</legend>
    ";
        // line 224
        if ((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : null)) {
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
        if ((!twig_in_filter("checkbox", (isset($context["block_prefixes"]) ? $context["block_prefixes"] : null)) || twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : null), array(0 => "label", 1 => "both")))) {
            // line 232
            ob_start();
            // line 233
            echo "    ";
            if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
                // line 234
                echo "        ";
                if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                    // line 235
                    echo "            ";
                    $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
                    // line 236
                    echo "        ";
                }
                // line 237
                echo "        ";
                if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                    // line 238
                    echo "            ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                    // line 239
                    echo "        ";
                }
                // line 240
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => (((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label") . (((isset($context["required"]) ? $context["required"] : null)) ? (" required") : (" optional")))));
                // line 241
                echo "        <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
        ";
                // line 242
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                echo "
        ";
                // line 243
                $this->displayBlock("label_asterisk", $context, $blocks);
                echo "
        ";
                // line 244
                if ((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : null)) {
                    // line 245
                    echo "            ";
                    $this->displayBlock("form_widget_add_btn", $context, $blocks);
                    echo "
        ";
                }
                // line 247
                echo "        ";
                if ((isset($context["help_label_tooltip_title"]) ? $context["help_label_tooltip_title"] : null)) {
                    // line 248
                    echo "            ";
                    $this->displayBlock("help_label_tooltip", $context, $blocks);
                    echo "
        ";
                }
                // line 250
                echo "        ";
                if ((isset($context["help_label_popover_title"]) ? $context["help_label_popover_title"] : null)) {
                    // line 251
                    echo "            ";
                    $this->displayBlock("help_label_popover", $context, $blocks);
                    echo "
        ";
                }
                // line 253
                echo "        ";
                if ((isset($context["help_label"]) ? $context["help_label"] : null)) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label"]) ? $context["help_label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label_tooltip_title"]) ? $context["help_label_tooltip_title"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "\" tabindex=\"-1\" data-toggle=\"tooltip\" data-placement=\"";
        echo twig_escape_filter($this->env, (isset($context["help_label_tooltip_placement"]) ? $context["help_label_tooltip_placement"] : null), "html", null, true);
        echo "\"><i class=\"";
        echo twig_escape_filter($this->env, (isset($context["help_label_tooltip_icon"]) ? $context["help_label_tooltip_icon"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_popover\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label_popover_title"]) ? $context["help_label_popover_title"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "\" tabindex=\"-1\" data-toggle=\"popover\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_label_popover_content"]) ? $context["help_label_popover_content"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "\" data-placement=\"";
        echo twig_escape_filter($this->env, (isset($context["help_label_popover_placement"]) ? $context["help_label_popover_placement"] : null), "html", null, true);
        echo "\" data-trigger=\"hover\" data-html=\"true\"><i class=\"";
        echo twig_escape_filter($this->env, (isset($context["help_label_popover_icon"]) ? $context["help_label_popover_icon"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 284
            echo "        ";
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars"), "block_prefixes"))) {
                // line 285
                echo "            ";
                if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "block_prefixes")) && (!(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : null)))) {
                    // line 286
                    echo "            <div class=\"collection-item ";
                    echo twig_escape_filter($this->env, twig_join_filter((($this->getAttribute((isset($context["widget_items_attr"]) ? $context["widget_items_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_items_attr"]) ? $context["widget_items_attr"] : null), "class"))) : ("")), " "), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars"), "id"), "html", null, true);
                    echo "_control_group\">
            ";
                }
                // line 288
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row');
                echo "
            ";
                // line 289
                if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "block_prefixes")) && (!(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : null)))) {
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
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . (((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) ? (" error") : ("")))));
        // line 300
        echo "    ";
        $this->displayBlock("widget_control_group_start", $context, $blocks);
        echo "
    ";
        // line 301
        echo $this->env->getExtension('translator')->trans((isset($context["widget_prefix"]) ? $context["widget_prefix"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget', $context);
        echo " ";
        echo $this->env->getExtension('translator')->trans((isset($context["widget_suffix"]) ? $context["widget_suffix"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
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
        if (!twig_in_filter("checkbox", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "block_prefixes"))) {
            // line 324
            echo "    ";
            if ((isset($context["help_inline"]) ? $context["help_inline"] : null)) {
                echo "<p class=\"help-inline\">";
                echo $this->env->getExtension('translator')->trans((isset($context["help_inline"]) ? $context["help_inline"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
                echo "</p>";
            }
        }
        // line 326
        if ((isset($context["help_block"]) ? $context["help_block"] : null)) {
            echo "<p class=\"help-block\">";
            echo $this->env->getExtension('translator')->trans((isset($context["help_block"]) ? $context["help_block"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null));
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
        if ((isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : null)) {
            // line 333
            echo "    ";
            $context["button_type"] = "add";
            // line 334
            echo "    ";
            $context["button_values"] = (isset($context["widget_add_btn"]) ? $context["widget_add_btn"] : null);
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
        if ((isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null)) {
            // line 343
            echo "    ";
            $context["button_type"] = "remove";
            // line 344
            echo "    ";
            $context["button_values"] = (isset($context["widget_remove_btn"]) ? $context["widget_remove_btn"] : null);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " data-collection-";
        echo twig_escape_filter($this->env, (isset($context["button_type"]) ? $context["button_type"] : null), "html", null, true);
        echo "-btn=\"#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "id", array(), "array"), "html", null, true);
        echo "_control_group\">
";
        // line 352
        if ($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon", array(), "any", true, true)) {
            // line 353
            echo "<i class=\"icon-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon"), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_color", array(), "any", true, true)) {
                echo "icon-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "icon_color"), "html", null, true);
            }
            echo "\"></i>
";
        }
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["button_values"]) ? $context["button_values"] : null), "label"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "
</a>

";
    }

    // line 360
    public function block_label_asterisk($context, array $blocks = array())
    {
        // line 361
        if ((isset($context["required"]) ? $context["required"] : null)) {
            // line 362
            echo "    ";
            if ((isset($context["render_required_asterisk"]) ? $context["render_required_asterisk"] : null)) {
                echo "<span>*</span>";
            }
        } else {
            // line 364
            echo "    ";
            if ((isset($context["render_optional_text"]) ? $context["render_optional_text"] : null)) {
                echo "<span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("(optional)", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
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
        $context["__internal_0101f53993e2822468b0ff22d90d5ec84b018c497c77d65756120d72d72f4deb"] = $this->env->loadTemplate("MopaBootstrapBundle::icons.html.twig");
        // line 372
        echo "<span class=\"add-on\">";
        echo (((($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text"), false)) : (false))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "text"), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null))) : ($context["__internal_0101f53993e2822468b0ff22d90d5ec84b018c497c77d65756120d72d72f4deb"]->geticon($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "icon"))));
        echo " ";
        echo (((($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "html", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "html"), false)) : (false))) ? ($this->getAttribute((isset($context["widget_addon"]) ? $context["widget_addon"] : null), "html")) : (""));
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
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 381
            echo "    <ul>
        ";
            // line 382
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 383
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
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
        if (((isset($context["errors_on_forms"]) ? $context["errors_on_forms"] : null) && ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") == null))) {
            // line 393
            echo "    ";
            // line 394
            echo "    ";
            $context["__internal_1d0c682dde88730e97a0d2448bf1e406d720d4052e48b9fa622ef82a2d5d3675"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
            // line 395
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 396
                echo "        ";
                echo $context["__internal_1d0c682dde88730e97a0d2448bf1e406d720d4052e48b9fa622ef82a2d5d3675"]->getflash("error", (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators"))));
                // line 403
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } elseif ((isset($context["error_delay"]) ? $context["error_delay"] : null)) {
            // line 406
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") == 1)) {
                    // line 408
                    echo "            ";
                    if ($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "set", array(0 => "errors", 1 => (isset($context["errors"]) ? $context["errors"] : null)), "method")) {
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
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 413
                echo "    <span class=\"help-";
                $this->displayBlock("error_type", $context, $blocks);
                echo "\">
        <span class=\"text-error\">
            ";
                // line 415
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 416
                    echo "                ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageParameters"), "validators"))), "html", null, true);
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
        if ((isset($context["error_type"]) ? $context["error_type"] : null)) {
            // line 435
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["error_type"]) ? $context["error_type"] : null), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") == null)) {
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
        if ((((array_key_exists("widget_control_group", $context)) ? (_twig_default_filter((isset($context["widget_control_group"]) ? $context["widget_control_group"] : null), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") == null))) {
            // line 449
            echo "    ";
            if (array_key_exists("prototype", $context)) {
                // line 450
                echo "        ";
                $context["data_prototype"] = (((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "block_prefixes")) && (!(isset($context["omit_collection_item"]) ? $context["omit_collection_item"] : null)))) ? ((((((("<div class=\"collection-item " . twig_join_filter((($this->getAttribute((isset($context["widget_items_attr"]) ? $context["widget_items_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_items_attr"]) ? $context["widget_items_attr"] : null), "class"))) : ("")), " ")) . "\" id=\"") . $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "vars"), "id")) . "_control_group\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'row')) . "</div>")) : ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : null), 'row')));
                // line 451
                echo "        ";
                $context["data_prototype_name"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "vars", array(), "any", false, true), "name"), "__name__")) : ("__name__"));
                // line 452
                echo "        ";
                $context["widget_control_group_attr"] = twig_array_merge(twig_array_merge((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), array("data-prototype" => (isset($context["data_prototype"]) ? $context["data_prototype"] : null), "data-prototype-name" => (isset($context["data_prototype_name"]) ? $context["data_prototype_name"] : null), "data-widget-controls" => ((((array_key_exists("widget_controls", $context)) ? (_twig_default_filter((isset($context["widget_controls"]) ? $context["widget_controls"] : null), false)) : (false))) ? ("true") : ("false")))), (isset($context["attr"]) ? $context["attr"] : null));
                // line 453
                echo "    ";
            }
            // line 454
            echo "    ";
            $context["widget_control_group_attr"] = twig_array_merge((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), array("id" => ((isset($context["id"]) ? $context["id"] : null) . "_control_group"), "class" => ((($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class"), "")) : ("")) . " control-group")));
            // line 455
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 456
                echo "        ";
                $context["widget_control_group_attr"] = twig_array_merge((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), array("class" => ((($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class"), "")) : ("")) . " error")));
                // line 457
                echo "    ";
            }
            // line 458
            echo "\t";
            if ((twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "block_prefixes")) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true))) {
                // line 459
                echo "\t\t";
                $context["widget_control_group_attr"] = twig_array_merge((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), array("class" => (((($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null), "class"), "")) : ("")) . " ") . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"))));
                // line 460
                echo "\t";
            }
            // line 461
            echo "    <div ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widget_control_group_attr"]) ? $context["widget_control_group_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 463
            echo "    ";
            if ((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : null)) > 0) && ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") != null)) && !twig_in_filter("field", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "block_prefixes")))) {
                // line 465
                echo "        ";
                if ((isset($context["show_child_legend"]) ? $context["show_child_legend"] : null)) {
                    // line 466
                    echo "            ";
                    $this->displayBlock("form_legend", $context, $blocks);
                    echo "
        ";
                } elseif ((isset($context["label_render"]) ? $context["label_render"] : null)) {
                    // line 468
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 470
                echo "    ";
            } else {
                // line 471
                echo "        ";
                if ((isset($context["label_render"]) ? $context["label_render"] : null)) {
                    // line 472
                    echo "            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
                    echo "
        ";
                }
                // line 474
                echo "    ";
            }
            // line 475
            echo "    ";
            if ((((array_key_exists("widget_controls", $context)) ? (_twig_default_filter((isset($context["widget_controls"]) ? $context["widget_controls"] : null), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") == null))) {
                // line 476
                echo "        ";
                $context["widget_controls_attr"] = twig_array_merge((isset($context["widget_controls_attr"]) ? $context["widget_controls_attr"] : null), array("class" => ((($this->getAttribute((isset($context["widget_controls_attr"]) ? $context["widget_controls_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["widget_controls_attr"]) ? $context["widget_controls_attr"] : null), "class"), "")) : ("")) . " controls")));
                // line 477
                echo "        <div ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["widget_controls_attr"]) ? $context["widget_controls_attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
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
            if ((isset($context["label_render"]) ? $context["label_render"] : null)) {
                // line 481
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
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
        if ((((array_key_exists("widget_control_group", $context)) ? (_twig_default_filter((isset($context["widget_control_group"]) ? $context["widget_control_group"] : null), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") == null))) {
            // line 490
            echo "    ";
            if ((((array_key_exists("widget_controls", $context)) ? (_twig_default_filter((isset($context["widget_controls"]) ? $context["widget_controls"] : null), false)) : (false)) || ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent") == null))) {
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
        return array (  1407 => 493,  1403 => 491,  1400 => 490,  1398 => 489,  1396 => 488,  1393 => 487,  1383 => 481,  1380 => 480,  1363 => 477,  1360 => 476,  1357 => 475,  1354 => 474,  1348 => 472,  1345 => 471,  1342 => 470,  1336 => 468,  1330 => 466,  1327 => 465,  1324 => 463,  1308 => 461,  1305 => 460,  1302 => 459,  1299 => 458,  1296 => 457,  1293 => 456,  1290 => 455,  1287 => 454,  1284 => 453,  1281 => 452,  1278 => 451,  1275 => 450,  1272 => 449,  1270 => 448,  1268 => 447,  1265 => 446,  1258 => 439,  1252 => 437,  1246 => 435,  1244 => 434,  1242 => 433,  1239 => 432,  1230 => 422,  1223 => 420,  1220 => 416,  1216 => 415,  1210 => 413,  1207 => 412,  1192 => 410,  1189 => 409,  1185 => 408,  1182 => 407,  1164 => 406,  1156 => 403,  1153 => 396,  1148 => 395,  1145 => 394,  1143 => 393,  1141 => 392,  1139 => 391,  1136 => 390,  1129 => 385,  1120 => 383,  1116 => 382,  1113 => 381,  1110 => 380,  1108 => 379,  1105 => 378,  1095 => 372,  1093 => 371,  1091 => 369,  1088 => 368,  1078 => 364,  1072 => 362,  1070 => 361,  1067 => 360,  1059 => 355,  1048 => 353,  1046 => 352,  1026 => 351,  1023 => 350,  1014 => 345,  1011 => 344,  1008 => 343,  1005 => 342,  1003 => 341,  1000 => 340,  991 => 335,  988 => 334,  985 => 333,  982 => 332,  980 => 331,  977 => 330,  968 => 326,  960 => 324,  958 => 323,  956 => 322,  953 => 321,  946 => 315,  941 => 314,  939 => 313,  936 => 312,  929 => 306,  925 => 305,  919 => 303,  917 => 302,  909 => 301,  904 => 300,  901 => 299,  899 => 298,  896 => 297,  887 => 293,  884 => 292,  880 => 290,  878 => 289,  873 => 288,  865 => 286,  862 => 285,  859 => 284,  854 => 283,  852 => 282,  849 => 281,  834 => 274,  831 => 273,  828 => 272,  815 => 268,  812 => 267,  809 => 266,  802 => 263,  799 => 262,  791 => 256,  785 => 254,  782 => 253,  776 => 251,  773 => 250,  767 => 248,  764 => 247,  758 => 245,  756 => 244,  752 => 243,  748 => 242,  732 => 241,  729 => 240,  726 => 239,  723 => 238,  720 => 237,  717 => 236,  714 => 235,  711 => 234,  708 => 233,  706 => 232,  704 => 231,  701 => 230,  692 => 225,  690 => 224,  685 => 223,  682 => 222,  679 => 221,  676 => 220,  674 => 219,  671 => 218,  663 => 212,  660 => 211,  658 => 210,  655 => 209,  647 => 205,  644 => 204,  642 => 203,  639 => 202,  630 => 196,  626 => 195,  622 => 194,  618 => 193,  613 => 192,  610 => 191,  604 => 189,  601 => 188,  599 => 187,  596 => 186,  588 => 181,  585 => 180,  575 => 179,  570 => 178,  567 => 177,  561 => 175,  558 => 174,  556 => 173,  553 => 172,  545 => 167,  542 => 166,  540 => 165,  539 => 164,  538 => 163,  537 => 162,  534 => 161,  531 => 160,  528 => 159,  525 => 158,  518 => 155,  508 => 148,  502 => 145,  498 => 144,  494 => 142,  488 => 140,  486 => 139,  477 => 138,  468 => 135,  466 => 134,  455 => 133,  452 => 132,  450 => 131,  448 => 130,  445 => 129,  434 => 122,  431 => 121,  428 => 120,  422 => 118,  420 => 117,  415 => 116,  412 => 115,  410 => 114,  395 => 113,  385 => 110,  377 => 106,  369 => 102,  363 => 100,  361 => 99,  352 => 96,  349 => 95,  343 => 93,  336 => 91,  333 => 90,  330 => 89,  320 => 87,  318 => 86,  310 => 85,  304 => 83,  301 => 82,  295 => 80,  289 => 76,  280 => 73,  276 => 72,  260 => 71,  256 => 70,  251 => 69,  248 => 68,  245 => 67,  242 => 66,  237 => 64,  218 => 54,  213 => 53,  211 => 52,  207 => 51,  202 => 50,  194 => 48,  186 => 46,  184 => 45,  181 => 44,  174 => 39,  165 => 36,  150 => 34,  114 => 22,  77 => 11,  74 => 10,  58 => 21,  34 => 14,  480 => 162,  474 => 137,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 123,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 111,  384 => 121,  381 => 108,  379 => 107,  374 => 105,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 97,  341 => 92,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 81,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 60,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 28,  128 => 49,  111 => 37,  107 => 36,  61 => 5,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 65,  238 => 85,  235 => 74,  230 => 82,  227 => 59,  224 => 58,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 24,  108 => 36,  102 => 32,  71 => 17,  67 => 7,  63 => 15,  59 => 14,  47 => 9,  28 => 10,  98 => 31,  93 => 28,  88 => 15,  78 => 21,  43 => 6,  40 => 8,  87 => 25,  55 => 20,  46 => 7,  44 => 12,  31 => 12,  38 => 16,  26 => 9,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 35,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 30,  136 => 56,  123 => 47,  121 => 46,  117 => 23,  115 => 43,  105 => 40,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 17,  32 => 5,  25 => 3,  35 => 5,  29 => 4,  21 => 2,  101 => 32,  94 => 28,  89 => 20,  85 => 14,  79 => 12,  75 => 17,  72 => 16,  68 => 14,  56 => 2,  50 => 19,  41 => 5,  27 => 4,  24 => 8,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 49,  193 => 73,  189 => 47,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 37,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 33,  144 => 32,  141 => 31,  133 => 55,  130 => 27,  125 => 26,  122 => 25,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 16,  92 => 21,  86 => 28,  82 => 13,  80 => 41,  73 => 19,  64 => 6,  60 => 22,  57 => 11,  54 => 10,  51 => 18,  48 => 8,  45 => 16,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
