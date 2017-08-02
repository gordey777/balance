<?php get_header(); ?>

    <section class="section-1" role="main">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="section-title"></h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <article  class="news-section">
      <div class="container">
      <h1 class="search-title inner-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
        <div class="row flex-row">
          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /section -->



<?php get_footer(); ?>
