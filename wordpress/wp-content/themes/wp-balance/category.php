<?php get_header(); ?>
          <?php $cat__ID = get_queried_object()->cat_ID; ?>
          <?php $field_term = 'category_' . $cat__ID; ?>


    <section class="section-1" role="main">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="section-title"><?php echo get_cat_name($cat__ID); ?></h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <article  class="news-section">
      <div class="container">
        <div class="row flex-row">
          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /section -->



<?php get_footer(); ?>
