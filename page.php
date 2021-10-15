<?php
get_header();
b4st_main_before();
?>

<?php /* if (function_exists('dimox_breadcrumbs')) { ?>
  <?php dimox_breadcrumbs(); ?>
<?php } */ ?>

<main id="site-main text-light" class="mb-5 mt-2 container">
  <div class="row py-2">
    <div class="col-12 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 mb-2 mt-2 px-0">
      <?php get_template_part('loops/page-content'); ?>
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
          <?php get_template_part('loops/page-content'); ?>
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

get_footer();
?>