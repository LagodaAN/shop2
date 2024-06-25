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
class __TwigTemplate_1946976929d2929b9a7652a00327507e26601efce041e1cc143607858a4c6e0e extends Template
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
\t\t<div class=\"container h-100\">
\t\t\t<div class=\"blog-banner\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<h1>Login / Register</h1>
\t\t\t\t\t<nav aria-label=\"breadcrumb\" class=\"banner-breadcrumb\">
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Login/Register</li>
\t\t\t\t\t\t</ol>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section class=\"login_box_area section-margin\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"login_box_img\">
\t\t\t\t\t\t<div class=\"hover\">
\t\t\t\t\t\t\t<h4>New to our website?</h4>
\t\t\t\t\t\t\t<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
\t\t\t\t\t\t\t<a class=\"button button-account\" href=\"register.html\">Create an Account</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"login_form_inner\">
\t\t\t\t\t\t<h3>Log in to enter</h3>
\t\t\t\t\t\t<form class=\"row login_form\" action=\"#/\" id=\"contactForm\">
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Username\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Username'\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Password\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Password'\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<div class=\"creat_account\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"f-option2\" name=\"selector\">
\t\t\t\t\t\t\t\t\t<label for=\"f-option2\">Keep me logged in</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"submit\" class=\"button button-login w-100\">Log In</button>
\t\t\t\t\t\t\t\t<a href=\"#\">Forgot Password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
<div id=\"account-login\" class=\"container\">
  
  ";
        // line 57
        if (($context["success"] ?? null)) {
            // line 58
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 60
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 61
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 63
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 64
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 65
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 66
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 67
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 70
            echo "    ";
        }
        // line 71
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 75
        echo ($context["text_new_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 76
        echo ($context["text_register"] ?? null);
        echo "</strong></p>
            <p>";
        // line 77
        echo ($context["text_register_account"] ?? null);
        echo "</p>
            <a href=\"";
        // line 78
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 82
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 83
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 84
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 86
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 87
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 90
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 91
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 92
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              <input type=\"submit\" value=\"";
        // line 93
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 94
        if (($context["redirect"] ?? null)) {
            // line 95
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 97
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 101
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 102
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 104
        echo ($context["footer"] ?? null);
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
        return array (  237 => 104,  232 => 102,  228 => 101,  222 => 97,  216 => 95,  214 => 94,  210 => 93,  204 => 92,  198 => 91,  194 => 90,  186 => 87,  182 => 86,  177 => 84,  173 => 83,  169 => 82,  160 => 78,  156 => 77,  152 => 76,  148 => 75,  138 => 71,  135 => 70,  132 => 69,  129 => 68,  126 => 67,  123 => 66,  120 => 65,  118 => 64,  113 => 63,  107 => 61,  104 => 60,  98 => 58,  96 => 57,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}
