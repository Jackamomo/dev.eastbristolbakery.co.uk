<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert">Your browser is out of date. Why not <a href="http://browsehappy.com/">upgrade to a newer browser</a>to experience this site as it is intended.</div><![endif]-->

  <?php /*
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    } */
  ?>
  
<?php if (is_front_page()) { /* this is nothing */ } else { get_template_part('templates/header'); } ?>

  <div id="wrap" class="container" role="document">
    <div id="content" class="row">
      <div id="main" class="<?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div>
      <?php if (roots_display_sidebar()) : ?>
      <aside id="sidebar" class="<?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php get_template_part('templates/sidebar'); ?>
      </aside>
      <?php endif; ?>
    </div><!-- /#content -->
  </div><!-- /#wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>