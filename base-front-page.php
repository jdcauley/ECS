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

  <main class="wrap container" role="document">
    <section class="values">

    </section>

    <div class="hr-label">
      <span class="hr-line"></span>
      <span class="hr-text">ECS Conservation Services</span>
    </div>

    <section class="content">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1" role="main">
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
      </div>
    </section>

    <section class="services">
      <div class="row">
        <div class="col-sm-4">
          <?php dynamic_sidebar('services-widget-1'); ?>
        </div>
        <div class="col-sm-4">
          <?php dynamic_sidebar('services-widget-2'); ?>
        </div>
        <div class="col-sm-4">
          <?php dynamic_sidebar('services-widget-3'); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-2">
          <?php dynamic_sidebar('services-widget-4'); ?>
        </div>
        <div class="col-sm-4">
          <?php dynamic_sidebar('services-widget-5'); ?>
        </div>
      </div>
    </section>

    <div class="hr-label">
      <span class="hr-line"></span>
      <span class="hr-text">ECS Conservation Offers</span>
    </div>

    <section class="offers">
      <div class="row">
        <div class="col-sm-4">
          <h3 class="home-news">News</h3>
          <?php $the_query = new WP_Query('showposts=3'); ?>
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <div class="recent-post-wrapper">
          <?php if (has_post_thumbnail()): ?>
            <div class="recent-post-img">
              <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
            </div>
            <div class="recent-post-copy">
              <p>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -
                <?php echo excerpt(25); ?>
              </p>
            </div>
          <?php else: ?>
            <p>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> -
              <?php echo excerpt(25); ?>
            </p>
          <?php endif; ?>
          </div>
          <?php wp_reset_postdata(); ?>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="col-sm-8">
          <?php dynamic_sidebar('home-tabs'); ?>
        </div>
      </div>
    </section>
  </main><!-- /.wrap -->


  <?php get_template_part('templates/footer'); ?>

</body>
</html>
