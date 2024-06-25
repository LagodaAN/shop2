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

/* default/template/common/newsletter_template.twig */
class __TwigTemplate_119972fc488d237acf0825f254063eae0b3706038009902cceb43e00d0abf812 extends Template
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
        echo "<div id=\"overlay-page\"></div>

<div id=\"flex\">

  <div class=\"window\">
    <div class=\"left-side\">
      <h1>";
        // line 7
        echo ($context["newsletter_h1"] ?? null);
        echo "</h1>
      <p>";
        // line 8
        echo ($context["talk"] ?? null);
        echo "</p>
    </div>
    <div class=\"right-side\">
        <p>";
        // line 11
        echo ($context["firstname"] ?? null);
        echo "</p>
        <input type=\"text\" id=\"firstname\" placeholder=\"";
        // line 12
        echo ($context["firstname_input"] ?? null);
        echo "\" autoComplete=\"off\">
        <p>";
        // line 13
        echo ($context["lastname"] ?? null);
        echo "</p>
        <input type=\"text\" id=\"lastname\" placeholder=\"";
        // line 14
        echo ($context["lastname_input"] ?? null);
        echo "\" autoComplete=\"off\">
        <p>";
        // line 15
        echo ($context["email"] ?? null);
        echo "</p>
        <input type=\"email\" id=\"email\" placeholder=\"";
        // line 16
        echo ($context["email_input"] ?? null);
        echo "\" autoComplete=\"off\">
      <div class=\"result\">
        <button id=\"subscribe\">";
        // line 18
        echo ($context["subscribe"] ?? null);
        echo "</button>
        <div class=\"link\"><a href=\"#\" id=\"no-thanks\">";
        // line 19
        echo ($context["no_thanks"] ?? null);
        echo "</a></div>
      </div>
      <div class=\"thankyou\">
        ";
        // line 22
        echo ($context["thankyou"] ?? null);
        echo "
      </div>
      <div class=\"problem\">
        ";
        // line 25
        echo ($context["problem"] ?? null);
        echo "
      </div>
      <div class=\"allready\">
        ";
        // line 28
        echo ($context["allready"] ?? null);
        echo "
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/newsletter_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  96 => 25,  90 => 22,  84 => 19,  80 => 18,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/newsletter_template.twig", "");
    }
}
