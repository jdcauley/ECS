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
          <a class="tech-triad" href="http://techtriad.com" title=""></a>
        </div>
      </div>
    </div>
  </section>
</footer>

<?php wp_footer(); ?>
