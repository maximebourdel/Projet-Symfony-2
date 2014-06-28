<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_81392910a5c499b2d83cdeda2f5548dd95ab317bd748f59f6d03c0d9b8057966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_5684b064e64e3c655582b0b9bf8e7cef526abf621c0be23c2abf969964ef8d94"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==\" alt=\"Events\"></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            echo $context["__internal_5684b064e64e3c655582b0b9bf8e7cef526abf621c0be23c2abf969964ef8d94"]->getdisplay_listener((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    <h2>Not Called Listeners</h2>

    ";
        // line 41
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners")) {
            // line 42
            echo "        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            $context["listeners"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners");
            // line 48
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                echo $context["__internal_5684b064e64e3c655582b0b9bf8e7cef526abf621c0be23c2abf969964ef8d94"]->getdisplay_listener($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        } else {
            // line 56
            echo "        <p>
            <strong>No uncalled listeners</strong>.
        </p>
        <p>

            All listeners were called for this request or an error occurred
            when trying to collect uncalled listeners (in which case check the
            logs to get more information).

        </p>
    ";
        }
    }

    // line 69
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    ";
            if (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Closure")) {
                // line 71
                echo "        Closure
    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Function")) {
                // line 73
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 74
                echo "        ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                }
                // line 75
                echo "    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Method")) {
                // line 76
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 77
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "class"));
                echo "::";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                }
                // line 78
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 75,  167 => 71,  153 => 69,  113 => 48,  20 => 1,  90 => 37,  306 => 286,  110 => 13,  198 => 39,  188 => 76,  180 => 34,  118 => 49,  65 => 22,  1402 => 419,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1349 => 401,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1295 => 381,  1287 => 379,  1283 => 378,  1271 => 375,  1251 => 368,  1249 => 367,  1246 => 366,  1231 => 358,  1223 => 356,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1159 => 329,  1157 => 328,  1145 => 322,  1115 => 319,  1112 => 318,  1109 => 317,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1016 => 276,  1014 => 272,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  936 => 242,  931 => 240,  920 => 235,  918 => 234,  903 => 229,  900 => 228,  892 => 225,  889 => 224,  881 => 220,  873 => 217,  865 => 213,  862 => 212,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  753 => 164,  751 => 163,  749 => 162,  739 => 156,  729 => 155,  710 => 149,  707 => 148,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  459 => 69,  456 => 68,  442 => 62,  433 => 60,  428 => 59,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  371 => 35,  366 => 33,  363 => 32,  344 => 24,  342 => 23,  335 => 21,  332 => 20,  313 => 15,  311 => 14,  290 => 5,  288 => 4,  281 => 409,  276 => 393,  271 => 374,  266 => 366,  263 => 365,  260 => 363,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  245 => 335,  233 => 304,  215 => 280,  212 => 279,  210 => 43,  207 => 42,  202 => 266,  194 => 248,  191 => 77,  186 => 36,  181 => 232,  174 => 74,  146 => 181,  134 => 54,  129 => 148,  126 => 147,  124 => 132,  104 => 42,  81 => 40,  76 => 31,  1405 => 493,  1401 => 491,  1398 => 490,  1396 => 417,  1394 => 488,  1391 => 487,  1381 => 481,  1378 => 480,  1361 => 477,  1358 => 476,  1355 => 403,  1352 => 474,  1346 => 472,  1343 => 399,  1340 => 470,  1334 => 468,  1328 => 466,  1325 => 465,  1322 => 463,  1306 => 461,  1303 => 460,  1300 => 459,  1297 => 382,  1294 => 457,  1291 => 380,  1288 => 455,  1285 => 454,  1282 => 453,  1279 => 377,  1276 => 451,  1273 => 376,  1270 => 449,  1268 => 374,  1266 => 447,  1263 => 446,  1256 => 369,  1250 => 437,  1244 => 435,  1242 => 434,  1240 => 433,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1214 => 415,  1208 => 413,  1205 => 412,  1190 => 343,  1187 => 342,  1183 => 408,  1180 => 407,  1162 => 330,  1154 => 327,  1151 => 396,  1146 => 395,  1143 => 321,  1141 => 393,  1139 => 392,  1137 => 391,  1134 => 390,  1127 => 385,  1118 => 320,  1114 => 382,  1111 => 381,  1108 => 380,  1106 => 316,  1103 => 315,  1093 => 372,  1091 => 371,  1089 => 369,  1086 => 368,  1076 => 364,  1070 => 362,  1068 => 361,  1065 => 360,  1057 => 355,  1046 => 353,  1044 => 352,  1024 => 280,  1021 => 350,  1012 => 271,  1009 => 270,  1006 => 343,  1003 => 342,  1001 => 341,  998 => 340,  989 => 335,  986 => 334,  983 => 333,  980 => 332,  978 => 331,  975 => 330,  966 => 326,  958 => 253,  956 => 323,  954 => 322,  951 => 321,  944 => 315,  939 => 243,  937 => 313,  934 => 241,  927 => 306,  923 => 236,  917 => 303,  915 => 233,  907 => 301,  902 => 300,  899 => 299,  897 => 227,  894 => 226,  885 => 293,  882 => 292,  878 => 219,  876 => 218,  871 => 288,  863 => 286,  860 => 211,  857 => 210,  852 => 283,  850 => 282,  847 => 281,  832 => 274,  829 => 273,  826 => 272,  813 => 268,  810 => 267,  807 => 266,  800 => 263,  797 => 262,  789 => 256,  783 => 177,  780 => 176,  774 => 251,  771 => 250,  765 => 248,  762 => 247,  756 => 165,  754 => 244,  750 => 243,  746 => 161,  730 => 241,  727 => 240,  724 => 154,  721 => 153,  718 => 237,  715 => 151,  712 => 150,  709 => 234,  706 => 233,  704 => 232,  702 => 231,  699 => 142,  690 => 225,  688 => 224,  683 => 135,  680 => 134,  677 => 221,  674 => 220,  672 => 219,  669 => 218,  661 => 212,  658 => 124,  656 => 210,  653 => 209,  645 => 205,  642 => 204,  640 => 119,  637 => 202,  628 => 196,  624 => 195,  620 => 194,  616 => 193,  611 => 192,  608 => 191,  602 => 189,  599 => 188,  597 => 187,  594 => 186,  586 => 181,  583 => 180,  573 => 179,  568 => 178,  565 => 177,  559 => 175,  556 => 174,  554 => 173,  551 => 172,  543 => 167,  540 => 166,  538 => 165,  537 => 164,  536 => 163,  535 => 162,  532 => 161,  529 => 92,  526 => 159,  523 => 158,  516 => 155,  506 => 148,  500 => 145,  496 => 79,  492 => 142,  486 => 140,  484 => 139,  475 => 138,  472 => 137,  466 => 135,  464 => 71,  450 => 64,  448 => 131,  446 => 130,  443 => 129,  432 => 122,  429 => 121,  426 => 58,  420 => 118,  418 => 117,  410 => 115,  408 => 50,  385 => 41,  383 => 110,  377 => 37,  375 => 106,  372 => 105,  367 => 339,  361 => 100,  359 => 99,  353 => 328,  350 => 327,  347 => 95,  339 => 92,  334 => 91,  331 => 90,  328 => 89,  318 => 87,  316 => 16,  308 => 287,  302 => 83,  299 => 8,  296 => 81,  293 => 6,  287 => 76,  274 => 72,  249 => 69,  225 => 46,  222 => 297,  216 => 54,  211 => 53,  205 => 51,  200 => 50,  192 => 48,  184 => 233,  172 => 39,  148 => 28,  34 => 5,  84 => 27,  53 => 17,  197 => 249,  195 => 93,  175 => 89,  170 => 88,  161 => 202,  152 => 78,  77 => 25,  70 => 24,  58 => 18,  265 => 51,  262 => 50,  256 => 24,  223 => 35,  206 => 24,  114 => 111,  100 => 36,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 133,  444 => 149,  440 => 148,  437 => 61,  435 => 123,  430 => 144,  427 => 143,  423 => 57,  413 => 116,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 113,  387 => 122,  384 => 121,  381 => 120,  379 => 108,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 329,  341 => 93,  337 => 22,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 3,  283 => 88,  278 => 408,  268 => 373,  264 => 84,  258 => 354,  252 => 80,  247 => 78,  241 => 50,  229 => 73,  220 => 290,  214 => 69,  177 => 65,  169 => 210,  140 => 55,  132 => 51,  128 => 27,  107 => 16,  61 => 23,  273 => 392,  269 => 94,  254 => 70,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 77,  219 => 45,  217 => 289,  208 => 68,  204 => 78,  179 => 224,  159 => 196,  143 => 56,  135 => 47,  119 => 117,  102 => 41,  71 => 13,  67 => 24,  63 => 21,  59 => 16,  28 => 3,  93 => 38,  88 => 15,  78 => 18,  87 => 34,  46 => 13,  44 => 10,  31 => 4,  38 => 7,  26 => 6,  201 => 40,  196 => 90,  183 => 35,  171 => 73,  166 => 33,  163 => 36,  158 => 67,  156 => 195,  151 => 188,  142 => 26,  138 => 56,  136 => 168,  121 => 50,  117 => 24,  105 => 12,  91 => 34,  62 => 21,  49 => 14,  21 => 2,  25 => 3,  94 => 57,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 6,  27 => 3,  24 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 11,  40 => 11,  37 => 6,  22 => 2,  246 => 68,  157 => 56,  145 => 33,  139 => 25,  131 => 160,  123 => 26,  120 => 25,  115 => 19,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 37,  83 => 33,  74 => 20,  66 => 25,  55 => 16,  52 => 4,  50 => 16,  43 => 12,  41 => 2,  35 => 6,  32 => 5,  29 => 3,  209 => 52,  203 => 78,  199 => 265,  193 => 38,  189 => 240,  187 => 47,  182 => 45,  176 => 223,  173 => 65,  168 => 72,  164 => 70,  162 => 57,  154 => 30,  149 => 182,  147 => 58,  144 => 176,  141 => 175,  133 => 23,  130 => 22,  125 => 51,  122 => 43,  116 => 116,  112 => 18,  109 => 17,  106 => 104,  103 => 32,  99 => 68,  95 => 39,  92 => 28,  86 => 34,  82 => 13,  80 => 32,  73 => 23,  64 => 23,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 16,  45 => 14,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
