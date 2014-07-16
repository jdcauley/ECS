<footer>
  <section class="content-info" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <?php dynamic_sidebar('footer-left'); ?>
        </div>
        <div class="col-sm-6">
          <?php dynamic_sidebar('footer-right'); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
        </div>
        <div class="col-sm-6">
          <a class="tech-triad" href="http://techtriad.com" title="Designed by TechTriad, Professional WordPress Theme Design in North Carolina" target="_blank<"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/techtriadinc.png" alt="TechTriad WordPress and Web Design Services"></a>
        </div>
      </div>
    </div>
  </section>
</footer>

<?php wp_footer(); ?>
