<?php get_header(); ?>



    <section class="section-1" role="main">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="section-title"><?php the_title(); ?></h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <article  class="news-section">
      <div class="container">
      <div class="row">


<?php echo $GLOBALS['wp_query']->request; ?>

        <?php
        $field = get_field_object('type');
        $values = explode(',', $_GET['type']); ?>
        <div id="search-type" class="col-md-3">
        <?php if ($field) {

        foreach($field['choices'] as $choice_value => $choice_label): ?>
        <label>
          <input type="<?php echo $field['type']; ?>" name="<?php echo $field['name']; ?>" value="<?php echo $choice_value; ?>" <?php if (in_array($choice_value, $values)): ?> checked="checked" <?php endif; ?>>
          <?php echo $choice_label; ?>
        </label>



        <?php endforeach; ?>
        </div>
        <?php } ?>


        <?php
        $field_style = get_field_object('styles');
        $values_style = explode(',', $_GET['styles']);

        //var_dump($field);

        if ($field) { ?>
        <div id="search-style" class="col-md-9">
        <?php
        foreach($field_style['choices'] as $choice_value_style => $choice_label_style): ?>
        <label class="col-md-3">
          <input type="checkbox" name="style" value="<?php echo $choice_value_style; ?>" <?php if (in_array($choice_value_style, $values_style)): ?> checked="checked" <?php endif; ?>>
          <?php echo $choice_label_style; ?>
        </label>



        <?php endforeach;  ?>
          </div>
        <?php } ?>

  </div>

<div class="col-xs-3 col-xs-offse-8">
  <div id="search_btn" class="red-button button">фильтровать</div>
</div>


<script>
  (function($) {

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

if (vals_style.length != 0){

  vals_style_url = '&styles=' + vals_style;

}


      window.location.replace('<?php echo home_url(); ?>/customsearch/?type=' + vals + vals_style_url);


      console.log(vals);
      console.log(vals_styles);
    });


  })(jQuery);

</script>
<?php //echo do_shortcode( '[searchandfilter taxonomies="category,post_tag" types="radio,checkbox" ]' ); ?>

        <div class="row flex-row">


          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('col-sm-4 looper'); ?>>
    <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) { ?>
        <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } else { ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } ?>
    </a><!-- /post thumbnail -->
    <span class="date"><?php the_field('type'); ?></span>
    <span class="date"><?php the_field('styles'); ?></span>

    <h2 class="inner-title"><?php the_title(); ?></h2>
    <?php wpeExcerpt('wpeExcerpt10'); ?>
    <a href="<?php the_permalink(); ?>" class="post-link">Подробнее</a>
  </div><!-- /looper -->
<?php endwhile; endif; ?>

          </div><!-- /.row -->
          <?php get_template_part('pagination'); ?>
<?php wp_reset_query(); ?>
      </div><!-- /.container -->
    </article><!-- /section -->



<?php get_footer(); ?>
