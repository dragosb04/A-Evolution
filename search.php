<?php
  get_header(); 
  b4st_main_before();
?>

<main id="site-main" class="my-5 container">
 <div class="row py-2 posts-box evo-top-rounded evo-bottom-rounded">
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
        <div class="up px-2 pt-3 text-center text-lg-left text-sm-left text-md-left text-xl-left">
          <h4 class=" text-evo"><b><i class="fas fa-search-dollar"></i> <?php _e('Căutări pentru ', 'b4st'); ?> &ldquo;<?php the_search_query(); ?>&rdquo;</b></h4>
        </div>
        <hr class="line-evo my-1 mb-3">
        <div class="col-12">
          <div class="row">
          <?php get_template_part('loops/search-results'); ?>
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
          <?php get_template_part('loops/search-results'); ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  */
  ?>

</main>

<?php 
 /* b4st_main_after();

  if(is_active_sidebar('main-widget-area')): ?>
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
