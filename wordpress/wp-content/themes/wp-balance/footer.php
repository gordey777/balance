    <?php if( have_rows('our_сustomers', 43 ) ): ?>
      <section class="customers-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="section-title">Наши клиенты</h2>
            </div>
            <?php while ( have_rows('our_сustomers', 43) ) : the_row(); ?>
              <?php the_sub_field('subtitle'); ?>
              <?php $image = get_sub_field('img'); ?>
              <div class="col-md-4 looper">
                <div class="feature-img">
                  <?php if ( !empty($image)) : ?>
                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="">
                  <?php endif; ?>
                </div>
                <h2 class="name"><?php the_sub_field('name'); ?></h2>
                <p><?php the_sub_field('desc'); ?></p>
              </div>
            <?php endwhile; ?>
            <div class="clearfix"></div>
            <div class="col-md-2 col-md-offset-5">
              <a href="<?php the_field('сustomers_link', 43); ?>" class="red-button button">Все клиенты</a>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /section -->
    <?php endif; ?>

  </div><!-- /wrapper -->
  <footer role="contentinfo">
    <div class="container">
      <div class="row">

        <nav class="footer_nav">
          <?php wpeFootNav(); ?>
        </nav>
      </div><!-- /.row -->
      <div class="row">
        <div class="col-sm-3 col-xs-4 copyright">
          <div class="row">
            <p class="">© 2017 <br> Все права защищены</p>
          </div>
        </div>

      <?php if( have_rows('socials', 43 ) ): ?>
        <div class="col-sm-6 col-xs-8 socials">
         <?php while ( have_rows('socials', 43 ) ) : the_row(); ?>
          <a href="<?php the_sub_field('link'); ?>" class="soc-item" title="<?php the_sub_field('title'); ?>"><i class="fa <?php the_sub_field('icon'); ?>"></i></a>
          <?php  endwhile; ?>
        </div>
      <?php endif; ?>


        <div class="col-sm-3 hidden-xs footer-tel">
          <div class="row">
            <a href="tel:<?php the_field('phone', 43); ?>" class="tel"><?php the_field('phone', 43); ?></a>
          </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </footer><!-- /footer -->


  <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
</body>
</html>

