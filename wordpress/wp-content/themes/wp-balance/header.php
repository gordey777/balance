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
<?php
$header_class = '';
if( is_page_template( 'page-landing1.php' ) || is_page_template( 'page-landing2.php' ) ){
$header_class = 'landing_header';
} ?>

<!-- wrapper -->
  <div class="wrapper">
    <header role="banner"  class=" <?php echo $header_class; ?>">

      <div class="container">
        <div class="head-bg"></div>
        <div class="row flex-row">


          <div id="hamburger" class="visible-xs humb-toggle-switch humb-toggle-switch__htx">
            <span>toggle menu</span>
          </div>

          <div class="logo col-md-2 col-sm-3 col-xs-12">
            <?php if ( !is_front_page() && !is_home() ){ ?>
              <a href="<?php echo home_url(); ?>">
            <?php } ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( !is_front_page() && !is_home() ){ ?>
              </a>
            <?php } ?>
          </div><!-- /logo -->

          <?php $file = get_field('header_file', 43); ?>
          <div class="catalog_load col-md-3 col-sm-9 hidden-xs hidden-sm col-md-push-4">
            <a href="<?php echo $file['url']; ?>" download="<?php echo $file['url']; ?>" class="catalog">Скачать каталог работ <br>с подробными сметами</a>
          </div>

          <div class="slogan col-md-4 col-sm-5 hidden-xs col-md-pull-3">
            <span><?php the_field('site_slogan', 43); ?></span>
          </div>

<?php if (get_field('landing_slogan')){ ?>
          <div class="slogan-landing col-md-7 col-sm-5 hidden-xs">
            <span><?php the_field('landing_slogan'); ?></span>
          </div>
<?php } ?>



          <div class="phone col-md-3 col-sm-4 col-xs-12">
            <a href="tel:<?php the_field('phone', 43); ?>" class="tel"><?php the_field('phone', 43); ?></a>
            <a href="#modal_callback" rel="nofollow" data-toggle="modal" class="callback button red-button">Заказать звонок</a>
          </div>
        </div><!-- /.row -->
        <div class="row">

          <nav class="nav nav__header" role="navigation">
            <?php wpeHeadNav(); ?>
          </nav><!-- /nav -->

        </div><!-- /.row -->
      </div><!-- /.container -->

    </header><!-- /header -->
