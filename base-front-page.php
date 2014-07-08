<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->
  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
    <div class="container features">
      <div class="features-inner">
      <?php $the_query = new WP_Query('post_type=focus&showposts=3'); ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php if (has_post_thumbnail()): ?>
            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
            <figure class="feature" style="background-image: url(<?php echo $src[0]; ?>);">
              <figcaption>
                <div class="feature-meta">
                  <h3 class="fig-title"><?php the_title(); ?></h3>
                  <p><?php echo excerpt(15); ?></p>
                  <a class="btn btn-primary btn-hovers pull-right" href="<?php the_permalink(); ?>">More</a>
                </div>
              </figcaption>
            </figure>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>
      </div>

  <div class="wrap container" role="document">

    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->

    <div class="row">
      <div class="col-sm-4">
        <?php $the_query = new WP_Query('showposts=3'); ?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="recent-post-wrapper">
        <?php if (has_post_thumbnail()): ?>
          <div class="recent-post-img">
            <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
          </div>
          <div class="recent-post-copy">
            <h4><?php the_title(); ?></h4>
            <p><?php echo excerpt(25); ?></p>
          </div>
          <a class="btn btn-secondary btn-xs" href="<?php the_permalink(); ?>">Read More</a>
        <?php else: ?>
          <h4><?php the_title(); ?></h4>
          <p><?php echo excerpt(15); ?></p>
          <a class="btn btn-default btn-xs" href="<?php the_permalink(); ?>">Read More</a>
        <?php endif; ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

  </div><!-- /.wrap -->


  <?php get_template_part('templates/footer'); ?>

</body>
</html>
