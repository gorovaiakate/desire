<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desire</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
  <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <nav class="menu">
            <ul class="menu__list">
              <li class="menu__list-item">
                <a class="menu__list-link" href="about.html">
                  About
                </a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link" href="gallery.html">
                  Gallery
                </a>
              </li>
            </ul>
          </nav>
          <a class="logo" href="index.html">
            <img src="images/logo1.png" alt="">
          </a>
          <nav class="menu">
            <ul class="menu__list">
              <li class="menu__list-item">
                <a class="menu__list-link" href="blog.html">
                  Blog
                </a>
              </li>
              <li class="menu__list-item">
                <a class="menu__list-link  menu__list-link--activ" href="contact.php">
                  Contact
                </a>
              </li>
            </ul>
          </nav>
          <div class="menu__btn">
            <div class="menu__btn-row"></div>
            <div class="menu__btn-row"></div>
            <div class="menu__btn-row"></div>
          </div>
          <button class="header__btn">
            <img src="images/icon_menu.svg" alt="">
          </button>
          <div class="rightside-menu rightside-menu--close">     <!-- rightside-menu--close - класс для закрывающего меню -->
            <button class="rightside-menu__close">
              <img src="images/path.svg" alt="icon menu">
            </button>
            <div class="rightside-menu__content">
              <a class="rightside-menu__logo" href="">
                <img src="images/logo-big.png" alt="logo">
              </a>
              <h4 class="rightside-menu__title">
                Furniture for life
              </h4>
              <p class="rightside-menu__text">
                Sustainable hot chicken skateboard, dreamcatcher meggings actually squid. Slow-carb everyday carry +1 art party microdosing, put a bird on it brooklyn
              </p>
              <img class="rightside-menu__images" src="images/content/rightside-img.jpg" alt="images">
            </div>
            
          </div>
        </div>
      </div>
    </header>
    <main class="main">
      <div class="breadcrumbs">
        <div class="container">
          <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
              <a class="breadcrumbs__link" href="index.html">Home</a>
            </li>
            <li class="breadcrumbs__item">
              <a class="breadcrumbs__link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2651.021887846939!2d-122.41381709041644!3d37.79908277626027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580f18d8c6ea7%3A0x5d7f53fb70a3a903!2zNzI1IEdyZWVuIFN0LCBTYW4gRnJhbmNpc2NvLCBDQSA5NDEzMywg0KHQqNCQ!5e0!3m2!1sru!2sru!4v1622005833857!5m2!1sru!2sru" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <section class="contact">
        <div class="container">
          <h3 class="contact__title">
            Contact Us
          </h3>
          <div class="contact__info">
            <ul class="contact__social">
              <li class="contact__social-item">
                <a class="contact__social-link" href="#">
                  <img class="contact__social-link--facebook" src="images/facebook.svg" alt="images">
                </a>
              </li>
              <li class="contact__social-item">
                <a class="contact__social-link" href="#">
                  <img class="contact__social-link--instagram" src="images/instagram.svg" alt="images">
                </a>
              </li>
              <li class="contact__social-item">
                <a class="contact__social-link" href="#">
                  <img class="contact__social-link--pinterest" src="images/pinterest.svg" alt="images">
                </a>
              </li>
              <li class="contact__social-item">
                <a class="contact__social-link" href="#">
                  <img class="contact__social-link--whatsapp" src="images/whatsapp.svg" alt="images">
                </a>
              </li>
              <li class="contact__social-item">
                <a class="contact__social-link" href="#">
                  <img class="contact__social-link--youtube" src="images/youtube.svg" alt="images">
                </a>
              </li>
            </ul>
            <div class="contact__text">
              Vexillologist vape microdosing freegan pork belly deep v direct trade cray single-origin coffee street art. Viral shaman mustache master cleanse, pour-over affogato poutine copper mug marfa fanny pack normcore. Lo-fi pop-up banjo portland, echo park hammock
            </div>
            <a class="contact__phone" href="tel:+14158297934">(415) 829-7934</a>
            <div class="contact__st">725 Green St</div>
            <div class="contact__city">San Francisco, California(CA), 94133</div>
            <a class="contact__mail" href="mailto:ouremailaddress@email.com">ouremailaddress@email.com</a>
            <form class="ajax-contact__form" action="php/sendmail.php" method="POST">
              <input class="contact__form-input" name="name" type="text" placeholder="Your name" maxlength="20" required>
              <input class="contact__form-input" name="email" type="email" placeholder="Your e-mail" maxlength="50" required>
              <textarea class="contact__form-area" name="message" placeholder="Your message" maxlength="150"></textarea>
              <button class="contact__form-button" type="submit">Send</button>
            </form>
          </div>
        </div>
      </section>
      <section class="contact-slider">
        <div class="container-fluid">
          <div class="contact-slider__inner">
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-1.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-2.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-3.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-4.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-5.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-6.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-7.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-8.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-9.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-10.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-1.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-2.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-3.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-4.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-5.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-6.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-7.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-8.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-9.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-10.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-1.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-2.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-3.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-4.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-5.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-6.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-7.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-8.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-9.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>
            <div class="contact-slider__item">
              <a class="contact-slider__item-link" href="#">
                <img class="contact-slider__img" src="images/slider/slider-10.jpg" alt="image">
                <p class="contact-slider__title">
                  Truffaut literally trust
                </p>
              </a>
            </div>

          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__content">
        <div class="container">
          <div class="footer__inner">
            <div class="footer__info">
              <div class="footer__info-title">
                Contact Us
              </div>
              <div class="footer__info-text">
                Keffiyeh poutine etsy, paleo cray put a bird on it microdosing schlitz you probably occupy
              </div>
              <a class="footer__info-mail" href="mailto:ouremailaddress@email.com">ouremailaddress@email.com</a>
              <form class="footer__form">
                <input class="footer__form-input" type="email" placeholder="Subscribe by email">
                <button class="footer__form-button" type="submit">Send</button>
              </form>
            </div>
            <ul class="footer__social">
              <li class="footer__social-item">
                <a class="footer__social-link footer__social-link--facebook" href="#">Facebook</a>
              </li>
              <li class="footer__social-item">
                <a class="footer__social-link footer__social-link--instagram" href="#">Instagram</a>
              </li>
              <li class="footer__social-item">
                <a class="footer__social-link footer__social-link--pinterest" href="#">Pinterest</a>
              </li>
              <li class="footer__social-item">
                <a class="footer__social-link footer__social-link--whatsapp" href="#">WhatsApp</a>
              </li>
              <li class="footer__social-item">
                <a class="footer__social-link footer__social-link--youtube" href="#">Youtube</a>
              </li>
            </ul>
            <nav class="footer__menu">
              <ul class="footer__menu-list">
                <li class="footer__menu-item">
                  <a href="#" class="footer__menu-link">Delivery</a>
                </li>
                <li class="footer__menu-item">
                  <a href="#" class="footer__menu-link">FAQ</a>
                </li>
                <li class="footer__menu-item">
                  <a href="#" class="footer__menu-link">Help</a>
                </li>
                <li class="footer__menu-item">
                  <a href="#" class="footer__menu-link">More About Us</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="footer__copy">
        <div class="container">
          <p>
            674 Gonzales Drive. Washington, PA 15301
          </p>
        </div>
      </div>
    </footer>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/main.min.js"></script>
</body>

</html>