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

/* default/template/account/login.twig */
class __TwigTemplate_9a1382f61139fcdffad304072b1834424721b5477154110afbaca085936112eb extends Template
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
        echo ($context["header"] ?? null);
        echo "
<section class=\"blog-banner-area\" id=\"category\">
\t<div class=\"container h-100\">
\t\t<div class=\"blog-banner\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<h1>Login / Register</h1>
\t\t\t\t<nav aria-label=\"breadcrumb\" class=\"banner-breadcrumb\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Login/Register</li>
\t\t\t\t\t</ol>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<section class=\"login_box_area section-margin\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"login_box_img\">
\t\t\t\t\t<div class=\"hover\">
\t\t\t\t\t\t<h4>Впервые на нашем сайте?</h4>
\t\t\t\t\t\t<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
\t\t\t\t\t\t<a class=\"button button-account\" href=\"";
        // line 25
        echo ($context["register"] ?? null);
        echo "\">Создайте аккаунт</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"login_form_inner\">
\t\t\t\t\t<h3>Войдите в свой аккаунт</h3>
\t\t\t\t\t";
        // line 32
        if (($context["success"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t";
        if (($context["error_warning"] ?? null)) {
            // line 36
            echo "\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t<form class=\"row login_form\" action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-email\">";
        // line 40
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 41
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-password\">";
        // line 44
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 45
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
\t\t\t\t\t\t<a href=\"";
        // line 46
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 47
        echo ($context["button_login"] ?? null);
        echo "\" class=\"button button-register w-100\" />
\t\t\t\t\t\t";
        // line 48
        if (($context["redirect"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div> 
\t\t</div>
\t</div>
</section>
";
        // line 57
        echo ($context["footer"] ?? null);
        echo "
<div class=\"login_form_inner register_form_inner\">
          <h3>Зарегистрироваться</h3>
          <form class=\"row login_form\" onsubmit=\"sendForm(this); return false;\">
            <div class=\"col-md-12 form-group\">
              <input type=\"text\" class=\"form-control\" required=\"\" name=\"name\" placeholder=\"Ваше имя\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Ваше имя'\">
            </div>
            <div class=\"col-md-12 form-group\">
              <input type=\"text\" class=\"form-control\" required=\"\" name=\"lastname\" placeholder=\"Ваша фамилия\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Ваша фамилия'\">
            </div>
            <div class=\"col-md-12 form-group\">
              <input type=\"email\" class=\"form-control\" required=\"\" name=\"email\" placeholder=\"Email адрес\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Email адрес'\">
            </div>
            <div class=\"col-md-12 form-group\">
              <input type=\"password\" class=\"form-control\" required=\"\" name=\"pass\" placeholder=\"Придумайте пароль\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Придумайте пароль'\">
            </div>
            <div class=\"col-md-12 form-group\">
              <div class=\"creat_account\">
                <input type=\"checkbox\" id=\"f-option2\" required=\"\">
                <label for=\"f-option2\">Согласие на обработку персональных данных</label>
              </div>
            </div>
\t\t\t\t\t\t<p id=\"info\" style=\"color: red\"></p>
            <div class=\"col-md-12 form-group\">
              <button type=\"submit\" class=\"button button-register w-100\">Зарегистрироваться</button>
            </div>
          </form>
        </div>
";
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 57,  137 => 51,  131 => 49,  129 => 48,  125 => 47,  119 => 46,  113 => 45,  109 => 44,  101 => 41,  97 => 40,  91 => 38,  85 => 36,  82 => 35,  76 => 33,  74 => 32,  64 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}
