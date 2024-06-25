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

/* default/template/common/home.twig */
class __TwigTemplate_a5a4719190076166bbf5e30a24d7ad37bbd1cd428bbde3393fdf2bf0b6f89f7f extends Template
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
<main class=\"site-main\">

    <!--================ Hero banner start =================-->
    <section class=\"hero-banner\">
      <div class=\"container\">
        <div class=\"row no-gutters align-items-center pt-60px\">
          <div class=\"col-5 d-none d-sm-block\">
            <div class=\"hero-banner__img\">
              <img class=\"img-fluid\" src=\"img/home/hero.png\" alt=\"\">
            </div>
          </div>
          <div class=\"col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0\">
            <div class=\"hero-banner__content\">
              <h4>Покупки у нас с удовольствием</h4>
              <h1>Выгода до 80% с премиум подпиской</h1>
              <p>Зарегистрируйтесь сегодня и получите премиум на 7 дней бесплатно!</p>
              <a class=\"button button-hero\" href=\"/register\">Регистрироваться</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->
    <section class=\"section-margin mt-0\">
      <div class=\"owl-carousel owl-theme hero-carousel owl-loaded owl-drag\">
        
        
        
      <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transform: translate3d(-1145px, 0px, 0px); transition: all 0s ease 0s; width: 3436px;\"><div class=\"owl-item\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide1.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"index.php?route=product/category&path=60\" class=\"hero-carousel__slideOverlay\">
            <h3>Розы</h3>
            <p>Букеты</p> 
          </a>
        </div></div><div class=\"owl-item\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide2.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"index.php?route=product/category&path=59\" class=\"hero-carousel__slideOverlay\">
            <h3>Тюльпаны</h3>
            <p>Букеты</p>  
          </a>
        </div></div><div class=\"owl-item\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide3.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"#\" class=\"hero-carousel__slideOverlay\">
            <h3>Ассорти</h3> 
            <p>Букеты</p>    
          </a>
        </div></div> 
\t\t</div></div><div class=\"owl-nav disabled\"><button type=\"button\" role=\"presentation\" class=\"owl-prev\"><span aria-label=\"Previous\">‹</span></button><button type=\"button\" role=\"presentation\" class=\"owl-next\"><span aria-label=\"Next\">›</span></button></div><div class=\"owl-dots disabled\"></div></div>
    </section> 
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->
    <section class=\"section-margin calc-60px\">
      <div class=\"container\">
        <div class=\"section-intro pb-60px\">
          <p>Популярные товары</p>
          <h2>Акционные <span class=\"section-intro__style\">товары</span></h2> 
        </div>
        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4 col-xl-3\">
            <div class=\"card text-center card-product\">
              <div class=\"card-product__img\">
                <img class=\"card-img\" src=\"image/cache/catalog/tulip/tulip-500x500.png\" alt=\"\">
                <ul class=\"card-product__imgOverlay\">              
                  <li><button onclick=\"cart.add('50', '5');\"><i class=\"ti-shopping-cart\"></i></button></li>
\t\t\t\t
                  <li><button onclick=\"wishlist.add('50');\"><i class=\"ti-heart\"></i></button></li>
\t\t\t\t 
                </ul>
              </div>
              <div class=\"card-body\"> 
                <p>Букет</p>
                <h4 class=\"card-product__title\"><a href=\"single-product.html\">Тюльпаны</a></h4>
                <p class=\"card-product__price\">3000 руб.</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 col-xl-3\">
            <div class=\"card text-center card-product\">
              <div class=\"card-product__img\">
                <img class=\"card-img\" src=\"img/product/product2.png\" alt=\"\">
                <ul class=\"card-product__imgOverlay\">
                  <li><button><i class=\"ti-search\"></i></button></li>
                  <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                  <li><button><i class=\"ti-heart\"></i></button></li>
                </ul>
              </div>
              <div class=\"card-body\">
                <p>Букет</p>
                <h4 class=\"card-product__title\"><a href=\"single-product.html\">Розы красные</a></h4>
                <p class=\"card-product__price\">2500 руб.</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 col-xl-3\">
            <div class=\"card text-center card-product\">
              <div class=\"card-product__img\">
                <img class=\"card-img\" src=\"img/product/product3.png\" alt=\"\">
                <ul class=\"card-product__imgOverlay\">
                  <li><button><i class=\"ti-search\"></i></button></li>
                  <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                  <li><button><i class=\"ti-heart\"></i></button></li>
                </ul>
              </div>
              <div class=\"card-body\">
                <p>Decor</p>
                <h4 class=\"card-product__title\"><a href=\"single-product.html\">Room Flash Light</a></h4>
                <p class=\"card-product__price\">\$150.00</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 col-xl-3\">
            <div class=\"card text-center card-product\">
              <div class=\"card-product__img\">
                <img class=\"card-img\" src=\"img/product/product4.png\" alt=\"\">
                <ul class=\"card-product__imgOverlay\">
                  <li><button><i class=\"ti-search\"></i></button></li>
                  <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                  <li><button><i class=\"ti-heart\"></i></button></li>
                </ul>
              </div>
              <div class=\"card-body\">
                <p>Decor</p>
                <h4 class=\"card-product__title\"><a href=\"single-product.html\">Room Flash Light</a></h4>
                <p class=\"card-product__price\">\$150.00</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 col-xl-3\">
            <div class=\"card text-center card-product\">
              <div class=\"card-product__img\">
                <img class=\"card-img\" src=\"img/product/product5.png\" alt=\"\">
                <ul class=\"card-product__imgOverlay\">
                  <li><button><i class=\"ti-search\"></i></button></li>
                  <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                  <li><button><i class=\"ti-heart\"></i></button></li>
                </ul>
              </div>
              <div class=\"card-body\">
                <p>Accessories</p>
                <h4 class=\"card-product__title\"><a href=\"single-product.html\">Man Office Bag</a></h4>
                <p class=\"card-product__price\">\$150.00</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 col-xl-3\">
            <div class=\"card text-center card-product\">
              <div class=\"card-product__img\">
                <img class=\"card-img\" src=\"img/product/product6.png\" alt=\"\">
                <ul class=\"card-product__imgOverlay\">
                  <li><button><i class=\"ti-search\"></i></button></li>
                  <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                  <li><button><i class=\"ti-heart\"></i></button></li>
                </ul>
              </div>
              <div class=\"card-body\">
                <p>Kids Toy</p>
                <h4 class=\"card-product__title\"><a href=\"single-product.html\">Charging Car</a></h4>
                <p class=\"card-product__price\">\$150.00</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 col-xl-3\">
            <div class=\"card text-center card-product\">
              <div class=\"card-product__img\">
                <img class=\"card-img\" src=\"img/product/product7.png\" alt=\"\">
                <ul class=\"card-product__imgOverlay\">
                  <li><button><i class=\"ti-search\"></i></button></li>
                  <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                  <li><button><i class=\"ti-heart\"></i></button></li>
                </ul>
              </div>
              <div class=\"card-body\">
                <p>Accessories</p>
                <h4 class=\"card-product__title\"><a href=\"single-product.html\">Blutooth Speaker</a></h4>
                <p class=\"card-product__price\">\$150.00</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 col-xl-3\">
            <div class=\"card text-center card-product\">
              <div class=\"card-product__img\">
                <img class=\"card-img\" src=\"img/product/product8.png\" alt=\"\">
                <ul class=\"card-product__imgOverlay\">
                  <li><button><i class=\"ti-search\"></i></button></li>
                  <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                  <li><button><i class=\"ti-heart\"></i></button></li>
                </ul>
              </div>
              <div class=\"card-body\">
                <p>Kids Toy</p>
                <h4 class=\"card-product__title\"><a href=\"#\">Charging Car</a></h4>
                <p class=\"card-product__price\">\$150.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ trending product section end ================= -->


    <!-- ================ offer section start ================= -->
    <section class=\"offer skrollable skrollable-before\" id=\"parallax-1\" data-anchor-target=\"#parallax-1\" data-300-top=\"background-position: 20px 30px\" data-top-bottom=\"background-position: 0 20px\" style=\"background-position: 20px 30px;\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xl-5\">
            <div class=\"offer__content text-center\">
              <h3>Up To 50% Off</h3>
              <h4>Winter Sale</h4>
              <p>Him she'd let them sixth saw light</p>
              <a class=\"button button--active mt-3 mt-xl-4\" href=\"#\">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ offer section end ================= -->

    <!-- ================ Best Selling item  carousel ================= -->
    <section class=\"section-margin calc-60px\">
      <div class=\"container\">
        <div class=\"section-intro pb-60px\">
          <p>Popular Item in the market</p>
          <h2>Best <span class=\"section-intro__style\">Sellers</span></h2>
        </div>
        <div class=\"owl-carousel owl-theme owl-loaded owl-drag\" id=\"bestSellerCarousel\">
          

          

          

          

          

          

          

          
        <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transform: translate3d(-960px, 0px, 0px); transition: all 0s ease 0s; width: 3840px;\"><div class=\"owl-item cloned\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product1.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Accessories</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Quartz Belt Watch</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item cloned\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product2.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Beauty</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Women Freshwash</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item cloned\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product3.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Decor</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Room Flash Light</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item cloned\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product4.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Decor</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Room Flash Light</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item active\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product1.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Accessories</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Quartz Belt Watch</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item active\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product2.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Beauty</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Women Freshwash</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item active\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product3.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Decor</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Room Flash Light</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item active\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product4.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Decor</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Room Flash Light</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product1.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Accessories</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Quartz Belt Watch</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product2.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Beauty</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Women Freshwash</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product3.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Decor</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Room Flash Light</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product4.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Decor</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Room Flash Light</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item cloned\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product1.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Accessories</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Quartz Belt Watch</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item cloned\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product2.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Beauty</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Women Freshwash</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item cloned\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product3.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Decor</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Room Flash Light</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div><div class=\"owl-item cloned\" style=\"width: 210px; margin-right: 30px;\"><div class=\"card text-center card-product\">
            <div class=\"card-product__img\">
              <img class=\"img-fluid\" src=\"img/product/product4.png\" alt=\"\">
              <ul class=\"card-product__imgOverlay\">
                <li><button><i class=\"ti-search\"></i></button></li>
                <li><button><i class=\"ti-shopping-cart\"></i></button></li>
                <li><button><i class=\"ti-heart\"></i></button></li>
              </ul>
            </div>
            <div class=\"card-body\">
              <p>Decor</p>
              <h4 class=\"card-product__title\"><a href=\"single-product.html\">Room Flash Light</a></h4>
              <p class=\"card-product__price\">\$150.00</p>
            </div>
          </div></div></div></div><div class=\"owl-nav\"><button type=\"button\" role=\"presentation\" class=\"owl-prev\"><i class=\"ti-arrow-left\"></i></button><button type=\"button\" role=\"presentation\" class=\"owl-next\"><i class=\"ti-arrow-right\"></i></button></div><div class=\"owl-dots disabled\"></div></div>
      </div>
    </section>
    <!-- ================ Best Selling item  carousel end ================= -->

    <!-- ================ Blog section start ================= -->
    <section class=\"blog\">
      <div class=\"container\">
        <div class=\"section-intro pb-60px\">
          <p>Популярно о цветах</p> 
          <h2>Полезные <span class=\"section-intro__style\">статьи</span></h2>
        </div>

        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card card-blog\">
              <div class=\"card-blog__img\">
                <img class=\"card-img rounded-0\" src=\"img/1.jpg\" alt=\"\">
              </div>
              <div class=\"card-body\">
                <ul class=\"card-blog__info\">               
                  <li><a href=\"#\"><i class=\"ti-comments-smiley\"></i> 2 комментария</a></li> 
                </ul>
                <h4 class=\"card-blog__title\"><a href=\"/the-amazing-secret\">Удивительный секрет, как украсить ваш дом цветами по цене кофе</a></h4>
                <p>Удивительный секрет, как украсить ваш дом цветами по цене кофе
                </p>
                <a class=\"card-blog__link\" href=\"/the-amazing-secret\">Читать далее<i class=\"ti-arrow-right\"></i></a>
              </div>
            </div>
          </div> 
 
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card card-blog\">
              <div class=\"card-blog__img\">
                <img class=\"card-img rounded-0\" src=\"img/2.jpg\" alt=\"\">
              </div>
              <div class=\"card-body\"> 
                <ul class=\"card-blog__info\">               
                  <li><a href=\"#\"><i class=\"ti-comments-smiley\"></i> 2 комментария</a></li>
                </ul>
                <h4 class=\"card-blog__title\"><a href=\"/10-samih\">10 самых экзотических цветов, которые вы можете купить</a></h4>
                <p>Вы хотите, чтобы ваш дом всегда был уютным и красивым, но думаете, что для этого нужно тратить много денег? Мы рады рассказать вам, что это не так! Есть удивительный секрет, как украсить ваш дом цветами по цене простой чашки кофе.
                </p>
                <a class=\"card-blog__link\" href=\"/10-samih\">Читать полностью <i class=\"ti-arrow-right\"></i></a>
              </div>
            </div> 
          </div> 

          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card card-blog\">
              <div class=\"card-blog__img\">
                <img class=\"card-img rounded-0\" src=\"img/3.jpg\" alt=\"\">
              </div>
              <div class=\"card-body\">
                <ul class=\"card-blog__info\">              
                  <li><a href=\"#\"><i class=\"ti-comments-smiley\"></i> 2 комментария</a></li>
                </ul>
                <h4 class=\"card-blog__title\"><a href=\"/kak-vibrat\">Как выбрать идеальный букет для вашего любимого человека</a></h4>
                <p>Как выбрать идеальный букет для вашего любимого человека
                </p>
                <a class=\"card-blog__link\" href=\"/kak-vibrat\">Читать полностью <i class=\"ti-arrow-right\"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- ================ Blog section end ================= -->

    
  </main>
";
        // line 541
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  580 => 541,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
