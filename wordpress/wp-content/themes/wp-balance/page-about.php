<?php /* Template Name: About */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="section-1" role="main" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="gray-title"><?php the_title(); ?></h1><?php edit_post_link(); ?>
          </div>
          <div class="col-sm-4 col-sm-offset-4">
            <a href="<?php the_field('link'); ?>" class="button red-button">Получить бесплатную консультацию</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <article id="post-<?php the_ID(); ?>" <?php post_class('slider-section'); ?>>
      <div class="container">
        <div class="row">
          <div class="col-md-12 content-wrapp">
            <?php the_content(); ?>
          </div>

          <?php if( have_rows('adventage_about') ): ?>
            <div class="col-md-10 col-md-offset-1 advantages-about">
              <h2 class="section-title"><?php the_field('adventage_title'); ?></h2>

              <div class="clearfix"></div>
                <?php while ( have_rows('adventage_about') ) : the_row(); ?>
                  <?php $image = get_sub_field('icon'); ?>
                  <div class="col-md-4 col-sm-6 icon">
                    <div class="row">
                      <?php if ( !empty($image)) : ?>
                        <div class="col-sm-12 col-xs-4">
                          <div class="icon-wrapp">
                            <img src="<?php echo $image['url'] ?>">
                          </div>
                        </div>
                      <?php endif; ?>
                      <div class="col-sm-12 col-xs-8">
                        <p><?php the_sub_field('content'); ?></p>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>

              <div class="clearfix"></div>
            </div>
          <?php endif; ?>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /section -->


    <section class="cont-form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/form-bg1.jpg');">
      <div class="container">
        <div class="row">
          <h2>У нас много примеров выполненных работ</h2>
          <p>здесь представлены лучшие из лучших. Если в нашем каталоге вы не нашли нужного интерьера - звоните, мы предоставим необходимый материал или разработаем новую концепцию!</p>
          <div class="col-sm-4 col-sm-offset-4">
            <a href="#" class="button red-button">Получить консультацию</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->
  <?php endwhile; endif; ?>


<?php get_footer(); ?>
