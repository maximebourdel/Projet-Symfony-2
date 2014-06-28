<?php

/* WebProfilerBundle:Profiler:profiler.css.twig */
class __TwigTemplate_ae00b2a18e3fe99cb0485ec977c804c95fb0a42a518ceb0a9232f4db8972e69b extends Twig_Template
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
        // line 1
        echo "/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}
html, body {
    background-color: #efefef;
}
body {
    font: 1em \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
    text-align: left;
}
p {
    font-size: 14px;
    line-height: 20px;
    color: #313131;
    padding-bottom: 20px
}
strong {
    color: #313131;
    font-weight: bold;
}
em {
    font-style: italic;
}
a {
    color: #6c6159;
}
a img {
    border: none;
}
a:hover {
    text-decoration: underline;
}
button::-moz-focus-inner {
    padding: 0;
    border: none;
}
button {
    overflow: visible;
    width: auto;
    background-color: transparent;
    font-weight: bold;
}
caption {
    margin-bottom: 7px;
}
table, tr, th, td {
    border-collapse: collapse;
    border: 1px solid #d0dbb3;
}
table {
    width: 100%;
    margin: 10px 0 30px;
}
table th {
    font-weight: bold;
    background-color: #f1f7e2;
}
table th, table td {
    font-size: 12px;
    padding: 8px 10px;
}
table td em {
    color: #aaa;
}
fieldset {
    border: none;
}
abbr {
    border-bottom: 1px dotted #000;
    cursor: help;
}
pre, code {
    font-size: 0.9em;
}
.clear {
    clear: both;
    height: 0;
    font-size: 0;
    line-height: 0;
}
.clear-fix:after
{
    content: \"\\0020\";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
* html .clear-fix
{
    height: 1%;
}
.clear-fix
{
    display: block;
}
#content {
    padding: 0 50px;
    margin: 0 auto 20px;
    font-family: Arial, Helvetica, sans-serif;
    min-width: 970px;
}
#header {
    padding: 20px 30px 20px;
}
#header h1 {
    float: left;
}
.search {
    float: right;
}
#menu-profiler {
    border-right: 1px solid #dfdfdf;
}
#menu-profiler li {
    border-bottom: 1px solid #dfdfdf;
    position: relative;
    padding-bottom: 0;
    display: block;
    background-color: #f6f6f6;
    z-index: 10000;
}
#menu-profiler li a {
    color: #404040;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
}
#menu-profiler li a span.label {
    display: block;
    padding: 20px 0px 16px 65px;
    min-height: 16px;
    overflow: hidden;
}
#menu-profiler li a span.icon {
    display: block;
    position: absolute;
    left: 0;
    top: 12px;
    width: 60px;
    text-align: center;
}
#menu-profiler li.selected a,
#menu-profiler li a:hover {
    background: #d1d1d1 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA7CAAAAACfn7+eAAAACXZwQWcAAAABAAAAOwDiPIGUAAAAJElEQVQIW2N4y8TA9B+KGZDYEP5/FD4Eo7IgNLJqZDUIMRRTAcmVHUZf/1g/AAAAAElFTkSuQmCC) repeat-x 0 0;
}
#navigation div:first-child,
#menu-profiler li:first-child,
#menu-profiler li:first-child a,
#menu-profiler li:first-child a span.label {
    border-radius: 16px 0 0 0;
}
#menu-profiler li a span.count {
    padding: 0;
    position: absolute;
    right: 10px;
    top: 20px;
}
#collector-wrapper {
    float: left;
    width: 100%;
}
#collector-content {
    margin-left: 250px;
    padding: 30px 40px 40px;
}
#collector-content pre {
    white-space: pre-wrap;
    word-break: break-all;
}
#navigation {
    float: left;
    width: 250px;
    margin-left: -100%;
}
#collector-content table td {
    background-color: white;
}
h1 {
    font-family: Georgia, \"Times New Roman\", Times, serif;
    color: #404040;
}
h2, h3 {
    font-weight: bold;
    margin-bottom: 20px;
}
li {
    padding-bottom: 10px;
}
#main {
    border-radius: 16px;
    margin-bottom: 20px;
}
#menu-profiler span.count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: #fff;
    margin-right: 2px;
    font-size: 11px;
}
#resume {
    background-color: #f6f6f6;
    border-bottom: 1px solid #dfdfdf;
    padding: 18px 10px 0px;
    margin-left: 250px;
    height: 34px;
    color: #313131;
    font-size: 12px;
    border-top-right-radius: 16px;
}
a#resume-view-all {
    display: inline-block;
    padding: 0.2em 0.7em;
    margin-right: 0.5em;
    background-color: #666;
    border-radius: 16px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
table th.value {
    width: 450px;
    background-color: #dfeeb8;
}
#content h2 {
    font-size: 24px;
    color: #313131;
    font-weight: bold;
}
#content #main {
    padding: 0;
    background-color: #FFF;
    border: 1px solid #dfdfdf;
}
#content #main p {
    color: #313131;
    font-size: 14px;
    padding-bottom: 20px;
}
.sf-toolbarreset {
    border-top: 0;
    padding: 0;
}
.sf-reset .block-exception-detected .text-exception {
    left: 10px;
    right: 10px;
    width: 95%;
}
.sf-reset .block-exception-detected .illustration-exception {
    display: none;
}
ul.alt {
    margin: 10px 0 30px;
}
ul.alt li {
    padding: 5px 7px;
    font-size: 13px;
}
ul.alt li.even {
    background: #f1f7e2;
}
ul.alt li.error {
    background-color: #f66;
    margin-bottom: 1px;
}
ul.alt li.warning {
    background-color: #ffcc00;
    margin-bottom: 1px;
}
ul.alt li.scream, ul.alt li.scream strong {
    color: gray;
}
ul.sf-call-stack li {
    text-size: small;
    padding: 0 0 0 20px;
}
td.main, td.menu {
    text-align: left;
    margin: 0;
    padding: 0;
    border: 0;
    vertical-align: top;
}
.search {
    float: right;
    padding-top: 20px;
}
.search label {
    line-height: 28px;
    vertical-align: middle;
}
.search input {
    width: 195px;
    font-size: 12px;
    border: 1px solid #dadada;
    background: #FFF url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
    padding: 5px 6px;
    color: #565656;
}
.search input[type=\"search\"] {
    -webkit-appearance: textfield;
}
#navigation div:first-child {
    margin: 0 0 20px;
    border-top: 0;
}
#navigation .search {
    padding-top: 15px;
    float: none;
    background: none repeat scroll 0 0 #f6f6f6;
    color: #333;
    margin: 20px 0;
    border: 1px solid #dfdfdf;
    border-left: none;
}
#navigation .search h3 {
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    margin-left: 10px;
    font-size: 13px;
}
#navigation .search form {
    padding: 15px 0;
}
#navigation .search button {
    float: right;
    margin-right: 20px;
}
#navigation .search label {
    display: block;
    float: left;
    width: 50px;
}
#navigation .search input,
#navigation .search select,
#navigation .search label,
#navigation .search a {
    font-size: 12px;
}
#navigation .search form {
    padding-left: 10px;
}
#navigation .search input {
    width: 160px;
}
#navigation .import label {
    float: none;
    display: inline;
}
#navigation .import input {
    width: 100px;
}
.timeline {
    background-color: #fbfbfb;
    margin-bottom: 15px;
    margin-top: 5px;
}
#collector-content .routing tr.matches td {
    background-color: #0e0;
}
#collector-content .routing tr.almost td {
    background-color: #fa0;
}
.loading {
    background: transparent url(data:image/gif;base64,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) scroll no-repeat 50% 50%;
    height: 30px;
    display: none;
}
.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends span {
    border-left-width: 10px;
    border-left-style: solid;
    padding: 0 10px 0 5px;
}
.sf-profiler-timeline canvas {
    border: 1px solid #999;
    border-width: 1px 0;
}
.collapsed-menu-parents #resume,
.collapsed-menu-parents #collector-content {
    margin-left: 60px !important;
}
.collapsed-menu {
    width: 60px !important;
}
.collapsed-menu span :not(.icon) {
    display: none !important;
}
.collapsed-menu span.icon img {
    display: inline !important;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:profiler.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 37,  306 => 286,  110 => 13,  198 => 39,  188 => 37,  180 => 34,  118 => 20,  65 => 9,  1402 => 419,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1349 => 401,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1295 => 381,  1287 => 379,  1283 => 378,  1271 => 375,  1251 => 368,  1249 => 367,  1246 => 366,  1231 => 358,  1223 => 356,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1159 => 329,  1157 => 328,  1145 => 322,  1115 => 319,  1112 => 318,  1109 => 317,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1016 => 276,  1014 => 272,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  936 => 242,  931 => 240,  920 => 235,  918 => 234,  903 => 229,  900 => 228,  892 => 225,  889 => 224,  881 => 220,  873 => 217,  865 => 213,  862 => 212,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  753 => 164,  751 => 163,  749 => 162,  739 => 156,  729 => 155,  710 => 149,  707 => 148,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  459 => 69,  456 => 68,  442 => 62,  433 => 60,  428 => 59,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  371 => 35,  366 => 33,  363 => 32,  344 => 24,  342 => 23,  335 => 21,  332 => 20,  313 => 15,  311 => 14,  290 => 5,  288 => 4,  281 => 409,  276 => 393,  271 => 374,  266 => 366,  263 => 365,  260 => 363,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  245 => 335,  233 => 304,  215 => 280,  212 => 279,  210 => 43,  207 => 42,  202 => 266,  194 => 248,  191 => 246,  186 => 36,  181 => 232,  174 => 217,  146 => 181,  134 => 161,  129 => 148,  126 => 147,  124 => 132,  104 => 90,  81 => 40,  76 => 27,  1405 => 493,  1401 => 491,  1398 => 490,  1396 => 417,  1394 => 488,  1391 => 487,  1381 => 481,  1378 => 480,  1361 => 477,  1358 => 476,  1355 => 403,  1352 => 474,  1346 => 472,  1343 => 399,  1340 => 470,  1334 => 468,  1328 => 466,  1325 => 465,  1322 => 463,  1306 => 461,  1303 => 460,  1300 => 459,  1297 => 382,  1294 => 457,  1291 => 380,  1288 => 455,  1285 => 454,  1282 => 453,  1279 => 377,  1276 => 451,  1273 => 376,  1270 => 449,  1268 => 374,  1266 => 447,  1263 => 446,  1256 => 369,  1250 => 437,  1244 => 435,  1242 => 434,  1240 => 433,  1237 => 360,  1228 => 357,  1221 => 355,  1218 => 354,  1214 => 415,  1208 => 413,  1205 => 412,  1190 => 343,  1187 => 342,  1183 => 408,  1180 => 407,  1162 => 330,  1154 => 327,  1151 => 396,  1146 => 395,  1143 => 321,  1141 => 393,  1139 => 392,  1137 => 391,  1134 => 390,  1127 => 385,  1118 => 320,  1114 => 382,  1111 => 381,  1108 => 380,  1106 => 316,  1103 => 315,  1093 => 372,  1091 => 371,  1089 => 369,  1086 => 368,  1076 => 364,  1070 => 362,  1068 => 361,  1065 => 360,  1057 => 355,  1046 => 353,  1044 => 352,  1024 => 280,  1021 => 350,  1012 => 271,  1009 => 270,  1006 => 343,  1003 => 342,  1001 => 341,  998 => 340,  989 => 335,  986 => 334,  983 => 333,  980 => 332,  978 => 331,  975 => 330,  966 => 326,  958 => 253,  956 => 323,  954 => 322,  951 => 321,  944 => 315,  939 => 243,  937 => 313,  934 => 241,  927 => 306,  923 => 236,  917 => 303,  915 => 233,  907 => 301,  902 => 300,  899 => 299,  897 => 227,  894 => 226,  885 => 293,  882 => 292,  878 => 219,  876 => 218,  871 => 288,  863 => 286,  860 => 211,  857 => 210,  852 => 283,  850 => 282,  847 => 281,  832 => 274,  829 => 273,  826 => 272,  813 => 268,  810 => 267,  807 => 266,  800 => 263,  797 => 262,  789 => 256,  783 => 177,  780 => 176,  774 => 251,  771 => 250,  765 => 248,  762 => 247,  756 => 165,  754 => 244,  750 => 243,  746 => 161,  730 => 241,  727 => 240,  724 => 154,  721 => 153,  718 => 237,  715 => 151,  712 => 150,  709 => 234,  706 => 233,  704 => 232,  702 => 231,  699 => 142,  690 => 225,  688 => 224,  683 => 135,  680 => 134,  677 => 221,  674 => 220,  672 => 219,  669 => 218,  661 => 212,  658 => 124,  656 => 210,  653 => 209,  645 => 205,  642 => 204,  640 => 119,  637 => 202,  628 => 196,  624 => 195,  620 => 194,  616 => 193,  611 => 192,  608 => 191,  602 => 189,  599 => 188,  597 => 187,  594 => 186,  586 => 181,  583 => 180,  573 => 179,  568 => 178,  565 => 177,  559 => 175,  556 => 174,  554 => 173,  551 => 172,  543 => 167,  540 => 166,  538 => 165,  537 => 164,  536 => 163,  535 => 162,  532 => 161,  529 => 92,  526 => 159,  523 => 158,  516 => 155,  506 => 148,  500 => 145,  496 => 79,  492 => 142,  486 => 140,  484 => 139,  475 => 138,  472 => 137,  466 => 135,  464 => 71,  450 => 64,  448 => 131,  446 => 130,  443 => 129,  432 => 122,  429 => 121,  426 => 58,  420 => 118,  418 => 117,  410 => 115,  408 => 50,  385 => 41,  383 => 110,  377 => 37,  375 => 106,  372 => 105,  367 => 339,  361 => 100,  359 => 99,  353 => 328,  350 => 327,  347 => 95,  339 => 92,  334 => 91,  331 => 90,  328 => 89,  318 => 87,  316 => 16,  308 => 287,  302 => 83,  299 => 8,  296 => 81,  293 => 6,  287 => 76,  274 => 72,  249 => 69,  225 => 46,  222 => 297,  216 => 54,  211 => 53,  205 => 51,  200 => 50,  192 => 48,  184 => 233,  172 => 39,  148 => 28,  34 => 14,  84 => 27,  53 => 15,  197 => 249,  195 => 93,  175 => 89,  170 => 88,  161 => 202,  152 => 78,  77 => 23,  70 => 24,  58 => 18,  265 => 51,  262 => 50,  256 => 24,  223 => 35,  206 => 24,  114 => 111,  100 => 15,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 133,  444 => 149,  440 => 148,  437 => 61,  435 => 123,  430 => 144,  427 => 143,  423 => 57,  413 => 116,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 113,  387 => 122,  384 => 121,  381 => 120,  379 => 108,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 329,  341 => 93,  337 => 22,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 3,  283 => 88,  278 => 408,  268 => 373,  264 => 84,  258 => 354,  252 => 80,  247 => 78,  241 => 50,  229 => 73,  220 => 290,  214 => 69,  177 => 65,  169 => 210,  140 => 55,  132 => 51,  128 => 27,  107 => 16,  61 => 23,  273 => 392,  269 => 94,  254 => 70,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 77,  219 => 45,  217 => 289,  208 => 68,  204 => 41,  179 => 224,  159 => 196,  143 => 56,  135 => 47,  119 => 117,  102 => 32,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  28 => 3,  93 => 38,  88 => 15,  78 => 21,  87 => 32,  46 => 12,  44 => 7,  31 => 8,  38 => 12,  26 => 6,  201 => 40,  196 => 90,  183 => 35,  171 => 216,  166 => 33,  163 => 36,  158 => 67,  156 => 195,  151 => 188,  142 => 26,  138 => 54,  136 => 168,  121 => 131,  117 => 24,  105 => 12,  91 => 35,  62 => 24,  49 => 8,  21 => 2,  25 => 3,  94 => 57,  89 => 30,  85 => 14,  75 => 24,  68 => 14,  56 => 6,  27 => 7,  24 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 7,  40 => 8,  37 => 7,  22 => 2,  246 => 68,  157 => 56,  145 => 33,  139 => 25,  131 => 160,  123 => 26,  120 => 25,  115 => 19,  111 => 110,  108 => 47,  101 => 43,  98 => 34,  96 => 67,  83 => 31,  74 => 20,  66 => 25,  55 => 11,  52 => 4,  50 => 18,  43 => 2,  41 => 2,  35 => 6,  32 => 7,  29 => 4,  209 => 52,  203 => 78,  199 => 265,  193 => 38,  189 => 240,  187 => 47,  182 => 45,  176 => 223,  173 => 65,  168 => 72,  164 => 203,  162 => 57,  154 => 30,  149 => 182,  147 => 58,  144 => 176,  141 => 175,  133 => 23,  130 => 22,  125 => 71,  122 => 43,  116 => 116,  112 => 18,  109 => 17,  106 => 104,  103 => 32,  99 => 68,  95 => 39,  92 => 21,  86 => 34,  82 => 13,  80 => 29,  73 => 7,  64 => 21,  60 => 22,  57 => 20,  54 => 19,  51 => 18,  48 => 16,  45 => 14,  42 => 13,  39 => 19,  36 => 10,  33 => 9,  30 => 5,);
    }
}
