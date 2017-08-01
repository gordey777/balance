<?php /* Template Name: Home Page */ get_header(); ?>

    <section class="section-1 section__bg" role="main" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <?php echo do_shortcode('[contact-form-7 id="35" title="Контактная форма на главной"]'); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <?php if( have_rows('advantages' ) ): ?>
      <?php while ( have_rows('advantages' ) ) : the_row(); ?>
        <section class="advantages two-bloks">
          <div class="container">
            <div class="row flex-row">
              <div class="col-md-6 video_wrapp">
                <?php echo get_sub_field('video')["iframe"]; ?>
              </div>
              <div class="col-md-6">

                <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                <span class="red-subtitle"><?php the_sub_field('subtitle'); ?></span>
                <div class="clearfix"></div>

                <?php if( get_sub_field('sub_adventage' ) ): ?>
                  <?php while ( has_sub_field('sub_adventage' ) ) : ?>
                    <?php $image = get_sub_field('icon'); ?>
                    <div class="col-md-3 col-sm-6 icon">
                      <div class="row">
                        <?php if ( !empty($image)) : ?>
                        <div class="col-sm-12 col-xs-4">
                            <img src="<?php echo $image['url']; ?>">
                          </div>
                        <?php endif; ?>
                        <div class="col-sm-12 col-xs-8">
                          <p><?php the_sub_field('content'); ?></p>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
                <div class="clearfix"></div>
                <a href="<?php the_sub_field('link'); ?>" class="button red-button"><?php the_sub_field('link_title'); ?></a>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </section><!-- /section -->
      <?php  endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('before_after' ) ): ?>
      <?php while ( have_rows('before_after' ) ) : the_row(); ?>
        <section class="before-after">
          <div class="red-line">
            <h2><?php the_sub_field('title'); ?></h2>
          </div>
          <div class="photo_before" style="background-image: url(<?php echo get_sub_field('img_before')['sizes']['medium']; ?>);">
            <span class="before">До</span>
          </div>
          <div class="photo_after" style="background-image: url(<?php echo get_sub_field('img_after')['sizes']['medium']; ?>);">
            <span class="after">После</span>
            <a href="<?php the_sub_field('link'); ?>" class="button red-button">Посетить объект</a>
          </div>
          <div class="clearfix"></div>
        </section><!-- /section -->
      <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('home_slider' ) ): ?>
      <?php while ( have_rows('home_slider' ) ) : the_row(); ?>
        <section class="slider-section">
          <div class="container">
            <div class="row">
              <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
              <span class="red-subtitle"><?php the_sub_field('subtitle'); ?></span>
              <p><?php the_sub_field('description'); ?></p>

              <?php if( get_sub_field('sub_slider' ) ): ?>
                <div class="two-slides owl-carousel owl-theme slides-content">
                  <?php while ( has_sub_field('sub_slider' ) ) : ?>
                    <?php $image = get_sub_field('img'); ?>

                    <div class="ithem">
                      <?php if ( !empty($image)) : ?>
                        <img src="<?php echo $image['sizes']['medium']; ?>">
                      <?php endif; ?>
                      <div class="slide-cont_wrapp">
                        <div class="slide-cont">
                          <?php the_sub_field('slide_content'); ?>
                          <a href="<?php the_sub_field('link'); ?>" class="slide-link">Связаться с нами +</a>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
                </div><!-- /.two-slides -->
              <?php endif; ?>

            </div><!-- /.row -->
          </div><!-- /.container -->
        </section><!-- /section -->
      <?php endwhile; ?>
    <?php endif; ?>


    <section class="cont-form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/form-bg1.jpg');">
      <div class="container">
        <div class="row">
          <?php echo do_shortcode('[contact-form-7 id="242" title="Хотите знать больше о наших услугах"]'); ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <?php if( have_rows('reviews_block' ) ): ?>
      <?php while ( have_rows('reviews_block' ) ) : the_row(); ?>
        <?php $image = get_sub_field('img'); ?>
        <section class="reviews two-bloks">
          <div class="container">
            <div class="row flex-row">
              <div class="col-md-6">
                <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                <span class="red-subtitle"><?php the_sub_field('subtitle'); ?></span>
                <div class="clearfix"></div>
                <div class="col-sm-2 col-xs-4">
                  <div class="row">
                    <div class="photo-wrapp" style="background-image: url(<?php echo $image['url']; ?>);"></div>
                  </div>
                </div>
                <div class="col-sm-10 col-xs-8 content">
                  <?php the_sub_field('content'); ?>
                  <p class="name"><?php the_sub_field('name'); ?></p>
                </div>
              </div>
              <div class="col-md-6 video_wrapp">
                <?php echo get_sub_field('video')["iframe"]; ?>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </section><!-- /section -->
      <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('photo_report' ) ): ?>
      <?php while ( have_rows('photo_report' ) ) : the_row(); ?>
        <section class="tabs_slider_section">
          <div class="red-line">
            <div class="container">
              <div class="row">
                <h2><?php the_sub_field('title'); ?></h2>
                <?php the_sub_field('subtitle'); ?></div>
            </div>
          </div>
          <?php if( get_sub_field('tabs' ) ): ?>
            <div class="container">
                <div class="tabs">
                  <div class="tabs__caption row">
                    <?php $i = 0; ?>
                    <?php while ( has_sub_field('tabs' ) ) : ?>
                      <?php $tab_class = ''; ?>
                      <?php if ($i == 0){
                      $tab_class = 'active';
                      } ?>
                      <div class="tab__label <?php echo $tab_class; ?> col-xs-4">
                        <div class="label"><?php the_sub_field('tab_label'); ?></div>
                      </div>
                      <?php $i ++; ?>
                    <?php endwhile; ?>
                  </div>
                  <?php $j = 0; ?>
                  <?php while ( has_sub_field('tabs' ) ) : ?>
                    <?php $tab_class = ''; ?>
                    <?php if ($j == 0){
                      $tab_class = 'active';
                      } ?>
                    <div class="tabs__content row flex-row <?php echo $tab_class; ?>">
                      <?php if( get_sub_field('sub_slider' ) ): ?>
                        <div class="col-md-8 tab-slider">
                          <div class="two-slides owl-carousel owl-theme slides-content">
                              <?php while ( has_sub_field('sub_slider' ) ) : ?>
                                <?php $image = get_sub_field('img'); ?>
                                <div class="ithem">
                                <?php if ( !empty($image)) : ?>
                                  <img src="<?php echo $image['sizes']['medium']; ?>">
                                <?php endif; ?>
                                <div class="slide-cont_wrapp">
                                  <div class="slide-cont">
                                    <?php the_sub_field('slide_content'); ?>
                                  </div>
                                </div>
                                </div><!-- /.ithem-->
                              <?php endwhile; ?>
                          </div>
                        </div>
                      <?php endif; ?>
                      <div class="col-md-4 video_wrapp">
                          <?php echo get_sub_field('video')["iframe"]; ?>
                      </div>
                    </div><!-- /.tabs__content-->
                    <?php $j ++; ?>
                  <?php endwhile; ?>
              </div><!-- /.tabs-->
            </div><!-- /.container -->
          <?php endif; ?>
        </section><!-- /section -->
      <?php endwhile; ?>
    <?php endif; ?>

    <section class="cont-form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/form-bg2.jpg');">
      <div class="container">
        <div class="row">
          <?php echo do_shortcode('[contact-form-7 id="243" title="Изучим смету конкурентов"]'); ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->


    <?php if( have_rows('purity' ) ): ?>
      <?php while ( have_rows('purity' ) ) : the_row(); ?>
        <?php $image = get_sub_field('img'); ?>
        <section class="purity two-bloks">
          <div class="container">
            <div class="row">
              <?php if ( !empty($image)) : ?>
                <div class="col-md-6">
                  <div class="row">
                    <img src="<?php echo $image['url']; ?>">
                  </div>
                </div>
              <?php endif; ?>
              <div class="col-md-6">
                <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                <span class="red-subtitle"><?php the_sub_field('subtitle'); ?></span>
                <?php the_sub_field('content'); ?>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </section><!-- /section -->
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('brands' ) ): ?>
      <?php while ( have_rows('brands' ) ) : the_row(); ?>
        <section class="brand-slider-section">
          <div class="red-line">
            <div class="container">
              <div class="row">
                <h2><?php the_sub_field('title'); ?></h2>
                <?php the_sub_field('description'); ?>
              </div>
            </div>
          </div>
          <?php if( get_sub_field('brand_slider' ) ): ?>
            <div class="container">
              <div class="row">
                <div class="col-md-10 col-md-offset-1 brands_wrapp">
                  <div class="four-slides owl-carousel owl-theme">
                    <?php while ( has_sub_field('brand_slider' ) ) : ?>
                      <?php $image = get_sub_field('img'); ?>
                      <div class="ithem">
                        <?php if ( !empty(get_sub_field('link'))) : ?>
                          <a href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('slide_title'); ?>">
                        <?php endif; ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('slide_title'); ?>">
                        <?php if ( !empty(get_sub_field('link'))) : ?>
                         </a>
                        <?php endif; ?>
                      </div>
                    <?php endwhile; ?>
                  </div>
                </div>
              </div><!-- /.row -->
            </div><!-- /.container -->
          <?php endif; ?>
        </section><!-- / --><!-- section -->
      <?php  endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('our_projects') ): ?>
      <?php while ( have_rows('our_projects') ) : the_row(); ?>
        <?php $file = get_sub_field('file'); ?>
        <?php $image = get_sub_field('img'); ?>
        <section class="project-archiv" style="background-image: url(<?php echo $image['url']; ?>);">
          <div class="container">
            <div class="row">
              <div class="col-md-12 content">
                <h2><?php the_sub_field('title'); ?></h2>
                <?php if ( !empty($file)) : ?>
                  <a href="<?php echo $file['url']; ?>" download="<?php echo $file['url']; ?>" class="red-button button">Скачать каталог работ с подробными сметами</a>
                <?php endif; ?>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </section><!-- /section -->
      <?php  endwhile; ?>
    <?php endif; ?>

    <section class="news-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title">Новости</h2>
          </div>
        </div><!-- /.row -->
        <div class="row row-flex">
          <?php
          $category_id = 9; //ID Рубрики
          $args = array(
                  'cat' => '$category_id',
                  'post_type' => 'post',
                  'posts_per_page' => 3, //Количество постов в блоке ПОЛЕЗНЫЕ СТАТЬИ
                  //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                  );
          query_posts($args); ?>
          <?php get_template_part('loop'); ?>

          <?php wp_reset_query(); ?>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-md-2 col-md-offset-5">
            <a href="<?php echo get_category_link( $category_id ); ?>" class="red-button button">Все новости</a>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section class="cont-form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/form-bg3.jpg');">
      <div class="container">
        <div class="row">
          <?php echo do_shortcode('[contact-form-7 id="244" title="Нужен качественный ремонт"]'); ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <?php //get_template_part('pagination'); ?>

<?php get_footer(); ?>

