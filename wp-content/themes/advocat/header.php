<!doctype html>
<html lang="ru" class="wide wow-animation">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <link href="<?php bloginfo('template_url')?>/dist/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
</head>
<body>
<div class="page">
  <header class="page-head">
    <div class="rd-navbar-wrap">
      <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="53px" data-lg-stick-up-offset="53px" data-md-stick="true" data-lg-stick-up="true" class="rd-navbar rd-navbar-default">
        <div class="rd-navbar-inner">
          <div class="rd-navbar-aside-wrap">
            <div class="rd-navbar-aside">
              <div data-rd-navbar-toggle=".rd-navbar-aside" class="rd-navbar-aside-toggle"><span></span></div>
              <div class="rd-navbar-aside-content">
                <ul class="rd-navbar-aside-group list-units">
                  <li>
                    <div class="nav__phone">
                      <div class="nav__phone-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                      <div><a href="tel:+74959699841">+7 (495) 969 98 41</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="nav__email">
                      <div class="nav__email-icon"><i class="fa fa-envelope"></i></div>
                      <div class="unit-body"><a href="mailto:info@lawyersoffice.ru">info@lawyersoffice.ru</a></div>
                    </div>
                  </li>
                </ul>
                <div class="rd-navbar-aside-group">
                  <ul>
                    <li>
                      <div class="nav__address">
                        <div class="nav__address-icon">
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="nav__address-text">
                          <a href="/kontakty/">Москва, улица Руставели, дом 3 корпус 2, офис 6</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <!--<ul class="nav__soc">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                  </ul>-->
                </div>
              </div>
            </div>
          </div>
          <div class="rd-navbar-group">
            <div class="rd-navbar-panel">
              <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
              <a href="<?php bloginfo('url')?>" class="rd-navbar-brand brand">
                <div class="logo">
                  <div class="logo__img">
                    <img src="<?php bloginfo('template_url')?>/dist/images/balance.svg" alt="">
                  </div>
                  <div class="logo__text">
                    Адвокат Тыняная И.И.
                  </div>
                </div>
              </a>
            </div>
            <div class="rd-navbar-nav-wrap">
              <div class="rd-navbar-nav-inner">
                <div class="rd-navbar-btn-wrap"><a href="#" class="btn btn--small btn--gold" data-toggle="modal" data-target="#exampleModalCenter">Получить совет</a></div>
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="/">Главная</a>
                  </li>
                  <li><a href="/ob-advokate/">Об адвокате</a>
                  </li>
                  <li><a href="/pomoshh-advokata-yuridicheskim-i-fizicheskim-litsam/">Юридическая помощь</a>
                    <ul class="rd-navbar-megamenu">
                      <li>
                        <!--<h5 class="rd-megamenu-header">Помощь адвоката физическим лицам</h5>-->
                        <ul class="rd-navbar-list">
                          <li><a href="service.html">Юридическое сопровождение</a></li>
                          <li><a href="#">Экономические преступления</a></li>
                          <li><a href="#">Арбитражные споры</a></li>
                          <li><a href="#">Гражданские дела</a></li>
                          <li><a href="#">Вопросы недвижимости</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-navbar-list">
                          <li><a href="#">Уголовные дела</a></li>
                          <li><a href="#">Консультация по гражданскому праву</a></li>
                          <li><a href="#">Представление интересов в судах</a></li>
                          <li><a href="#">Жилищные споры</a></li>
                          <li><a href="#">Трудовые споры</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-navbar-list">
                          <li><a href="#">Наследственные дела</a></li>
                          <li><a href="#">Взыскание долгов</a></li>
                          <li><a href="#">Семейные споры</a></li>
                          <li><a href="#">Защита прав потребителей</a></li>
                          <li><a href="#">Защита прав собственников</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-navbar-list">
                          <li><a href="#">Консультация по уголовным делам</a></li>
                          <li><a href="#">Налоговые споры</a></li>
                          <li><a href="#">Взыскание морального вреда</a></li>
                          <li><a href="#">Личный или семейный адвокат</a></li>
                          <li><a href="#">Споры со страховыми компаниями</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="/kontakty/">Контакты</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <?php if (!is_front_page()) {?>
  <div class="breadcrumb-modern breadcrumb-modern__wrap" style="background-image: url(<?php bloginfo('template_url')?>/dist/images/slider-vn-2.jpg);">
    <div class="container">
      <div class="breadcrumb-modern__body">
        <h1 class="breadcrumb-modern__title">
          <?php if (is_category()) {?>
            <?php single_cat_title();?>
          <?php } else if (is_search()) {?>
            Поиск
          <?php } else if (is_404()) {?>
            404 страница не найдена
          <?php } else {?>
            <?php the_title();?>
          <?php }?>
        </h1>
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
      </div>
    </div>
    <div class="breadcrumb-modern__transform" style="background-image: url(<?php bloginfo('template_url')?>/dist/images/slider-vn-2.jpg);"></div>
  </div>
  <?php }
  if (is_page( 'kontakty' )) {
    remove_filter( 'the_content', 'wpautop' );
  }
  ?>

