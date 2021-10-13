<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php b4st_navbar_before();?>
<div class=" photo-up">
<?php get_template_part('functions/photo')?>
</div>

<nav id="site-navbar" class="navbar navbar-expand-md navbar-dark bg-evo" style="box-shadow: 0px 0px 7px 1px black; z-index: 1; top: 0%; font-size: 1.1rem;">
  <div class="container">

  <a class="text-decoration-none text-white" href="<?php echo esc_url(home_url('/')); ?>"><img src="https://a-evolution.ro/ext/planetstyles/flightdeck/store/logoc.png" role="link" width="45px" height="45px" alt="aevo_logo"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>

      <?php b4st_navbar_search();?>    
    </div>

  </div>
</nav>
<?php b4st_navbar_after();?>