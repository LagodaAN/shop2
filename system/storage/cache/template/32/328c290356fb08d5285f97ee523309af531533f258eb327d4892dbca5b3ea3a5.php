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
class __TwigTemplate_35ab4b868415425964e911051efef66a76da31d1be282826647055280635c6b4 extends Template
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
        
        
        
      <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transform: translate3d(-1145px, 0px, 0px); transition: all 0s ease 0s; width: 3436px;\"><div class=\"owl-item cloned\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide1.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"#\" class=\"hero-carousel__slideOverlay\">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div></div><div class=\"owl-item cloned\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide2.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"#\" class=\"hero-carousel__slideOverlay\">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div></div><div class=\"owl-item cloned\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide3.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"#\" class=\"hero-carousel__slideOverlay\">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div></div><div class=\"owl-item active\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide1.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"#\" class=\"hero-carousel__slideOverlay\">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div></div><div class=\"owl-item active\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide2.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"#\" class=\"hero-carousel__slideOverlay\">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div></div><div class=\"owl-item active\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide3.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"#\" class=\"hero-carousel__slideOverlay\">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div></div><div class=\"owl-item cloned\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide1.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"#\" class=\"hero-carousel__slideOverlay\">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div></div><div class=\"owl-item cloned\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide2.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"#\" class=\"hero-carousel__slideOverlay\">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div></div><div class=\"owl-item cloned\" style=\"width: 371.667px; margin-right: 10px;\"><div class=\"hero-carousel__slide\">
          <img src=\"img/home/hero-slide3.png\" alt=\"\" class=\"img-fluid\">
          <a href=\"#\" class=\"hero-carousel__slideOverlay\">
            <h3>Wireless Headphone</h3>
            <p>Accessories Item</p>
          </a>
        </div></div></div></div><div class=\"owl-nav disabled\"><button type=\"button\" role=\"presentation\" class=\"owl-prev\"><span aria-label=\"Previous\">‹</span></button><button type=\"button\" role=\"presentation\" class=\"owl-next\"><span aria-label=\"Next\">›</span></button></div><div class=\"owl-dots disabled\"></div></div>
    </section>
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->
    <section class=\"section-margin calc-60px\">
      <div class=\"container\">
        <div class=\"section-intro pb-60px\">
          <p>Popular Item in the market</p>
          <h2>Trending <span class=\"section-intro__style\">Product</span></h2>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4 col-xl-3\">
            <div class=\"card text-center card-product\">
              <div class=\"card-product__img\">
                <img class=\"card-img\" src=\"img/product/product1.png\" alt=\"\">
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
                <p>Beauty</p>
                <h4 class=\"card-product__title\"><a href=\"single-product.html\">Women Freshwash</a></h4>
                <p class=\"card-product__price\">\$150.00</p>
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
          <p>Popular Item in the market</p>
          <h2>Latest <span class=\"section-intro__style\">News</span></h2>
        </div>

        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card card-blog\">
              <div class=\"card-blog__img\">
                <img class=\"card-img rounded-0\" src=\"img/blog/blog1.png\" alt=\"\">
              </div>
              <div class=\"card-body\">
                <ul class=\"card-blog__info\">
                  <li><a href=\"#\">By Admin</a></li>
                  <li><a href=\"#\"><i class=\"ti-comments-smiley\"></i> 2 Comments</a></li>
                </ul>
                <h4 class=\"card-blog__title\"><a href=\"single-blog.html\">The Richland Center Shooping News and weekly
                    shooper</a></h4>
                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.
                </p>
                <a class=\"card-blog__link\" href=\"#\">Read More <i class=\"ti-arrow-right\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card card-blog\">
              <div class=\"card-blog__img\">
                <img class=\"card-img rounded-0\" src=\"img/blog/blog2.png\" alt=\"\">
              </div>
              <div class=\"card-body\">
                <ul class=\"card-blog__info\">
                  <li><a href=\"#\">By Admin</a></li>
                  <li><a href=\"#\"><i class=\"ti-comments-smiley\"></i> 2 Comments</a></li>
                </ul>
                <h4 class=\"card-blog__title\"><a href=\"single-blog.html\">The Shopping News also offers top-quality
                    printing services</a></h4>
                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.
                </p>
                <a class=\"card-blog__link\" href=\"#\">Read More <i class=\"ti-arrow-right\"></i></a>
              </div>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-0\">
            <div class=\"card card-blog\">
              <div class=\"card-blog__img\">
                <img class=\"card-img rounded-0\" src=\"img/blog/blog3.png\" alt=\"\">
              </div>
              <div class=\"card-body\">
                <ul class=\"card-blog__info\">
                  <li><a href=\"#\">By Admin</a></li>
                  <li><a href=\"#\"><i class=\"ti-comments-smiley\"></i> 2 Comments</a></li>
                </ul>
                <h4 class=\"card-blog__title\"><a href=\"single-blog.html\">Professional design staff and efficient
                    equipment you’ll find we offer</a></h4>
                <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.
                </p>
                <a class=\"card-blog__link\" href=\"#\">Read More <i class=\"ti-arrow-right\"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ Blog section end ================= -->

    <!-- ================ Subscribe section start ================= -->
    <section class=\"subscribe-position\">
      <div class=\"container\">
        <div class=\"subscribe text-center\">
          <h3 class=\"subscribe__title\">Get Update From Anywhere</h3>
          <p>Bearing Void gathering light light his eavening unto dont afraid</p>
          <div id=\"mc_embed_signup\">
            <form target=\"_blank\" action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\" method=\"get\" class=\"subscribe-form form-inline mt-5 pt-1\" novalidate=\"true\">
              <div class=\"form-group ml-sm-auto\">
                <input class=\"form-control mb-1\" type=\"email\" name=\"EMAIL\" placeholder=\"Enter your email\" onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Your Email Address '\">
                <div class=\"info\"></div>
              </div>
              <button class=\"button button-subscribe mr-auto mb-1\" type=\"submit\">Subscribe Now</button>
              <div style=\"position: absolute; left: -5000px;\">
                <input name=\"b_36c4fd991d266f23781ded980_aefe40901a\" tabindex=\"-1\" value=\"\" type=\"text\">
              </div>

            </form>
          </div>

        </div>
      </div>
    </section>
    <!-- ================ Subscribe section end ================= -->



  </main>
";
        // line 607
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
        return array (  646 => 607,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
