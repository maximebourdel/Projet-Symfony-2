<?php

/* WebProfilerBundle:Collector:form.html.twig */
class __TwigTemplate_d9ba31f7f62f24eec1d3b440793d9ff4b7260e3f304a9ad1aaefa22b100f7156 extends Twig_Template
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
        // line 3
        $context["__internal_00d9db058a4d70cc0c9bf659a91da29c10832e01c02c67dd777bb8ba16cc3429"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"20\" height=\"28\" alt=\"Forms\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcAQMAAABbFA0jAAAABlBMVEUAAAA+Pj4LNneDAAAAAXRSTlMAQObYZgAAACxJREFUCNdjYEACjD8gmP8/A8P7/wVw/IChgOH//w9w/AHKf4CLRlILwkgAANMJMNaUFdtJAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "nb_errors")) {
                echo "red";
            } else {
                echo "green";
            }
            echo "\">";
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "nb_errors")) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "nb_errors"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms")), "html", null, true);
            }
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 13
            echo "    ";
        }
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    <span class=\"label\">
        <span class=\"icon\"><img src=\"data:image/png;base64,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\" alt=\"\"/></span>
        <strong>Forms</strong>
        ";
        // line 20
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"))) {
            // line 21
            echo "            <span class=\"count\"><span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms")), "html", null, true);
            echo "</span></span>
        ";
        }
        // line 23
        echo "    </span>
";
    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        // line 27
        echo "    <style type=\"text/css\">
    .window {
        /*background: #F6F6F6;*/
        margin: -30px -40px -40px;
    }
    .toggle-icon {
        display: inline-block;
        background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
    }
    .closed .toggle-icon, .closed.toggle-icon {
        background-position: bottom left;
    }
    .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
    }
    .tree {
        width: 230px;
        padding: 10px;
        font-size: 12px;
        float: left;
    }
    #content .tree h2 {
        font-size: 13px;
        padding: 5px 7px;
        margin: 0;
    }
    .tree li {
        margin: 0;
        padding: 0;
        width: 100%;
    }
    .tree .tree-inner {
        width: 100%;
        padding: 5px 7px 5px 22px;
        border-radius: 6px;
        color: #313131;
        cursor: pointer;
        position: relative;

        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .tree a {
        text-decoration: none;
    }
    .tree .toggle-button {
        /* provide a bigger clickable area than just 10x10px */
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -8px;
        margin-left: -18px;
    }
    .tree .toggle-icon {
        width: 10px;
        height: 10px;
        /* position the icon in the center of the clickable area */
        margin-left: 3px;
        margin-top: 3px;
        background-size: 10px 20px;
        background-color: #ccc;
    }
    .tree .toggle-icon.empty {
        width: 10px;
        height: 10px;
        position: absolute;
        top: 50%;
        margin-top: -5px;
        margin-left: -15px;
        background-size: 10px 10px;
    }
    .tree ul ul .tree-inner {
        padding-left: 37px;
    }
    .tree ul ul ul .tree-inner {
        padding-left: 52px;
    }
    .tree ul ul ul ul .tree-inner {
        padding-left: 67px;
    }
    .tree ul ul ul ul ul .tree-inner {
        padding-left: 82px;
    }
    .tree .tree-inner:hover {
        background: #dfdfdf;
    }
    .tree .tree-inner.active, .tree .tree-inner.active:hover {
        background: #dfdfdf;
        font-weight: bold;
        color: #313131;
    }
    .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
        background-color: #aaa;
    }
    .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
        background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
    }
    .tree-details {
        border-left: 1px solid #dfdfdf;
        background: white;
        margin-left: 250px;
        padding: 30px 40px 40px;
    }
    .tree-details h3 {
        position: relative;
    }
    .tree-details .toggle-icon {
        width: 16px;
        height: 16px;
        /* vertically center the button */
        position: absolute;
        top: 50%;
        margin-top: -9px;
        margin-left: 6px;
    }
    .form-type {
        color: #999999;
    }
    .hidden {
        display: none;
    }
    .badge-error {
        float: right;
        background: #a33;
        color: #fff;
        padding: 1px 4px;
        font-size: 10px;
        font-weight: bold;
        vertical-align: middle;
        border-radius: 6px;
    }
    .errors h3 {
        color: #800;
    }
    .errors th, .errors td {
        border-color: #800;
    }
    .errors th {
        background: #a33;
        color: #fff;
    }
    .errors .toggle-icon {
        background-color: #a33;
    }
    h3 a, h3 a:hover, h3 a:focus {
        color: inherit;
        text-decoration: inherit;
    }
    </style>

    ";
        // line 181
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"))) {
            // line 182
            echo "        <div class=\"window\">
            <div class=\"tree\">
                <h2>Forms</h2>

                <ul>
                ";
            // line 187
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 188
                echo "                    ";
                echo $context["__internal_00d9db058a4d70cc0c9bf659a91da29c10832e01c02c67dd777bb8ba16cc3429"]->getform_tree_entry((isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), (isset($context["formData"]) ? $context["formData"] : $this->getContext($context, "formData")), true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "                </ul>
            </div>

            ";
            // line 193
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms"));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 194
                echo "                ";
                echo $context["__internal_00d9db058a4d70cc0c9bf659a91da29c10832e01c02c67dd777bb8ba16cc3429"]->getform_tree_details((isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), (isset($context["formData"]) ? $context["formData"] : $this->getContext($context, "formData")), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "data"), "forms_by_hash"));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "        </div>
    ";
        } else {
            // line 198
            echo "        <p><em>No forms were submitted for this request.</em></p>
    ";
        }
        // line 200
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    buttons[i].addEventListener('click', function (e) {
                        toggle(this);

                        e.preventDefault();
                        e.stopPropagation();

                        return false;
                    });

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    tabs[i].addEventListener('click', function (e) {
                        select(this);

                        e.preventDefault();
                        e.stopPropagation();

                        return false;
                    });

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage));

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
    }

    // line 415
    public function getform_tree_entry($_name = null, $_data = null, $_expanded = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "data" => $_data,
            "expanded" => $_expanded,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 416
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 417
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
            echo "-details\">
            ";
            // line 418
            if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children")))) {
                // line 419
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 421
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 423
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "
            ";
            // line 424
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors")) > 0))) {
                // line 425
                echo "            <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors")), "html", null, true);
                echo "</div>
            ";
            }
            // line 427
            echo "        </div>

        ";
            // line 429
            if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children")))) {
                // line 430
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-children\"";
                if ((!(isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded")))) {
                    echo " class=\"hidden\"";
                }
                echo ">
                ";
                // line 431
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children"));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 432
                    echo "                    ";
                    echo $this->getAttribute($this, "form_tree_entry", array(0 => (isset($context["childName"]) ? $context["childName"] : $this->getContext($context, "childName")), 1 => (isset($context["childData"]) ? $context["childData"] : $this->getContext($context, "childData")), 2 => false), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 434
                echo "            </ul>
        ";
            }
            // line 436
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 439
    public function getform_tree_details($_name = null, $_data = null, $_forms_by_hash = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "data" => $_data,
            "forms_by_hash" => $_forms_by_hash,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 440
            echo "    <div class=\"tree-details\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
            echo "-details\">
        <h2>
            ";
            // line 442
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "
            ";
            // line 443
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true)) {
                // line 444
                echo "            <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type_class"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type"), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 446
            echo "        </h2>

        ";
            // line 448
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors")) > 0))) {
                // line 449
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 451
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors
                    <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 457
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-errors\">
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                ";
                // line 463
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "errors"));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 464
                    echo "                <tr>
                    <td>";
                    // line 465
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 467
                    if (twig_test_empty($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "origin"))) {
                        // line 468
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ((!$this->getAttribute((isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : null), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "origin"), array(), "array", true, true))) {
                        // line 470
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 472
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : $this->getContext($context, "forms_by_hash")), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "origin"), array(), "array"), "name"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 474
                    echo "                    </td>
                    <td>
                        ";
                    // line 476
                    if (twig_test_empty($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"))) {
                        // line 477
                        echo "                            <em>Unknown.</em>
                        ";
                    } elseif ($this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "cause", array(), "any", false, true), "root", array(), "any", true, true)) {
                        // line 479
                        echo "                            <strong>Constraint Violation</strong><br/>
                            <pre>";
                        // line 480
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "root"), "html", null, true);
                        if ((!twig_test_empty($this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "path")))) {
                            if ((twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "path")) != "[")) {
                                echo ".";
                            }
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "path"), "html", null, true);
                        }
                        echo " = ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "value"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 482
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "cause"), "html", null, true);
                        echo "</pre>
                        ";
                    }
                    // line 484
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 487
                echo "            </table>
        </div>
        ";
            }
            // line 490
            echo "
        ";
            // line 491
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", true, true)) {
                // line 492
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 493
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 499
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-default_data\">
            <table>
                <tr>
                    <th width=\"180\">Model Format</th>
                    <td>
                        ";
                // line 504
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 505
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data"), "model"), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 507
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 509
                echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                // line 513
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data"), "norm"), "html", null, true);
                echo "</pre></td>
                </tr>
                <tr>
                    <th>View Format</th>
                    <td>
                        ";
                // line 518
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 519
                    echo "                            <pre>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "default_data"), "view"), "html", null, true);
                    echo "</pre>
                        ";
                } else {
                    // line 521
                    echo "                            <em>same as normalized format</em>
                        ";
                }
                // line 523
                echo "                    </td>
                </tr>
            </table>
        </div>
        ";
            }
            // line 528
            echo "
        ";
            // line 529
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", true, true)) {
                // line 530
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 531
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 537
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 538
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 539
                    echo "            <table>
                <tr>
                    <th width=\"180\">View Format</th>
                    <td>
                        ";
                    // line 543
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 544
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data"), "view"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 546
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 548
                    echo "                    </td>
                </tr>
                <tr>
                    <th>Normalized Format</th>
                    <td><pre>";
                    // line 552
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data"), "norm"), "html", null, true);
                    echo "</pre></td>
                </tr>
                <tr>
                    <th>Model Format</th>
                    <td>
                        ";
                    // line 557
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 558
                        echo "                            <pre>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "submitted_data"), "model"), "html", null, true);
                        echo "</pre>
                        ";
                    } else {
                        // line 560
                        echo "                            <em>same as normalized format</em>
                        ";
                    }
                    // line 562
                    echo "                    </td>
                </tr>
            </table>
        ";
                } else {
                    // line 566
                    echo "            <p><em>This form was not submitted.</em></p>
        ";
                }
                // line 568
                echo "        </div>
        ";
            }
            // line 570
            echo "
        ";
            // line 571
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array(), "any", true, true)) {
                // line 572
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 573
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 579
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-passed_options\">
            ";
                // line 580
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "passed_options"))) {
                    // line 581
                    echo "            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Passed Value</th>
                    <th>Resolved Value</th>
                </tr>
                ";
                    // line 587
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "passed_options"));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 588
                        echo "                <tr>
                    <th>";
                        // line 589
                        echo twig_escape_filter($this->env, (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "html", null, true);
                        echo "</th>
                    <td><pre>";
                        // line 590
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                        echo "</pre></td>
                    <td>
                        ";
                        // line 592
                        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options"), (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), array(), "array") === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                            // line 593
                            echo "                            <em>same as passed value</em>
                        ";
                        } else {
                            // line 595
                            echo "                            <pre>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options"), (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), array(), "array"), "html", null, true);
                            echo "</pre>
                        ";
                        }
                        // line 597
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 600
                    echo "            </table>
            ";
                } else {
                    // line 602
                    echo "            <p><em>No options where passed when constructing this form.</em></p>
            ";
                }
                // line 604
                echo "        </div>
        ";
            }
            // line 606
            echo "
        ";
            // line 607
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array(), "any", true, true)) {
                // line 608
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 609
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 615
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Option</th>
                    <th>Value</th>
                </tr>
                ";
                // line 621
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "resolved_options"));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 622
                    echo "                <tr>
                    <th>";
                    // line 623
                    echo twig_escape_filter($this->env, (isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 624
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 627
                echo "            </table>
        </div>
        ";
            }
            // line 630
            echo "
        ";
            // line 631
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "view_vars", array(), "any", true, true)) {
                // line 632
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 633
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables
                <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 639
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id"), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <tr>
                    <th width=\"180\">Variable</th>
                    <th>Value</th>
                </tr>
                ";
                // line 645
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "view_vars"));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 646
                    echo "                <tr>
                    <th>";
                    // line 647
                    echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : $this->getContext($context, "variable")), "html", null, true);
                    echo "</th>
                    <td><pre>";
                    // line 648
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                    echo "</pre></td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 651
                echo "            </table>
        </div>
        ";
            }
            // line 654
            echo "    </div>

    ";
            // line 656
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "children"));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 657
                echo "        ";
                echo $this->getAttribute($this, "form_tree_details", array(0 => (isset($context["childName"]) ? $context["childName"] : $this->getContext($context, "childName")), 1 => (isset($context["childData"]) ? $context["childData"] : $this->getContext($context, "childData")), 2 => (isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : $this->getContext($context, "forms_by_hash"))), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1073 => 656,  1069 => 654,  1055 => 648,  1035 => 639,  1026 => 633,  1023 => 632,  1018 => 630,  1013 => 627,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  972 => 608,  963 => 604,  959 => 602,  941 => 595,  935 => 592,  930 => 590,  926 => 589,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  854 => 552,  848 => 548,  838 => 544,  836 => 543,  824 => 537,  815 => 531,  790 => 519,  788 => 518,  770 => 507,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  705 => 480,  698 => 477,  692 => 474,  686 => 472,  682 => 470,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  636 => 446,  626 => 443,  622 => 442,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  563 => 429,  553 => 425,  546 => 423,  542 => 421,  534 => 418,  530 => 417,  514 => 415,  297 => 200,  289 => 196,  280 => 194,  251 => 182,  185 => 75,  167 => 71,  153 => 69,  113 => 48,  20 => 1,  90 => 26,  306 => 286,  110 => 13,  198 => 39,  188 => 76,  180 => 34,  118 => 49,  65 => 22,  1402 => 419,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1349 => 401,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1295 => 381,  1287 => 379,  1283 => 378,  1271 => 375,  1251 => 368,  1249 => 367,  1246 => 366,  1231 => 358,  1223 => 356,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1159 => 329,  1157 => 328,  1145 => 322,  1115 => 319,  1112 => 318,  1109 => 317,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 657,  1074 => 304,  1067 => 299,  1064 => 651,  1056 => 293,  1053 => 292,  1051 => 647,  1048 => 646,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1016 => 276,  1014 => 272,  1004 => 624,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 607,  967 => 606,  964 => 255,  961 => 254,  955 => 600,  952 => 251,  950 => 250,  947 => 597,  936 => 242,  931 => 240,  920 => 235,  918 => 234,  903 => 229,  900 => 228,  892 => 225,  889 => 224,  881 => 220,  873 => 217,  865 => 213,  862 => 557,  849 => 206,  846 => 205,  844 => 546,  841 => 203,  833 => 199,  830 => 539,  828 => 538,  825 => 196,  817 => 192,  814 => 191,  812 => 530,  809 => 189,  801 => 185,  798 => 184,  796 => 521,  793 => 182,  785 => 178,  772 => 172,  769 => 171,  767 => 170,  764 => 505,  753 => 164,  751 => 163,  749 => 162,  739 => 156,  729 => 155,  710 => 149,  707 => 148,  697 => 141,  696 => 476,  695 => 139,  694 => 138,  689 => 137,  678 => 468,  675 => 132,  666 => 126,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  527 => 416,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  459 => 69,  456 => 68,  442 => 62,  433 => 60,  428 => 59,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  371 => 35,  366 => 33,  363 => 32,  344 => 24,  342 => 23,  335 => 21,  332 => 20,  313 => 15,  311 => 14,  290 => 5,  288 => 4,  281 => 409,  276 => 193,  271 => 190,  266 => 366,  263 => 365,  260 => 363,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  245 => 335,  233 => 304,  215 => 280,  212 => 279,  210 => 43,  207 => 42,  202 => 266,  194 => 248,  191 => 77,  186 => 36,  181 => 232,  174 => 74,  146 => 181,  134 => 54,  129 => 148,  126 => 147,  124 => 132,  104 => 42,  81 => 40,  76 => 31,  1405 => 493,  1401 => 491,  1398 => 490,  1396 => 417,  1394 => 488,  1391 => 487,  1381 => 481,  1378 => 480,  1361 => 477,  1358 => 476,  1355 => 403,  1352 => 474,  1346 => 472,  1343 => 399,  1340 => 470,  1334 => 468,  1328 => 466,  1325 => 465,  1322 => 463,  1306 => 461,  1303 => 460,  1300 => 459,  1297 => 382,  1294 => 457,  1291 => 380,  1288 => 455,  1285 => 454,  1282 => 453,  1279 => 377,  1276 => 451,  1273 => 376,  1270 => 449,  1268 => 374,  1266 => 447,  1263 => 446,  1256 => 369,  1250 => 437,  1244 => 435,  1242 => 434,  1240 => 433,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1214 => 415,  1208 => 413,  1205 => 412,  1190 => 343,  1187 => 342,  1183 => 408,  1180 => 407,  1162 => 330,  1154 => 327,  1151 => 396,  1146 => 395,  1143 => 321,  1141 => 393,  1139 => 392,  1137 => 391,  1134 => 390,  1127 => 385,  1118 => 320,  1114 => 382,  1111 => 381,  1108 => 380,  1106 => 316,  1103 => 315,  1093 => 372,  1091 => 371,  1089 => 369,  1086 => 368,  1076 => 364,  1070 => 362,  1068 => 361,  1065 => 360,  1057 => 355,  1046 => 353,  1044 => 645,  1024 => 280,  1021 => 631,  1012 => 271,  1009 => 270,  1006 => 343,  1003 => 342,  1001 => 341,  998 => 340,  989 => 335,  986 => 334,  983 => 333,  980 => 332,  978 => 331,  975 => 609,  966 => 326,  958 => 253,  956 => 323,  954 => 322,  951 => 321,  944 => 315,  939 => 243,  937 => 593,  934 => 241,  927 => 306,  923 => 588,  917 => 303,  915 => 233,  907 => 301,  902 => 300,  899 => 299,  897 => 227,  894 => 226,  885 => 293,  882 => 292,  878 => 219,  876 => 218,  871 => 288,  863 => 286,  860 => 211,  857 => 210,  852 => 283,  850 => 282,  847 => 281,  832 => 274,  829 => 273,  826 => 272,  813 => 268,  810 => 529,  807 => 528,  800 => 523,  797 => 262,  789 => 256,  783 => 177,  780 => 513,  774 => 509,  771 => 250,  765 => 248,  762 => 504,  756 => 165,  754 => 499,  750 => 243,  746 => 161,  730 => 241,  727 => 240,  724 => 484,  721 => 153,  718 => 482,  715 => 151,  712 => 150,  709 => 234,  706 => 233,  704 => 232,  702 => 479,  699 => 142,  690 => 225,  688 => 224,  683 => 135,  680 => 134,  677 => 221,  674 => 220,  672 => 219,  669 => 218,  661 => 212,  658 => 124,  656 => 210,  653 => 209,  645 => 205,  642 => 449,  640 => 448,  637 => 202,  628 => 444,  624 => 195,  620 => 194,  616 => 440,  611 => 192,  608 => 191,  602 => 189,  599 => 188,  597 => 187,  594 => 186,  586 => 181,  583 => 180,  573 => 179,  568 => 178,  565 => 430,  559 => 427,  556 => 174,  554 => 173,  551 => 424,  543 => 167,  540 => 166,  538 => 165,  537 => 164,  536 => 419,  535 => 162,  532 => 161,  529 => 92,  526 => 159,  523 => 158,  516 => 155,  506 => 148,  500 => 145,  496 => 79,  492 => 142,  486 => 140,  484 => 139,  475 => 138,  472 => 137,  466 => 135,  464 => 71,  450 => 64,  448 => 131,  446 => 130,  443 => 129,  432 => 122,  429 => 121,  426 => 58,  420 => 118,  418 => 117,  410 => 115,  408 => 50,  385 => 41,  383 => 110,  377 => 37,  375 => 106,  372 => 105,  367 => 339,  361 => 100,  359 => 99,  353 => 328,  350 => 327,  347 => 95,  339 => 92,  334 => 91,  331 => 90,  328 => 89,  318 => 87,  316 => 16,  308 => 287,  302 => 83,  299 => 8,  296 => 81,  293 => 198,  287 => 76,  274 => 72,  249 => 181,  225 => 46,  222 => 297,  216 => 54,  211 => 53,  205 => 51,  200 => 50,  192 => 48,  184 => 233,  172 => 39,  148 => 28,  34 => 5,  84 => 27,  53 => 17,  197 => 249,  195 => 93,  175 => 89,  170 => 88,  161 => 202,  152 => 78,  77 => 20,  70 => 24,  58 => 18,  265 => 51,  262 => 188,  256 => 24,  223 => 35,  206 => 24,  114 => 111,  100 => 36,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 133,  444 => 149,  440 => 148,  437 => 61,  435 => 123,  430 => 144,  427 => 143,  423 => 57,  413 => 116,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 113,  387 => 122,  384 => 121,  381 => 120,  379 => 108,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 329,  341 => 93,  337 => 22,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 3,  283 => 88,  278 => 408,  268 => 373,  264 => 84,  258 => 187,  252 => 80,  247 => 78,  241 => 50,  229 => 73,  220 => 290,  214 => 69,  177 => 65,  169 => 210,  140 => 55,  132 => 51,  128 => 27,  107 => 16,  61 => 23,  273 => 392,  269 => 94,  254 => 70,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 77,  219 => 45,  217 => 289,  208 => 68,  204 => 78,  179 => 224,  159 => 196,  143 => 56,  135 => 47,  119 => 117,  102 => 41,  71 => 13,  67 => 24,  63 => 21,  59 => 11,  28 => 3,  93 => 27,  88 => 15,  78 => 18,  87 => 34,  46 => 13,  44 => 9,  31 => 4,  38 => 7,  26 => 6,  201 => 40,  196 => 90,  183 => 35,  171 => 73,  166 => 33,  163 => 36,  158 => 67,  156 => 195,  151 => 188,  142 => 26,  138 => 56,  136 => 168,  121 => 50,  117 => 24,  105 => 12,  91 => 34,  62 => 12,  49 => 14,  21 => 2,  25 => 3,  94 => 57,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 6,  27 => 3,  24 => 3,  19 => 1,  79 => 21,  72 => 17,  69 => 16,  47 => 11,  40 => 11,  37 => 6,  22 => 2,  246 => 68,  157 => 56,  145 => 33,  139 => 25,  131 => 160,  123 => 26,  120 => 25,  115 => 19,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 37,  83 => 33,  74 => 20,  66 => 25,  55 => 16,  52 => 4,  50 => 16,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 52,  203 => 78,  199 => 265,  193 => 38,  189 => 240,  187 => 47,  182 => 45,  176 => 223,  173 => 65,  168 => 72,  164 => 70,  162 => 57,  154 => 30,  149 => 182,  147 => 58,  144 => 176,  141 => 175,  133 => 23,  130 => 22,  125 => 51,  122 => 43,  116 => 116,  112 => 18,  109 => 17,  106 => 104,  103 => 32,  99 => 68,  95 => 39,  92 => 28,  86 => 34,  82 => 13,  80 => 32,  73 => 23,  64 => 13,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
