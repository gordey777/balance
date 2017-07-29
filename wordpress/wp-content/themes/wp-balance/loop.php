<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 looper'); ?>>
    <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) { ?>
        <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } else { ?>
        <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
      <?php } ?>
    </a><!-- /post thumbnail -->
    <span class="date"><?php the_time('j F Y'); ?></span>
    <h2 class="inner-title"><?php the_title(); ?></h2>
    <?php wpeExcerpt('wpeExcerpt20'); ?>
    <a href="<?php the_permalink(); ?>" class="post-link">Подробнее</a>
  </div><!-- /looper -->
<?php endwhile; endif; ?>
