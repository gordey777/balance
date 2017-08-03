<?php get_header(); ?>
          <?php $cat__ID = get_queried_object()->cat_ID; ?>
          <?php $field_term = 'category_' . $cat__ID; ?>


    <section class="section-1  section__bg" role="main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/portfolio_bg.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="section-title"><?php echo get_cat_name($cat__ID); ?></h1>
            <div class="col-sm-6 col-sm-offset-3">
              <a href="#modal_callback" rel="nofollow" data-toggle="modal" class="button red-button">Получить бесплатную консультацию</a>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <article  id="portfolio-section" class="portfolio-section">
      <div class="container">
        <div class="row filter_wrapp">
          <?php
          $field = get_field_object('type');
          $values = explode(',', $_GET['type']); ?>

          <?php if ($field) { ?>
            <div id="search-type" class="col-md-2">
              <?php foreach($field['choices'] as $choice_value => $choice_label): ?>
                <label>
                  <input type="checkbox<?php //echo $field['type']; ?>" name="<?php echo $field['name']; ?>" value="<?php echo $choice_value; ?>" <?php if (in_array($choice_value, $values)): ?> checked="checked" <?php endif; ?>>
                  <?php echo $choice_label; ?>
                </label>
              <?php endforeach; ?>
            </div>

          <?php } ?>

          <?php
          $field_style = get_field_object('design');
          $values_style = explode(',', $_GET['design']);

          if ($field) { ?>
            <div id="search-style" class="col-md-10">
              <?php foreach($field_style['choices'] as $choice_value_style => $choice_label_style): ?>
                <label class="col-md-3">
                  <input type="checkbox" name="<?php echo $field['name']; ?>" value="<?php echo $choice_value_style; ?>" <?php if (in_array($choice_value_style, $values_style)): ?> checked="checked" <?php endif; ?>>
                  <?php echo $choice_label_style; ?>
                </label>
              <?php endforeach;  ?>
            </div>
          <?php } ?>
        </div>
        <div class="row">
          <div id="no_results" style="display:none;">Нет результатов</div>
          <div class="col-xs-3 col-xs-offset-8">
            <div id="search_btn" class="red-button button">фильтровать</div>
          </div>
          <div class="clearfix"></div>
          <div class="col-xs-3">
            <div id="search_btn_reset" class="red-button button">Сброс</div>
          </div>
        </div><!-- /.row -->

<?php //echo do_shortcode( '[searchandfilter taxonomies="category,post_tag" types="radio,checkbox" ]' ); ?>





        <?php if (have_posts()): ?>
          <div class="row results">
            <?php while (have_posts()) : the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class('col-sm-6 looper portfolio-looper'); ?>>
                <a class="feature-img ithem" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php if ( has_post_thumbnail()) { ?>
                    <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } else { ?>
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                  <?php } ?>
                  <div class="portfolio-content-wrapp slide-cont_wrapp">
                    <div class="portfolio-content slide-cont">
                      <h2 class="inner-title"><?php the_title(); ?></h2>
                      <?php wpeExcerpt('wpeExcerpt20'); ?>
<!--                       <span class="type"><?php the_field('type'); ?></span>
<span class="style"><?php the_field('design'); ?></span> -->
                    </div>
                  </div>
                </a>
              </div><!-- /looper -->
            <?php endwhile; ?>
          </div><!-- /.row -->
        <?php endif; ?>
        <?php get_template_part('pagination'); ?>
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


<script>
  (function($) {

    $('#search_btn_reset').click(function(event) {
      window.location.replace('<?php echo home_url(); ?>/category/portfolio/#portfolio-section');
    });

    $('#search_btn').click(function(event) {
      var $search_type = $('#search-type'),
        vals = [];

      $('#search-type input:checked').each(function() {
        vals.push($(this).val());
      });
      vals = vals.join(",");

      var $search_style = $('#search-style'),
        vals_style = [];

      $('#search-style input:checked').each(function() {
        vals_style.push($(this).val());
      });
      vals_style = vals_style.join(",");

      var vals_style_url = '';
      if (vals_style.length != 0) {
        vals_style_url = '&design=' + vals_style;
      }
      window.location.replace('<?php echo home_url(); ?>/category/portfolio/?type=' + vals + vals_style_url + '#portfolio-section');

      console.log(vals);
      console.log(vals_styles);
    });

  })(jQuery);
  jQuery(document).ready(function() {
    if (!($("div").is(".results"))) {
      $('#no_results').css('display', 'inline-block');
    }
  });
</script>


<?php get_footer(); ?>
