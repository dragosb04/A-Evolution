<?php
get_header();
b4st_main_before();
?>

<main id="site-main text-light" class="mb-5 mt-2 container">
  <div class="row py-2">
      <?php get_template_part('functions/carousel') ?> 
  <div class="col-12 px-1">
    <div class="text-center">
      <?php 
      if ( is_active_sidebar( 'sidebar-1' ) ) : //check the sidebar if used.
        dynamic_sidebar( 'sidebar-1' );  // show the sidebar.
        endif;
      ?>
    </div>
  </div>
    <div class="col-12 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 mb-2 px-0">
      <div class="p-2">
        <div class="up px-1 py-3 text-left">
          <h3 class=" text-evo"><b><i class="fas fa-grip-lines-vertical"></i> POSTĂRI PRINCIPALE</b></h3>
        </div>
        <div class="col-12">
          <div class="row">
            <?php get_template_part('loops/index-loop'); ?>
          </div>
        </div>
        <?php get_template_part('functions/anime-manga') ?>
      </div>
    </div>
    <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 my-2  px-0">
      <div class="p-2 pt-1">
        <?php get_template_part('functions/sidebar') ?>
      </div>
    </div>
  </div>

  <?php
  /*
  Did you want a traditional article-plus-sidebar layout?
  =======================================================
  Use this below instead of the one line above -- and 
  remove some of the CSS styles controlling `.entry-content`
  
  <div class="container">
    <div class="row"> 
      <div class="col-sm">
        <div id="content" role="main">
          <?php get_template_part('loops/index-loop'); ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  */
  ?>

</main>

<?php
b4st_main_after();

/*if(is_active_sidebar('main-widget-area')): ?>
  <section id="site-main-widgets" class="bg-light">
    <div class="container">
      <div class="row pt-5 pb-4" id="main-widget-area" role="navigation">
        <?php
          b4st_main_widgets_before();
          dynamic_sidebar('main-widget-area');
          b4st_main_widgets_after();
        ?>
      </div>
    </div>
  </section>
  <?php endif;
*/
get_footer();
?>