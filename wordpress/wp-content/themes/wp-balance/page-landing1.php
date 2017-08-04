<?php /* Template Name: Landing 1 */ get_header(); ?>

    <section class="section-1 section__bg" role="main" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="top-title"><?php the_field('top_tiltle'); ?></div>
            <?php echo do_shortcode('[contact-form-7 id="556" title="Контактная форма Лендиг 1"]'); ?>

            <?php if( have_rows('title_icons' ) ): ?>

              <div class="title-icons white-bg">
                <?php while ( have_rows('title_icons' ) ) : the_row(); ?>
                  <?php $image = get_sub_field('icon'); ?>
                  <?php if ( !empty($image)) : ?>
                    <div class="title_icon">
                      <div class="icon_wrapp">
                        <img src="<?php echo $image['url']; ?>">
                      </div>
                    <?php endif; ?>
                    <p><?php the_sub_field('desc'); ?></p>
                  </div>
                <?php endwhile; ?>
              </div>

            <?php endif; ?>

          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <?php if( have_rows('atention' ) ): ?>
      <?php while ( have_rows('atention' ) ) : the_row(); ?>
        <?php $image = get_sub_field('img'); ?>
        <section class="purity atention two-bloks">
          <div class="container">
            <div class="row">
              <div class="col-md-12 title_wrapp">
                <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                <span class="red-subtitle"><?php the_sub_field('subtitle'); ?></span>
              </div>

              <?php if ( !empty($image)) : ?>
                <div class="col-md-6">
                  <div class="row">
                    <img src="<?php echo $image['url']; ?>">
                  </div>
                </div>
              <?php endif; ?>
              <div class="col-md-6">
                <?php the_sub_field('content'); ?>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </section><!-- /section -->
      <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('result_slider' ) ): ?>
      <?php while ( have_rows('result_slider' ) ) : the_row(); ?>
        <section class="results">
          <div class="red-line">
            <div class="container">
              <h3><?php the_sub_field('title'); ?></h3>
            </div>
          </div>
          <div class="container">

            <?php if( get_sub_field('sub_slider' ) ): ?>
              <div class="row slides_block">
                <div class="two-slides owl-carousel owl-theme">
                  <?php while ( has_sub_field('sub_slider' ) ) : ?>
                    <?php $image = get_sub_field('img'); ?>
                    <div class="ithem">
                      <?php if ( !empty($image)) : ?>
                        <img src="<?php echo $image['sizes']['medium']; ?>">
                      <?php endif; ?>

                    </div>
                  <?php endwhile; ?>
                </div><!-- /.two-slides -->
                <div class="clearfx"></div>
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                  <span class="button red-button">Забудьте об этом</span>
                </div>
              </div><!-- /.row -->
            <?php endif; ?>

            <?php if( have_rows('results' ) ): ?>
              <?php while ( have_rows('results' ) ) : the_row(); ?>
                <div class="row">
                  <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                </div><!-- /.row -->
                <div class="row flex-row results_block">
                  <?php if( get_sub_field('images' ) ): ?>
                    <?php while ( has_sub_field('images' ) ) : ?>
                      <?php $image = get_sub_field('img'); ?>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="row">
                          <div class="img_wrapp">
                            <?php if ( !empty($image)) : ?>
                              <img src="<?php echo $image['sizes']['medium']; ?>">
                            <?php endif; ?>
                            <a href="#" class="button red-button results_link">Посетить объект</a>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div><!-- /.row -->
                <div class="row">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <a href="#" class="button red-button">Смотреть еще</a>
                  </div>
                </div><!-- /.row -->
              <?php endwhile; ?>
            <?php endif; ?>

          </div><!-- /.container -->
        </section><!-- /section -->
      <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('zigzag' ) ): ?>
      <section class="zigzag-section">
        <div class="red-line">
          <div class="container">
            <h2>Путь к интерьеру мечты разбит на этапы</h2>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <?php $i = 1; ?>
                        <?php while ( have_rows('zigzag' ) ) : the_row(); ?>
              <?php $cont_class = 'content_left' ?>
              <?php $row_class = 'row-left' ?>
              <?php if (($i % 2) == 0){ ?>
                <?php $cont_class = 'content_right' ?>
                <?php $row_class = 'row-right' ?>
              <?php } ?>


                <div class="col-md-12">
                  <div class="row row-flex zigzag-block <?php echo $row_class; ?>">

                    <div class="col-sm-6 <?php echo $cont_class; ?>">

                        <div class="label-icon"><?php echo $i; ?></div>
                        <div class="title_wrapp">
                          <h3 class="section-title"><?php the_sub_field('subtitle'); ?></h3>
                        </div>
                        <p><?php the_sub_field('content'); ?></p>
                        <span class="time"><b>Срок : </b> <?php the_sub_field('time'); ?>.</span>
                        <?php $file = get_sub_field('file'); ?>
                        <?php if($file) { ?>

                          <div class="file">
                            <a href="<?php echo $file['url']; ?>" download="<?php echo $file['url']; ?>" class="red-button button">Скачать чек­лист</a>
                          </div>
                        <?php }  ?>

                    </div>
                    <div class="col-sm-6 video_wrapp">
                      <?php echo get_sub_field('video')["iframe"]; ?>
                    </div>

                  </div>
                </div>


              <div class="clearfix"></div>
              <?php $i ++; ?>
            <?php endwhile; ?>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /section -->

    <?php endif; ?>


    <section class="cont-form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/lend1-f1-bg.jpg');">
      <div class="container">
        <div class="row">
          <?php echo do_shortcode('[contact-form-7 id="561" title="Остались вопросы о нашей работе"]'); ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->



    <?php if( have_rows('statistic' ) ): ?>
      <?php while ( have_rows('statistic' ) ) : the_row(); ?>
        <section class="statistic-section">
          <div class="container">
            <div class="row">
              <div class="col-md-12 title_wrapp">
                <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
                <span class="red-subtitle"><?php the_sub_field('subtitle'); ?></span>
                <div class="clearfix"></div>
              </div>
              <div class="col-md-10 col-md-offset-1 icons_wrapp">
                <?php if( get_sub_field('icons' ) ): ?>
                  <?php while ( has_sub_field('icons' ) ) : ?>

                    <div class="num_icon_wrapp">
                      <div class="num_icon"><?php the_sub_field('tiltle'); ?></div>
                      <p><?php the_sub_field('desc'); ?></p>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>

              </div>

            </div><!-- /.row -->
          </div><!-- /.container -->
        </section><!-- /section -->
      <?php  endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('resons' ) ): ?>
      <?php while ( have_rows('resons' ) ) : the_row(); ?>
        <section class="resons-section">
          <div class="red-line">
            <div class="container">
              <h3><?php the_sub_field('title'); ?></h3>
            </div>
          </div>
          <div class="container">
            <div class="row icons flax-row">

              <?php if( get_sub_field('icons' ) ): ?>

                  <?php while ( has_sub_field('icons' ) ) : ?>
                    <?php $image = get_sub_field('img'); ?>
                    <div class="col-sm-4 col-xs-6 icon">
                      <div class="icon-wrapp">
                        <?php if ( !empty($image)) : ?>
                          <img src="<?php echo $image['sizes']['medium']; ?>">
                        <?php endif; ?>
                      </div>
                      <h3 class="icon-title"><?php the_sub_field('title'); ?></h3>
                    </div>
                  <?php endwhile; ?>

              <?php endif; ?>

            </div><!-- /.row -->
          </div><!-- /.container -->
        </section><!-- /section -->
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('clients_rewiews' ) ): ?>
      <?php while ( have_rows('clients_rewiews' ) ) : the_row(); ?>
        <section class="clients_rewiews">
          <div class="container">
            <div class="row">
              <div class="col-md-12 title_wrapp">
                <h2 class="section-title"><?php the_sub_field('title'); ?></h2>
              </div>
            </div><!-- /.row -->
            <?php if( get_sub_field('sub_slider' ) ): ?>
              <div class="row rewiews_wrapp">
                <?php while ( has_sub_field('sub_slider' ) ) : ?>

                  <div class="col-sm-6">
                    <div class="video_wrapp">
                      <?php echo get_sub_field('video')["iframe"]; ?>
                    </div>
                    <div class="content"><?php the_sub_field('content'); ?></div>
                    <div class="name"><?php the_sub_field('name'); ?></div>
                  </div>
                <?php endwhile; ?>
              </div><!-- /.row -->
            <?php endif; ?>
          </div><!-- /.container -->
        </section><!-- /section -->
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('reviews_slider' ) ): ?>
      <section class="cont-form rew-slider-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/lend1-rew-slide-bg.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="one-slide owl-carousel owl-theme">
                <?php while ( have_rows('reviews_slider' ) ) : the_row(); ?>
                  <div class="ithem">
                    <div class="slide-cont">
                      <div class="name"><?php the_sub_field('name'); ?></div>
                      <div class="content"><?php the_sub_field('content'); ?></div>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div><!-- /.two-slides -->
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /section -->
    <?php endif; ?>


    <section class="cont-form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/lend1-f2-bg.jpg');">
      <div class="container">
        <div class="row">
          <?php echo do_shortcode('[contact-form-7 id="562" title="Хотите заранее узнать полную стоимость ремонта"]'); ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->


<?php get_footer(); ?>

