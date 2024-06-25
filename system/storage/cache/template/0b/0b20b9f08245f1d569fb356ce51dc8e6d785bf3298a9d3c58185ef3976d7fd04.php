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
class __TwigTemplate_0964ac3c17b8a3cef4061eb68c9147d05c82a5f838d5f1b5e74571ba2c559d22 extends Template
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

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>";
        // line 8
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 9
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 10
        if (($context["description"] ?? null)) {
            // line 11
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 13
        if (($context["keywords"] ?? null)) {
            // line 14
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 16
        echo "<script src=\"catalog/view/javascript/jquery/jquery-3.7.0.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 23
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 23);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 23);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 23);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 26
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 30
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 30);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 30);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  <link rel=\"icon\" href=\"img/Fevicon.png\" type=\"image/png\">
  <link rel=\"stylesheet\" href=\"vendors/bootstrap/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"vendors/fontawesome/css/all.min.css\">
  <link rel=\"stylesheet\" href=\"vendors/themify-icons/themify-icons.css\">
  <link rel=\"stylesheet\" href=\"vendors/nice-select/nice-select.css\">
  <link rel=\"stylesheet\" href=\"vendors/owl-carousel/owl.theme.default.min.css\">
  <link rel=\"stylesheet\" href=\"vendors/owl-carousel/owl.carousel.min.css\">

  <link rel=\"stylesheet\" href=\"css/style.css\">
</head>

<body>
  <!--================ Start Header Menu Area =================-->
  <header class=\"header_area\">
    <div class=\"main_menu\">
      <nav class=\"navbar navbar-expand-lg navbar-light\">
        <div class=\"container\">
          <a class=\"navbar-brand logo_h\" href=\"/\">
\t\t   ";
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
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 53
        echo "      
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
            <ul class=\"nav navbar-nav menu_nav ml-auto mr-auto\">
              <li class=\"nav-item active\"><a class=\"nav-link\" href=\"/\">Главная</a></li>
              <li class=\"nav-item submenu dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Магазин</a>
                <ul class=\"dropdown-menu\">
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Shop Category</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"/single-product\">Product Details</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"/checkout\">Product Checkout</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"/confirmation\">Confirmation</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"/cart\">Shopping Cart</a></li>
                </ul>
              </li>
              <li class=\"nav-item submenu dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Блог</a>
                <ul class=\"dropdown-menu\">
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"/blog\">Blog</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"/single-blog\">Blog Details</a></li>
                </ul>
              </li>
              <li class=\"nav-item submenu dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Пользователю</a>
                <ul class=\"dropdown-menu\">
\t\t\t\t ";
        // line 82
        if (($context["logged"] ?? null)) {
            // line 83
            echo "           
\t\t   
            ";
        } else {
            // line 86
            echo "            
\t\t\t <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 87
            echo ($context["login"] ?? null);
            echo "\">Войти</a></li>
            ";
        }
        // line 89
        echo "                 
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 90
        echo ($context["register"] ?? null);
        echo "\">Зарегестрироваться</a></li>
                  <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 91
        echo ($context["tracking"] ?? null);
        echo "\">";
        echo ($context["text_tracking"] ?? null);
        echo "</a></li>\t\t\t\t
       
        <li><a href=\"";
        // line 93
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 94
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 95
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
                </ul>
              </li>
              <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 98
        echo ($context["contact"] ?? null);
        echo "\">Контакты</a></li>
            </ul>

            <ul class=\"nav-shop\">
\t\t\t
\t\t\t<!-- ";
        // line 103
        echo ($context["search"] ?? null);
        echo "
      ";
        // line 104
        echo ($context["cart"] ?? null);
        echo " -->
              <li class=\"nav-item\"><button><i class=\"ti-search\"></i></button></li>
              <li class=\"nav-item\"><button><i class=\"ti-shopping-cart\"></i><span id=\"cart-total\" class=\"nav-shop__circle\">3</span></button> </li>
\t\t\t 
\t\t\t   ";
        // line 108
        if (($context["logged"] ?? null)) {
            // line 109
            echo "           
\t\t\t<li class=\"nav-item\"><a class=\"button button-header\" href=\"";
            // line 110
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
            ";
        } else {
            // line 112
            echo "            
\t\t\t<li class=\"nav-item\"><a class=\"button button-header\" href=\"";
            // line 113
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
            ";
        }
        // line 115
        echo "              
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>";
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
        return array (  293 => 115,  286 => 113,  283 => 112,  276 => 110,  273 => 109,  271 => 108,  264 => 104,  260 => 103,  252 => 98,  242 => 95,  234 => 94,  226 => 93,  219 => 91,  215 => 90,  212 => 89,  207 => 87,  204 => 86,  199 => 83,  197 => 82,  166 => 53,  158 => 51,  146 => 50,  126 => 32,  115 => 30,  111 => 29,  108 => 28,  99 => 26,  95 => 25,  82 => 23,  78 => 22,  70 => 16,  64 => 14,  62 => 13,  56 => 11,  54 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
