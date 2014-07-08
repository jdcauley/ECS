<header class="banner container" role="banner">
  <div class="row">
    <div class="col-md-7 col-sm-7">
      <a href="<?php echo home_url('/') ?>" title="<?php bloginfo('name'); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/ecs-conservation-logo.png"></a>
    </div>
    <div class="col-md-5 col-sm-6">
      <div class="phone-numbers">
        <a class="east" href="tel:+1-800-444-7534">East US 1-800-444-7534</a>
      </div>
      <div class="phone-numbers">
        <a class="midwest" href="tel:+1-800-334-3628">Midwest US 1-800-334-3628</a>
      </div>
    </div>
  </div>
  <div class="nav-main" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav nav-justified'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
