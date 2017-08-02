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
          <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
    <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
        <div class="row flex-row">
          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /section -->



<?php get_footer(); ?>
