<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/common/header.twig */
class __TwigTemplate_3cb7801d5782a3b4ccc0318029219d35e6d67acf2fecd2f5704541e245dda585 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
\t\t<title>";
        // line 8
        echo ($context["title"] ?? null);
        echo "</title>
\t\t<base href=\"";
        // line 9
        echo ($context["base"] ?? null);
        echo "\" />
\t\t";
        // line 10
        if (($context["description"] ?? null)) {
            // line 11
            echo "\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
\t\t";
        }
        // line 13
        echo "\t\t";
        if (($context["keywords"] ?? null)) {
            // line 14
            echo "\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
\t\t";
        }
        // line 16
        echo "\t\t<script src=\"catalog/view/javascript/jquery/jquery-3.7.0.min.js\" type=\"text/javascript\"></script>
\t\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
\t\t<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 23
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 23);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 23);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 23);
            echo "\" />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 26
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 30
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 30);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 30);
            echo "\" />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t<link rel=\"icon\" href=\"img/Fevicon.png\" type=\"image/png\">
\t\t<link rel=\"stylesheet\" href=\"vendors/bootstrap/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"vendors/fontawesome/css/all.min.css\">
\t\t<link rel=\"stylesheet\" href=\"vendors/themify-icons/themify-icons.css\">
\t\t<link rel=\"stylesheet\" href=\"vendors/nice-select/nice-select.css\">
\t\t<link rel=\"stylesheet\" href=\"vendors/owl-carousel/owl.theme.default.min.css\">
\t\t<link rel=\"stylesheet\" href=\"vendors/owl-carousel/owl.carousel.min.css\">
\t\t
\t\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t</head>
\t
\t<body>
\t\t<!--================ Start Header Menu Area =================-->
\t\t<header class=\"header_area\">
\t\t\t<div class=\"main_menu\">
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<a class=\"navbar-brand logo_h\" href=\"/\">
\t\t\t\t\t\t\t";
        // line 50
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 51
            echo "\t\t\t\t\t\t\t<h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t\t<ul class=\"nav navbar-nav menu_nav ml-auto mr-auto\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item active\"><a class=\"nav-link\" href=\"/\">Главная</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Магазин</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Shop Category</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/single-product\">Product Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/checkout\">Product Checkout</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/confirmation\">Confirmation</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/cart\">Shopping Cart</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Блог</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/blog\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/single-blog\">Blog Details</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item submenu dropdown\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Пользователю</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 82
        if (($context["logged"] ?? null)) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 87
            echo ($context["login"] ?? null);
            echo "\">Войти</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 90
        echo ($context["register"] ?? null);
        echo "\">Зарегестрироваться</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 91
        echo ($context["tracking"] ?? null);
        echo "\">";
        echo ($context["text_tracking"] ?? null);
        echo "</a></li>\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 93
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 94
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 95
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 98
        echo ($context["contact"] ?? null);
        echo "\">Контакты</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"nav-shop\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<!-- ";
        // line 103
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 104
        echo ($context["cart"] ?? null);
        echo " -->
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><button><i class=\"ti-search\"></i></button></li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=checkout/cart\">
\t\t\t\t\t\t\t\t\t\t\t<button><i class=\"ti-shopping-cart\"></i><span id=\"cart-total\" class=\"nav-shop__circle\">";
        // line 108
        echo ($context["cart"] ?? null);
        echo "</span></button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li> 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 112
        if (($context["logged"] ?? null)) {
            // line 113
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"button button-header\" href=\"";
            // line 114
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 116
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"button button-header\" href=\"";
            // line 117
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</header>\t\t\t";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 119,  295 => 117,  292 => 116,  285 => 114,  282 => 113,  280 => 112,  273 => 108,  266 => 104,  262 => 103,  254 => 98,  244 => 95,  236 => 94,  228 => 93,  221 => 91,  217 => 90,  214 => 89,  209 => 87,  206 => 86,  201 => 83,  199 => 82,  168 => 53,  160 => 51,  148 => 50,  128 => 32,  117 => 30,  113 => 29,  110 => 28,  101 => 26,  96 => 25,  83 => 23,  79 => 22,  71 => 16,  65 => 14,  62 => 13,  56 => 11,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
