<?php get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section class="section-1 section__bg" role="main" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="gray-title">
              <?php if ( !empty(get_field('title'))) : ?>
                <?php the_field('title');?>
              <?php else: ?>
                <?php the_title(); ?>
              <?php endif; ?>
            </h1>
            <?php if ( !empty(get_field('subtitle'))) : ?>
              <h2 class="gray-title">
                <?php the_field('subtitle');?>
              </h2>
            <?php endif; ?>
            <?php edit_post_link(); ?>
          </div>
          <div class="col-sm-6 col-sm-offset-3">
            <a href="#modal_callback" rel="nofollow" data-toggle="modal" class="button red-button">Получить бесплатную консультацию</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <article id="post-<?php the_ID(); ?>" <?php post_class('slider-section'); ?>>
      <div class="container">
        <div class="row">
          <div class="content-wrapp">
            <?php the_content(); ?>
          </div>

          <?php if( have_rows('slider' ) ): ?>
            <div class="two-slides owl-carousel owl-theme slides-content">
              <?php while ( have_rows('slider' ) ) : the_row(); ?>
                <?php $image = get_sub_field('img'); ?>
                <div class="ithem">
                  <?php if ( !empty($image)) : ?>
                      <img src="<?php echo $image['sizes']['medium'] ?>">
                  <?php endif; ?>
                  <div class="slide-cont_wrapp">
                    <div class="slide-cont">
                      <?php the_sub_field('slide_content'); ?>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
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
            <a href="#modal_callback" rel="nofollow" data-toggle="modal" class="button red-button">Получить консультацию</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->
  <?php endwhile; endif; ?>


<?php get_footer(); ?>
