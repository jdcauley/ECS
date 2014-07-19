<article <?php post_class('row blog-posts'); ?>>
<?php if (has_post_thumbnail()): ?>
  <div class="col-sm-4">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
    </a>
  </div>
  <div class="col-sm-8">
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
<?php else: ?>
  <div class="col-sm-4">
    <a href="<?php the_permalink(); ?>">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/news.jpg">
    </a>
  </div>
  <div class="col-sm-8">
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>
<?php endif; ?>
</article>
