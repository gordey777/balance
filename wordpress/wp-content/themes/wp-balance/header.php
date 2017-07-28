<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->

  <div class="wrapper">
    <header role="banner">

      <div class="container">
        <div class="row">

          <div class="left-bg col-md-9 col-sm-8">
            <div class="row">
              <div class="logo col-md-2 col-xs-5">
                <?php if ( !is_front_page() && !is_home() ){ ?>
                  <a href="<?php echo home_url(); ?>">
                <?php } ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                <?php if ( !is_front_page() && !is_home() ){ ?>
                  </a>
                <?php } ?>
              </div><!-- /logo -->

              <div class="catalog_load col-md-4 col-xs-7 col-md-push-6">
                <a href="#" class="catalog">Скачать каталог работ <br>с подробными сметами</a>
              </div>

              <div class="slogan col-md-6 col-sm-12 col-md-pull-4">
                <span>Качественное преобразование вашего интерьера <br>на профессиональном <br>уровне</span>
              </div>


            </div>
          </div>

          <div class="phone right-bg col-md-3 col-sm-4">
            <a href="tel:+ 7 (000) 00-000-00" class="tel">+ 7 (000) 00-000-00</a>
            <a href="#" class="callback button red-button">Заказвть звонок</a>
          </div>



        </div><!-- /.row -->
      </div><!-- /.container -->
      <nav class="nav__header" role="navigation">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <?php wpeHeadNav(); ?>
            </div>

          </div><!-- /.row -->
        </div><!-- /.container -->
      </nav><!-- /nav -->
    </header><!-- /header -->
