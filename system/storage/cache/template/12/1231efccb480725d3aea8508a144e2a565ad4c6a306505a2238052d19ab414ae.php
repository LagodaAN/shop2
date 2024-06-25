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

/* default/template/common/footer.twig */
class __TwigTemplate_606896d7168658ae809ad92b269650b8ee8cfc3b22ea0ad5356be348fbf7cf6b extends Template
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
        echo " <footer class=\"footer\">
    <div class=\"footer-area\">
      <div class=\"container\">
        <div class=\"row section_gap\">
          <div class=\"col-lg-3 col-md-6 col-sm-6\">
            <div class=\"single-footer-widget tp_widgets\">
              <h4 class=\"footer_title large_title\">Наша миссия</h4>
              <p>
                Тот, кто делает добро другому, делает больше всего добра самому себе, не в том смысле, что ему будет за это награда, а тем, что сознание сделанного добра дает ему большую радость.
Луций Анней Сенека.
              </p>
              <p>
                Я знаю только одно волшебство – Любовь.
Это волшебство, которое связывает все воедино.
Шри Рави Шанкар
              </p>
            </div>
          </div>
          <div class=\"offset-lg-1 col-lg-2 col-md-6 col-sm-6\">
            <div class=\"single-footer-widget tp_widgets\">
              <h4 class=\"footer_title\">Быстрый переход</h4>
              <ul class=\"list\">
                <li><a href=\"#\">Главная</a></li>
                <li><a href=\"#\">Магазин</a></li>
                <li><a href=\"#\">Блог</a></li>
                <li><a href=\"#\">Product</a></li>
                <li><a href=\"#\">Брэнд</a></li>
                <li><a href=\"#\">Контакты</a></li>
              </ul>
            </div> 
          </div>
          <div class=\"col-lg-2 col-md-6 col-sm-6\">
            <div class=\"single-footer-widget instafeed\">
              <h4 class=\"footer_title\">Галерея</h4>
              <ul class=\"list instafeed d-flex flex-wrap\">
                <li><img src=\"/image/cache/catalog/roses/rose1-228x228.png\" alt=\"\"></li>
                <li><img src=\"/img/flowers/craspedia.png\" alt=\"\"></li>
                <li><img src=\"/img/flowers/chamomile.png\" alt=\"\"></li>
                <li><img src=\"/img/flowers/Gypsophila.png\" alt=\"\"></li>
                <li><img src=\"/img/flowers/rose3.png\" alt=\"\"></li>
                <li><img src=\"/image/cache/catalog/rose_white-228x228.png\" alt=\"\"></li>
              </ul>
            </div> 
          </div>
          <div class=\"offset-lg-1 col-lg-3 col-md-6 col-sm-6\">
            <div class=\"single-footer-widget tp_widgets\">
              <h4 class=\"footer_title\">Позвоните нам</h4>
              <div class=\"ml-40\">
                <p class=\"sm-head\">
                  <span class=\"fa fa-location-arrow\"></span>
                  Головной офис
                </p>
                <p>123, Main Street, Your City</p>

                <p class=\"sm-head\">
                  <span class=\"fa fa-phone\"></span>
                  Телефон
                </p>
                <p>
                  +123 456 7890 <br>
                  +123 456 7890
                </p>

                <p class=\"sm-head\">
                  <span class=\"fa fa-envelope\"></span>
                  Email
                </p>
                <p>
                  free@infoexample.com <br>
                  www.infoexample.com
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"footer-bottom\">
      <div class=\"container\">
        <div class=\"row d-flex\">        
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area  =================-->

  <script src=\"vendors/jquery/jquery-3.2.1.min.js\"></script>
  <script src=\"vendors/bootstrap/bootstrap.bundle.min.js\"></script>
  <script src=\"vendors/skrollr.min.js\"></script>
  <script src=\"vendors/owl-carousel/owl.carousel.min.js\"></script>
  <script src=\"vendors/nice-select/jquery.nice-select.min.js\"></script>
  <script src=\"vendors/jquery.ajaxchimp.min.js\"></script>
  <script src=\"vendors/mail-script.js\"></script>
  <script src=\"js/main.js\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
