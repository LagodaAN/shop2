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

/* default/template/account/register.twig */
class __TwigTemplate_0d85ceae51bd5722371bb9d1eb46208c4dda64c9217e2e0d02e2c3c3c3d6e836 extends Template
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
\t\t\t\t<h1>Регистрация</h1>
\t\t\t\t<nav aria-label=\"breadcrumb\" class=\"banner-breadcrumb\">
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"/\">Главная</a></li>
\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Регистрация</li>
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
\t\t\t\t\t\t<h4>Вы уже имеете зарегистрированный аккаунт?</h4>
\t\t\t\t\t\t<p>Получите все преимущества премиум аккаунта. Перейдите на страницу авторизции.</p>
\t\t\t\t\t\t<a class=\"button button-account\" href=\"/login\">Войти</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"login_form_inner register_form_inner\">
\t\t\t\t\t<h3>Зарегистрироваться</h3>
\t\t\t\t\t";
        // line 32
        if (($context["error_warning"] ?? null)) {
            // line 33
            echo "\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<form class=\"row login_form\" onsubmit=\"sendForm(this); return false;\">
\t\t\t\t\t\t<div class=\"col-md-12 col-md-12 form-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" required=\"\" name=\"name\" placeholder=\"Ваше имя\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Ваше имя'\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 col-md-12 form-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" required=\"\" name=\"lastname\" placeholder=\"Ваша фамилия\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Ваша фамилия'\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 col-md-12 form-group\">
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" required=\"\" name=\"email\" placeholder=\"Email адрес\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Email адрес'\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 col-md-12 form-group\">
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" required=\"\" name=\"pass\" placeholder=\"Придумайте пароль\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Придумайте пароль'\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12 col-md-12 form-group\">
\t\t\t\t\t\t\t<div class=\"creat_account\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"f-option2\" required=\"\">
\t\t\t\t\t\t\t\t<label for=\"f-option2\">Согласие на обработку персональных данных</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p id=\"info\" style=\"color: red\"></p>
\t\t\t\t\t\t<div class=\"col-md-12 col-md-12 form-group\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"button button-register w-100\">Зарегистрироваться</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t<form action=\"";
        // line 59
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"row login_form\">
\t\t\t\t\t\t<fieldset id=\"account\">
\t\t\t\t\t\t\t<legend>";
        // line 61
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group required\" style=\"display: ";
        // line 62
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["customer_groups"] ?? null)), 1))) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 63
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 65
            echo "\t\t\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 65), ($context["customer_group_id"] ?? null)))) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 68
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 68);
                echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 69);
                echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 74);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 75);
                echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 81
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 83
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t";
        // line 84
        if (($context["error_firstname"] ?? null)) {
            // line 85
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 86
        echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 89
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 91
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t";
        // line 92
        if (($context["error_lastname"] ?? null)) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 94
        echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 97
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 99
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t";
        // line 100
        if (($context["error_email"] ?? null)) {
            // line 101
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 102
        echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 105
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 107
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t";
        // line 108
        if (($context["error_telephone"] ?? null)) {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 110
        echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 113
            echo "\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 113), "select"))) {
                // line 114
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 114);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 115
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 115);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"custom_field[";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 117);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 118
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 124
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 124));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (((($__internal_compile_0 = (($__internal_compile_1 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 125)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 125), (($__internal_compile_2 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null))))) {
                        // line 126
                        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        // line 130
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 130);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 130);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        // line 142
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 142);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 142);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t";
                // line 156
                if ((($__internal_compile_3 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156)] ?? null) : null)) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_4 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 158
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 161), "radio"))) {
                // line 162
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 162);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 163
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div> ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 165));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">";
                    if (((($__internal_compile_5 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 166), (($__internal_compile_6 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166)] ?? null) : null))))) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 168
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 168);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 168);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 169);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 171
                        echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 172
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 172);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 172);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 173
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 173);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 174
                    echo " </div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "</div>
\t\t\t\t\t\t\t\t\t";
                // line 176
                if ((($__internal_compile_7 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176)] ?? null) : null)) {
                    // line 177
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_8 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 178
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 181
            echo "\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 181), "checkbox"))) {
                // line 182
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 182);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 183);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div> ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 185));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 186
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">";
                    if (((($__internal_compile_9 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 186), (($__internal_compile_10 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186)] ?? null) : null)))) {
                        // line 187
                        echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 188
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 188);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 188);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 189
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 189);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 191
                        echo "\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 192);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 192);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 193
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 193);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 194
                    echo " </div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                echo " </div>
\t\t\t\t\t\t\t\t\t";
                // line 196
                if ((($__internal_compile_11 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) {
                    // line 197
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_12 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 198
                echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 201), "text"))) {
                // line 202
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 202);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 203
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 203);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 205);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                echo "]\" value=\"";
                if ((($__internal_compile_13 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205)] ?? null) : null)) {
                    echo (($__internal_compile_14 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 205);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 205);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t";
                // line 206
                if ((($__internal_compile_15 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 206)] ?? null) : null)) {
                    // line 207
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_16 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 208
                echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 211
            echo "\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 211), "textarea"))) {
                // line 212
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 212);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 213
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 213);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 213);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 215);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 215);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215);
                echo "\" class=\"form-control\">";
                if ((($__internal_compile_17 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215)] ?? null) : null)) {
                    echo (($__internal_compile_18 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 215);
                }
                echo "</textarea>
\t\t\t\t\t\t\t\t\t";
                // line 216
                if ((($__internal_compile_19 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216)] ?? null) : null)) {
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_20 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 218
                echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 221
            echo "\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 221), "file"))) {
                // line 222
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 222);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 223);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-custom-field";
                // line 225
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 226);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226);
                echo "]\" value=\"";
                if ((($__internal_compile_21 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_compile_22 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 226)] ?? null) : null);
                    echo " ";
                }
                echo "\" />
\t\t\t\t\t\t\t\t\t";
                // line 227
                if ((($__internal_compile_23 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227)] ?? null) : null)) {
                    // line 228
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_24 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 229
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 232
            echo "\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 232), "date"))) {
                // line 233
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 233);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 233);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 234
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 234);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 237
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 237);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                echo "]\" value=\"";
                if ((($__internal_compile_25 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null)) {
                    echo (($__internal_compile_26 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 237);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 237);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t\t\t";
                // line 241
                if ((($__internal_compile_27 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 241)] ?? null) : null)) {
                    // line 242
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_28 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 242)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 243
                echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 246
            echo "\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 246), "time"))) {
                // line 247
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 247);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 248);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 251
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 251);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                echo "]\" value=\"";
                if ((($__internal_compile_29 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251)] ?? null) : null)) {
                    echo (($__internal_compile_30 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 251);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 251);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t\t\t";
                // line 255
                if ((($__internal_compile_31 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 255)] ?? null) : null)) {
                    // line 256
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_32 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 257
                echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 260
            echo "\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 260), "datetime"))) {
                // line 261
                echo "\t\t\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 261);
                echo "\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 262
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 262);
                echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 265);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                echo "]\" value=\"";
                if ((($__internal_compile_33 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265)] ?? null) : null)) {
                    echo (($__internal_compile_34 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 265);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 265);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t\t\t";
                // line 269
                if ((($__internal_compile_35 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 269)] ?? null) : null)) {
                    // line 270
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_36 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 271
                echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 274
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend>";
        // line 277
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 279
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 281
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t";
        // line 282
        if (($context["error_password"] ?? null)) {
            // line 283
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 284
        echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 287
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 289
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t";
        // line 290
        if (($context["error_confirm"] ?? null)) {
            // line 291
            echo "\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 292
        echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<legend>";
        // line 296
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
\t\t\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 298
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"> ";
        // line 299
        if (($context["newsletter"] ?? null)) {
            // line 300
            echo "\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 302
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"0\" />
\t\t\t\t\t\t\t\t\t";
            // line 305
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 307
            echo "\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"1\" />
\t\t\t\t\t\t\t\t\t";
            // line 309
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 312
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 313
        echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t";
        // line 316
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 317
        if (($context["text_agree"] ?? null)) {
            // line 318
            echo "\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t<div class=\"pull-right\">";
            // line 319
            echo ($context["text_agree"] ?? null);
            echo "
\t\t\t\t\t\t\t\t";
            // line 320
            if (($context["agree"] ?? null)) {
                // line 321
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t";
            } else {
                // line 323
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t\t\t\t\t\t";
            }
            // line 325
            echo "\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 326
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"button button-register w-100\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 330
            echo "\t\t\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 332
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"button button-register w-100\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t";
        }
        // line 336
        echo "\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div> 
\t\t</div>
\t</div>
</section>
<div id=\"account-register\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 345
            echo "\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 345);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 345);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 347
        echo "\t</ul>
\t";
        // line 348
        if (($context["error_warning"] ?? null)) {
            // line 349
            echo "\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
\t";
        }
        // line 351
        echo "\t<div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 352
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 353
            echo "\t\t";
            $context["class"] = "col-sm-6";
            // line 354
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 355
            echo "\t\t";
            $context["class"] = "col-sm-9";
            // line 356
            echo "\t\t";
        } else {
            // line 357
            echo "\t\t";
            $context["class"] = "col-sm-12";
            // line 358
            echo "\t\t";
        }
        // line 359
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<h1>";
        // line 360
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<p>";
        // line 361
        echo ($context["text_account_already"] ?? null);
        echo "</p>
\t\t\t<form action=\"";
        // line 362
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
\t\t\t\t<fieldset id=\"account\">
\t\t\t\t\t<legend>";
        // line 364
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
\t\t\t\t\t<div class=\"col-md-12 form-group required\" style=\"display: ";
        // line 365
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["customer_groups"] ?? null)), 1))) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 366
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 368
            echo "\t\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 368), ($context["customer_group_id"] ?? null)))) {
                // line 369
                echo "\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 371
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 371);
                echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t";
                // line 372
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 372);
                echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 375
                echo "\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 377
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 377);
                echo "\" />
\t\t\t\t\t\t\t\t";
                // line 378
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 378);
                echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 381
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 384
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 386
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 387
        if (($context["error_firstname"] ?? null)) {
            // line 388
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 389
        echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 392
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 394
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 395
        if (($context["error_lastname"] ?? null)) {
            // line 396
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 397
        echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 400
        echo ($context["entry_email"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 402
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 403
        if (($context["error_email"] ?? null)) {
            // line 404
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 405
        echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 408
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 410
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 411
        if (($context["error_telephone"] ?? null)) {
            // line 412
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 413
        echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 415
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 416
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 416), "select"))) {
                // line 417
                echo "\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 417);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 417);
                echo "\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 418
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 418);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 418);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"custom_field[";
                // line 420
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 420);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 420);
                echo "]\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 420);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 421
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 427
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 427));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 428
                    echo "\t\t\t\t\t\t\t\t";
                    if (((($__internal_compile_37 = (($__internal_compile_38 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38[twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 428)] ?? null) : null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428)] ?? null) : null) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 428), (($__internal_compile_39 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 428)] ?? null) : null))))) {
                        // line 429
                        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option value=\"";
                        // line 433
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 433);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 433);
                        echo "</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 440
                        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<option value=\"";
                        // line 445
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 445);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 445);
                        echo "</option>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    }
                    // line 452
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 453
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
                // line 459
                if ((($__internal_compile_40 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 459)] ?? null) : null)) {
                    // line 460
                    echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_41 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 460)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 461
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 464
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 464), "radio"))) {
                // line 465
                echo "\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 465);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 465);
                echo "\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 466
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 466);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div> ";
                // line 468
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 468));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 469
                    echo "\t\t\t\t\t\t\t\t<div class=\"radio\">";
                    if (((($__internal_compile_42 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 469)] ?? null) : null) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 469), (($__internal_compile_43 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 469)] ?? null) : null))))) {
                        // line 470
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 471
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 471);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 471);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 471);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
                        // line 472
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 472);
                        echo "</label>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 474
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                        // line 475
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 475);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 475);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 475);
                        echo "\" />
\t\t\t\t\t\t\t\t\t";
                        // line 476
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 476);
                        echo "</label>
\t\t\t\t\t\t\t\t";
                    }
                    // line 477
                    echo " </div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 478
                echo "</div>
\t\t\t\t\t\t\t";
                // line 479
                if ((($__internal_compile_44 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 479)] ?? null) : null)) {
                    // line 480
                    echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_45 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 480)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 481
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 484
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 484), "checkbox"))) {
                // line 485
                echo "\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 485);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 485);
                echo "\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 486
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 486);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div> ";
                // line 488
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 488));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 489
                    echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">";
                    if (((($__internal_compile_46 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 489)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 489), (($__internal_compile_47 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 489)] ?? null) : null)))) {
                        // line 490
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 491
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 491);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 491);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 491);
                        echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
                        // line 492
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 492);
                        echo "</label>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 494
                        echo "\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                        // line 495
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 495);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 495);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 495);
                        echo "\" />
\t\t\t\t\t\t\t\t\t";
                        // line 496
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 496);
                        echo "</label>
\t\t\t\t\t\t\t\t";
                    }
                    // line 497
                    echo " </div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 498
                echo " </div>
\t\t\t\t\t\t\t";
                // line 499
                if ((($__internal_compile_48 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 499)] ?? null) : null)) {
                    // line 500
                    echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_49 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 500)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 501
                echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 504
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 504), "text"))) {
                // line 505
                echo "\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 505);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 505);
                echo "\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 506
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 506);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 506);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 508
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 508);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 508);
                echo "]\" value=\"";
                if ((($__internal_compile_50 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 508)] ?? null) : null)) {
                    echo (($__internal_compile_51 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 508)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 508);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 508);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 508);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t";
                // line 509
                if ((($__internal_compile_52 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 509)] ?? null) : null)) {
                    // line 510
                    echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_53 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_53) || $__internal_compile_53 instanceof ArrayAccess ? ($__internal_compile_53[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 510)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 511
                echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 514
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 514), "textarea"))) {
                // line 515
                echo "\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 515);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 515);
                echo "\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 516
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 516);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 516);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"custom_field[";
                // line 518
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 518);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 518);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 518);
                echo "\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 518);
                echo "\" class=\"form-control\">";
                if ((($__internal_compile_54 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_54) || $__internal_compile_54 instanceof ArrayAccess ? ($__internal_compile_54[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 518)] ?? null) : null)) {
                    echo (($__internal_compile_55 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_55) || $__internal_compile_55 instanceof ArrayAccess ? ($__internal_compile_55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 518)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 518);
                }
                echo "</textarea>
\t\t\t\t\t\t\t";
                // line 519
                if ((($__internal_compile_56 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_56) || $__internal_compile_56 instanceof ArrayAccess ? ($__internal_compile_56[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 519)] ?? null) : null)) {
                    // line 520
                    echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_57 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_57) || $__internal_compile_57 instanceof ArrayAccess ? ($__internal_compile_57[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 520)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 521
                echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 524
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 524), "file"))) {
                // line 525
                echo "\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 525);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 525);
                echo "\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
                // line 526
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 526);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-custom-field";
                // line 528
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 528);
                echo "\" data-loading-text=\"";
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 529
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 529);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 529);
                echo "]\" value=\"";
                if ((($__internal_compile_58 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_58) || $__internal_compile_58 instanceof ArrayAccess ? ($__internal_compile_58[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 529)] ?? null) : null)) {
                    echo "  ";
                    echo (($__internal_compile_59 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_59) || $__internal_compile_59 instanceof ArrayAccess ? ($__internal_compile_59[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 529)] ?? null) : null);
                    echo " ";
                }
                echo "\" />
\t\t\t\t\t\t\t";
                // line 530
                if ((($__internal_compile_60 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_60) || $__internal_compile_60 instanceof ArrayAccess ? ($__internal_compile_60[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 530)] ?? null) : null)) {
                    // line 531
                    echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_61 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_61) || $__internal_compile_61 instanceof ArrayAccess ? ($__internal_compile_61[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 531)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 532
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 535
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 535), "date"))) {
                // line 536
                echo "\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 536);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 536);
                echo "\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 537
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 537);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 537);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 540
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 540);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 540);
                echo "]\" value=\"";
                if ((($__internal_compile_62 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_62) || $__internal_compile_62 instanceof ArrayAccess ? ($__internal_compile_62[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 540)] ?? null) : null)) {
                    echo (($__internal_compile_63 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_63) || $__internal_compile_63 instanceof ArrayAccess ? ($__internal_compile_63[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 540)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 540);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 540);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 540);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t";
                // line 544
                if ((($__internal_compile_64 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_64) || $__internal_compile_64 instanceof ArrayAccess ? ($__internal_compile_64[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 544)] ?? null) : null)) {
                    // line 545
                    echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_65 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_65) || $__internal_compile_65 instanceof ArrayAccess ? ($__internal_compile_65[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 545)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 546
                echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 549
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 549), "time"))) {
                // line 550
                echo "\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 550);
                echo "\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 551
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 551);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 551);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 554
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 554);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 554);
                echo "]\" value=\"";
                if ((($__internal_compile_66 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_66) || $__internal_compile_66 instanceof ArrayAccess ? ($__internal_compile_66[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 554)] ?? null) : null)) {
                    echo (($__internal_compile_67 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_67) || $__internal_compile_67 instanceof ArrayAccess ? ($__internal_compile_67[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 554)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 554);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 554);
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 554);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t";
                // line 558
                if ((($__internal_compile_68 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_68) || $__internal_compile_68 instanceof ArrayAccess ? ($__internal_compile_68[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 558)] ?? null) : null)) {
                    // line 559
                    echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_69 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_69) || $__internal_compile_69 instanceof ArrayAccess ? ($__internal_compile_69[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 559)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 560
                echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 563
            echo "\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 563), "datetime"))) {
                // line 564
                echo "\t\t\t\t\t<div id=\"custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 564);
                echo "\" class=\"col-md-12 form-group custom-field\" data-sort=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 564);
                echo "\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 565
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 565);
                echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 568
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 568);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568);
                echo "]\" value=\"";
                if ((($__internal_compile_70 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_70) || $__internal_compile_70 instanceof ArrayAccess ? ($__internal_compile_70[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568)] ?? null) : null)) {
                    echo (($__internal_compile_71 = ($context["register_custom_field"] ?? null)) && is_array($__internal_compile_71) || $__internal_compile_71 instanceof ArrayAccess ? ($__internal_compile_71[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568)] ?? null) : null);
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 568);
                }
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 568);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 568);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t";
                // line 572
                if ((($__internal_compile_72 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_72) || $__internal_compile_72 instanceof ArrayAccess ? ($__internal_compile_72[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 572)] ?? null) : null)) {
                    // line 573
                    echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo (($__internal_compile_73 = ($context["error_custom_field"] ?? null)) && is_array($__internal_compile_73) || $__internal_compile_73 instanceof ArrayAccess ? ($__internal_compile_73[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573)] ?? null) : null);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 574
                echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 577
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 578
        echo "\t\t\t\t</fieldset>
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>";
        // line 580
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 582
        echo ($context["entry_password"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 584
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 585
        if (($context["error_password"] ?? null)) {
            // line 586
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 587
        echo " </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12 form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 590
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"password\" name=\"confirm\" value=\"";
        // line 592
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 593
        if (($context["error_confirm"] ?? null)) {
            // line 594
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 595
        echo " </div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>";
        // line 599
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
\t\t\t\t\t<div class=\"col-md-12 form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 601
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\"> ";
        // line 602
        if (($context["newsletter"] ?? null)) {
            // line 603
            echo "\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t";
            // line 605
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"0\" />
\t\t\t\t\t\t\t";
            // line 608
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t";
        } else {
            // line 610
            echo "\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"1\" />
\t\t\t\t\t\t\t";
            // line 612
            echo ($context["text_yes"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t";
            // line 615
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t";
        }
        // line 616
        echo " </div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t";
        // line 619
        echo ($context["captcha"] ?? null);
        echo "
\t\t\t\t";
        // line 620
        if (($context["text_agree"] ?? null)) {
            // line 621
            echo "\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"pull-right\">";
            // line 622
            echo ($context["text_agree"] ?? null);
            echo "
\t\t\t\t\t\t";
            // line 623
            if (($context["agree"] ?? null)) {
                // line 624
                echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t";
            } else {
                // line 626
                echo "\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t\t\t\t";
            }
            // line 628
            echo "\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 629
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 633
            echo "\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 635
            echo ($context["button_continue"] ?? null);
            echo "\" class=\"btn btn-primary\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 639
        echo "\t\t\t</form>
\t\t";
        // line 640
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t";
        // line 641
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\t// Sort the custom fields
\t\$('#account .col-md-12 form-group[data-sort]').detach().each(function() {
\t\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .col-md-12 form-group').length) {
\t\t\t\$('#account .col-md-12 form-group').eq(\$(this).attr('data-sort')).before(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') > \$('#account .col-md-12 form-group').length) {
\t\t\t\$('#account .col-md-12 form-group:last').after(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') == \$('#account .col-md-12 form-group').length) {
\t\t\t\$('#account .col-md-12 form-group:last').after(this);
\t\t}
\t\t
\t\tif (\$(this).attr('data-sort') < -\$('#account .col-md-12 form-group').length) {
\t\t\t\$('#account .col-md-12 form-group:first').before(this);
\t\t}
\t});
\t
\t\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.custom-field').hide();
\t\t\t\t\$('.custom-field').removeClass('required');
\t\t\t\t
\t\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\t\tcustom_field = json[i];
\t\t\t\t\t
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();
\t\t\t\t\t
\t\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
\t
\t\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\t\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\t\tvar element = this;
\t\t
\t\t\$('#form-upload').remove();
\t\t
\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
\t\t
\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');
\t\t
\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}
\t\t
\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);
\t\t\t\t
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$(element).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$(element).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$(element).parent().find('.text-danger').remove();
\t\t\t\t\t\t
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});
//--></script> 
<script type=\"text/javascript\"><!--
\t\$('.date').datetimepicker({
\t\tlanguage: '";
        // line 744
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickTime: false
\t});
\t
\t\$('.time').datetimepicker({
\t\tlanguage: '";
        // line 749
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: false
\t});
\t
\t\$('.datetime').datetimepicker({
\t\tlanguage: '";
        // line 754
        echo ($context["datepicker"] ?? null);
        echo "',
\t\tpickDate: true,
\t\tpickTime: true
\t});
//--></script> 
";
        // line 759
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2054 => 759,  2046 => 754,  2038 => 749,  2030 => 744,  1924 => 641,  1920 => 640,  1917 => 639,  1910 => 635,  1906 => 633,  1899 => 629,  1896 => 628,  1892 => 626,  1888 => 624,  1886 => 623,  1882 => 622,  1879 => 621,  1877 => 620,  1873 => 619,  1868 => 616,  1863 => 615,  1857 => 612,  1853 => 610,  1848 => 608,  1842 => 605,  1838 => 603,  1836 => 602,  1832 => 601,  1827 => 599,  1821 => 595,  1815 => 594,  1813 => 593,  1807 => 592,  1802 => 590,  1797 => 587,  1791 => 586,  1789 => 585,  1783 => 584,  1778 => 582,  1773 => 580,  1769 => 578,  1763 => 577,  1758 => 574,  1752 => 573,  1750 => 572,  1731 => 568,  1723 => 565,  1716 => 564,  1713 => 563,  1708 => 560,  1702 => 559,  1700 => 558,  1681 => 554,  1673 => 551,  1666 => 550,  1663 => 549,  1658 => 546,  1652 => 545,  1650 => 544,  1631 => 540,  1623 => 537,  1616 => 536,  1613 => 535,  1608 => 532,  1602 => 531,  1600 => 530,  1588 => 529,  1580 => 528,  1575 => 526,  1568 => 525,  1565 => 524,  1560 => 521,  1554 => 520,  1552 => 519,  1536 => 518,  1529 => 516,  1522 => 515,  1519 => 514,  1514 => 511,  1508 => 510,  1506 => 509,  1490 => 508,  1483 => 506,  1476 => 505,  1473 => 504,  1468 => 501,  1462 => 500,  1460 => 499,  1457 => 498,  1450 => 497,  1445 => 496,  1437 => 495,  1434 => 494,  1429 => 492,  1421 => 491,  1418 => 490,  1415 => 489,  1411 => 488,  1406 => 486,  1399 => 485,  1396 => 484,  1391 => 481,  1385 => 480,  1383 => 479,  1380 => 478,  1373 => 477,  1368 => 476,  1360 => 475,  1357 => 474,  1352 => 472,  1344 => 471,  1341 => 470,  1338 => 469,  1334 => 468,  1329 => 466,  1322 => 465,  1319 => 464,  1314 => 461,  1308 => 460,  1306 => 459,  1298 => 453,  1292 => 452,  1280 => 445,  1273 => 440,  1261 => 433,  1255 => 429,  1252 => 428,  1248 => 427,  1239 => 421,  1231 => 420,  1224 => 418,  1217 => 417,  1214 => 416,  1210 => 415,  1206 => 413,  1200 => 412,  1198 => 411,  1192 => 410,  1187 => 408,  1182 => 405,  1176 => 404,  1174 => 403,  1168 => 402,  1163 => 400,  1158 => 397,  1152 => 396,  1150 => 395,  1144 => 394,  1139 => 392,  1134 => 389,  1128 => 388,  1126 => 387,  1120 => 386,  1115 => 384,  1105 => 381,  1099 => 378,  1095 => 377,  1091 => 375,  1085 => 372,  1081 => 371,  1077 => 369,  1074 => 368,  1070 => 367,  1066 => 366,  1058 => 365,  1054 => 364,  1049 => 362,  1045 => 361,  1041 => 360,  1034 => 359,  1031 => 358,  1028 => 357,  1025 => 356,  1022 => 355,  1019 => 354,  1016 => 353,  1014 => 352,  1009 => 351,  1003 => 349,  1001 => 348,  998 => 347,  987 => 345,  983 => 344,  973 => 336,  966 => 332,  962 => 330,  955 => 326,  952 => 325,  948 => 323,  944 => 321,  942 => 320,  938 => 319,  935 => 318,  933 => 317,  929 => 316,  924 => 313,  919 => 312,  913 => 309,  909 => 307,  904 => 305,  898 => 302,  894 => 300,  892 => 299,  888 => 298,  883 => 296,  877 => 292,  871 => 291,  869 => 290,  863 => 289,  858 => 287,  853 => 284,  847 => 283,  845 => 282,  839 => 281,  834 => 279,  829 => 277,  825 => 275,  819 => 274,  814 => 271,  808 => 270,  806 => 269,  787 => 265,  779 => 262,  772 => 261,  769 => 260,  764 => 257,  758 => 256,  756 => 255,  737 => 251,  729 => 248,  722 => 247,  719 => 246,  714 => 243,  708 => 242,  706 => 241,  687 => 237,  679 => 234,  672 => 233,  669 => 232,  664 => 229,  658 => 228,  656 => 227,  644 => 226,  636 => 225,  631 => 223,  624 => 222,  621 => 221,  616 => 218,  610 => 217,  608 => 216,  592 => 215,  585 => 213,  578 => 212,  575 => 211,  570 => 208,  564 => 207,  562 => 206,  546 => 205,  539 => 203,  532 => 202,  529 => 201,  524 => 198,  518 => 197,  516 => 196,  513 => 195,  506 => 194,  501 => 193,  493 => 192,  490 => 191,  485 => 189,  477 => 188,  474 => 187,  471 => 186,  467 => 185,  462 => 183,  455 => 182,  452 => 181,  447 => 178,  441 => 177,  439 => 176,  436 => 175,  429 => 174,  424 => 173,  416 => 172,  413 => 171,  408 => 169,  400 => 168,  397 => 167,  394 => 166,  390 => 165,  385 => 163,  378 => 162,  375 => 161,  370 => 158,  364 => 157,  362 => 156,  354 => 150,  348 => 149,  336 => 142,  329 => 137,  317 => 130,  311 => 126,  308 => 125,  304 => 124,  295 => 118,  287 => 117,  280 => 115,  273 => 114,  270 => 113,  266 => 112,  262 => 110,  256 => 109,  254 => 108,  248 => 107,  243 => 105,  238 => 102,  232 => 101,  230 => 100,  224 => 99,  219 => 97,  214 => 94,  208 => 93,  206 => 92,  200 => 91,  195 => 89,  190 => 86,  184 => 85,  182 => 84,  176 => 83,  171 => 81,  161 => 78,  155 => 75,  151 => 74,  147 => 72,  141 => 69,  137 => 68,  133 => 66,  130 => 65,  126 => 64,  122 => 63,  114 => 62,  110 => 61,  105 => 59,  79 => 35,  73 => 33,  71 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/register.twig", "");
    }
}
