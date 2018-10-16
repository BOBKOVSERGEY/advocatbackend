<!doctype html>
<html lang="ru" class="wide wow-animation">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <link href="<?php bloginfo('template_url')?>/dist/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
  <meta property="og:url" content="<?php echo bloginfo('url') . urlPath();?>">
  <meta property="og:site_name" content="<?php if (is_front_page()) { bloginfo('name'); } else if(is_category()){ single_cat_title();} else {the_title(); }?>">
  <meta property="og:image" content="<?php bloginfo('template_url')?>/dist/images/share.jpg">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1291">
  <meta property="og:image:height" content="315">

  <meta property="twitter:creator" content="Адвокат Тыняная Ирина Ивановна">
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:title" content="<?php if (is_front_page()) { bloginfo('name'); } else if(is_category()){ single_cat_title();} else {the_title(); }?>">
  <meta property="twitter:description" content="">
  <meta property="twitter:image:src" content="<?php bloginfo('template_url')?>/dist/images/share.jpg">
  <meta property="twitter:image:width" content="1291">
  <meta property="twitter:image:height" content="315">
  <meta name="msapplication-TileColor" content="#2A5977">
  <meta name="theme-color" content="#2A5977">
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
                          <li><a href="/yuridicheskaya-pomoshh-yuridicheskim-litsam/yuridicheskoe-soprovozhdenie-deyatelnosti-predpriyatiya/">Юридическое сопровождение</a></li>
                          <li><a href="/yuridicheskaya-pomoshh-yuridicheskim-litsam/advokat-po-ekonomicheskim-prestupleniyam/">Экономические преступления</a></li>
                          <li><a href="/yuridicheskaya-pomoshh-yuridicheskim-litsam/advokat-po-arbitrazhnym-delam/">Арбитражные споры</a></li>
                          <li><a href="/yuridicheskaya-pomoshh-fizicheskim-litsam/advokat-po-grazhdanskomu-pravu/">Гражданские дела</a></li>
                          <li><a href="/yuridicheskaya-pomoshh-yuridicheskim-litsam/advokat-po-voprosam-nedvizhimosti/">Вопросы недвижимости</a></li>
                        </ul>
                      </li>
                      <li>
                        <ul class="rd-navbar-list">
                          <li><a href="/yuridicheskaya-pomoshh-fizicheskim-litsam/advokat-po-ugolovnym-delam/">Уголовные дела</a></li>
                          <li><a href="/yuridicheskaya-pomoshh-yuridicheskim-litsam/advokat-po-grazhdanskim-delam/">Консультация по гражданскому праву</a></li>
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
                          <li><a href="/yuridicheskaya-pomoshh-fizicheskim-litsam/konsultatsiya-advokata-po-ugolovnym-delam/">Консультация по уголовным делам</a></li>
                          <li><a href="#">Налоговые споры</a></li>
                          <li><a href="#">Взыскание морального вреда</a></li>
                          <li><a href="/yuridicheskaya-pomoshh-fizicheskim-litsam/lichnyj-ili-semejnyj-advokat/">Личный или семейный адвокат</a></li>
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
    <div class="container container__relative">
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
      <div class="breadcrumb-modern__share">
        <div class="breadcrumb-modern__share-heading">
          Поделиться
        </div>
        <div class="share share--center">
          <div class="share__icon">
            <img src="<?php bloginfo('template_url')?>/dist/images/share.svg" alt="">
          </div>
          <div class="share__hint">
            <div class="share__button">
              <button class="share__button-item" data-sharer="facebook" data-url="<?php echo bloginfo('url') . urlPath();?>"><i class="fa fa-facebook" aria-hidden="true"></i></button>
              <button class="share__button-item" data-sharer="twitter" data-url="<?php echo bloginfo('url') . urlPath();?>" data-title="<?php if (is_front_page()) { bloginfo('name'); } else if(is_category()){ single_cat_title();} else {the_title(); }?>"><i class="fa fa-twitter"></i></button>
              <button class="share__button-item" data-sharer="googleplus" data-url="<?php echo bloginfo('url') . urlPath();?>"><i class="fa fa-google-plus"></i></button>
              <button class="share__button-item" data-sharer="vk" data-caption="" data-title="<?php if (is_front_page()) { bloginfo('name'); } else if(is_category()){ single_cat_title();} else {the_title(); }?>" data-url="<?php echo bloginfo('url') . urlPath();?>"><i class="fa fa-vk"></i></button>
              <button class="share__button-item" data-sharer="okru" data-url="<?php echo bloginfo('url') . urlPath();?>" data-title="<?php if (is_front_page()) { bloginfo('name'); } else if(is_category()){ single_cat_title();} else {the_title(); }?>"><i class="fa fa-odnoklassniki"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="breadcrumb-modern__transform" style="background-image: url(<?php bloginfo('template_url')?>/dist/images/slider-vn-2.jpg);"></div>
  </div>
  <?php }
  if (is_page( 'kontakty')) {
    remove_filter( 'the_content', 'wpautop' );
  }
  if (is_single(92)) {
    remove_filter( 'the_content', 'wpautop' );
  }
  ?>

