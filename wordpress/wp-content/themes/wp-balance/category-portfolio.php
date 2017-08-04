<?php get_header(); ?>
          <?php $cat__ID = get_queried_object()->cat_ID; ?>
          <?php $field_term = 'category_' . $cat__ID; ?>


    <section class="section-1 section__bg" role="main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/portfolio_bg.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="top-title">Сохраняем баланс: здравый смысл в технических вопросах и творческий полет — в разработке концепции</h1>
            <p class="white-bg">Дизайнеры компании «Баланс» разрабатывают исключительные решения для каждого заказчика, применяя свой многогранный опыт, нетривиальное творческое воображение и точное знание механизмов взаимодействия между всеми элементами дизайна помещения разного назначения. Мы совместим практичность с креативностью, эргономичность с неожиданным способом реализации стандартных функций.</p>
            <div class="col-sm-6 col-sm-offset-3">
              <a href="#modal_callback" rel="nofollow" data-toggle="modal" class="button red-button">Получить бесплатную консультацию</a>
            </div>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <article  id="portfolio-section" class="portfolio-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 cat_content">
            <?php echo category_description($cat__ID); ?>
          </div>
        </div><!-- /.row -->
        <div class="row filter_wrapp">

          <div id="no_results">
            <h2>По Вашему запросу ничего не найдено. <a href="<?php echo get_category_link( $cat__ID ) ?>" class="reset">Вернутся назад?</a></h2>
          </div>

          <?php
          $field = get_field_object('type');
          $values = explode(',', $_GET['type']); ?>

          <?php if ($field) { ?>
            <div id="search-type" class="col-sm-2">

                <h3 class="filter-title">Тип помищения</h3>
                <div class="clerfix"></div>
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

          if ($field_style) { ?>

            <div id="search-style" class="col-sm-10">

                <h3 class="filter-title">Стиль</h3>
                <div class="clerfix"></div>
                <?php foreach($field_style['choices'] as $choice_value_style => $choice_label_style): ?>
                  <label class="">
                    <input type="checkbox" name="<?php echo $field['name']; ?>" value="<?php echo $choice_value_style; ?>" <?php if (in_array($choice_value_style, $values_style)): ?> checked="checked" <?php endif; ?>>
                    <?php echo $choice_label_style; ?>
                  </label>
                <?php endforeach;  ?>

            </div>
          <?php } ?>
          <div class="clearfix"></div>
          <div class="col-sm-3 col-xs-6">
            <!-- <div id="search_btn_reset" class="gray-button button">Сброс</div> -->
          </div>
          <div class="col-sm-3 col-sm-offset-6 col-xs-6">
            <div id="search_btn" class="red-button button">Отфильтровать</div>
          </div>

        </div><!-- /.row -->


<?php //echo do_shortcode( '[searchandfilter taxonomies="category,post_tag" types="radio,checkbox" ]' ); ?>





        <?php if (have_posts()): ?>
          <div class="row results">
            <?php while (have_posts()) : the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class('col-sm-6 looper portfolio-looper'); ?>>
                <a class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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
            <div class="clearfix"></div>
            <?php get_template_part('pagination'); ?>
          </div><!-- /.row -->
        <?php endif; ?>

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
      window.location.replace('<?php echo get_category_link( $cat__ID ) ?>');
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
        vals_style_url = 'design=' + vals_style;
      }
      var vals_url = '';
      if (vals.length != 0) {
        vals_url = '?type=' + vals;
      }

      if ((vals.length == 0) && (vals_style.length != 0)) {
        vals_style_url = '?' + vals_style_url;
      } else if ((vals.length != 0) && (vals_style.length != 0)) {
        vals_style_url = '&' + vals_style_url;
      }


      window.location.replace('<?php echo get_category_link( $cat__ID ) ?>' + vals_url + vals_style_url);

      console.log(vals);
      console.log(vals_styles);
    });

  })(jQuery);
  jQuery(document).ready(function() {
    if (!($("div").is(".results"))) {
      $('.filter_wrapp').addClass('no_results');
    } else{
      $('.filter_wrapp').removeClass('no_results');
    }
  });
</script>


<?php get_footer(); ?>
