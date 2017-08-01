<?php /* Template Name: Contacts */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="section-1 section__bg section-contacts" role="main" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    </section><!-- /section -->

    <article id="post-<?php the_ID(); ?>" <?php post_class('contacts'); ?>>
      <div class="container">
        <div class="row">
        <h1 class="section-title"><?php the_title(); ?></h1>
        </div><!-- /.row -->
      </div><!-- /.container -->
      <div class="map-wrapp">
        <?php

        $location = get_field('map_code');

        if( !empty($location) ):
        ?>
        <div class="acf-map">
          <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
        <?php endif; ?>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-4 contacts__items">
            <div class="cont-adress">
              <h3>Адрес:</h3>
              <?php the_field('adress'); ?>
            </div>
            <div class="cont-tel">
              <h3>Телефон:</h3>
              <a href="tel:<?php the_field('phone_cont'); ?>" class="tel"><?php the_field('phone_cont'); ?></a>
            </div>
            <div class="cont-mail">
              <h3>E-mail:</h3>
              <a href="mailto:<?php the_field('mail'); ?>" class="tel"><?php the_field('mail'); ?></a>
            </div>
          </div>
          <div class="col-md-8 contacts__form">
            <?php echo do_shortcode('[contact-form-7 id="258" title="Обратная связь"]'); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /section -->


    <section class="cont-form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/form-bg1.jpg');">
      <div class="container">
        <div class="row">
          <h2>У нас много примеров выполненных работ</h2>
          <p>здесь представлены лучшие из лучших. Если в нашем каталоге вы не нашли нужного интерьера - звоните, мы предоставим необходимый материал или разработаем новую концепцию!</p>
          <div class="col-sm-4 col-sm-offset-4">
            <a href="#modal_callback" rel="nofollow" data-toggle="modal" class="button red-button">Получить консультацию</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->
  <?php endwhile; endif; ?>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdnmkZwY2UhB0tliLwtFIZg8NS_k0t6g8"></script>
  <script type="text/javascript">

  </script>

<?php get_footer(); ?>
