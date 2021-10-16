<?php
get_header();
b4st_main_before();
?>

<main id="site-main text-light" class="my-5 container">
  <div class="row">
    <div class="col-12 px-0 posts-box evo-top-rounded evo-bottom-rounded">
      <div class="post-box evo-top-rounded evo-bottom-rounded col-12 px-0 mb-2 p-3">
        <div class="row">
          <div class="col-xl-3 text-center col-lg-3 col-md-4 col-sm-4 col-xs-12 p-2">
            <img src="
          <?php $term = get_queried_object();
          $cover = the_field('cover', $term); ?>" class="evo-top-rounded evo-bottom-rounded px-2">
          </div>
          <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-xs-12 pt-2 px-4">
            <h3 class="mb-1"><b><?php echo single_cat_title(); ?></b></h3>
            <?php
            $term = get_queried_object();
            $titlu = get_field('titlu_alternativ', $term);
            if ($titlu == true) {
              echo ('<div class = "text-muted" style="font-size: 18px;"><b>' . $titlu . '</b></div>');
            }
            ?>
            <?php echo '<div class = "col-12 px-0">' . category_description() . '</div>'; ?>
            <hr class="line-evo my-1 mb-2">
            <div class="py-0">
              <div class="col-12">
                <div class="row">
                    <?php
                    $term = get_queried_object();
                    $episodes = get_field('episodes', $term);
                    $genuri = get_field('genuri', $term);
                    $myanimelist = get_field('myanimelist', $term);
                    $status = get_field('status', $term);
                    $perioada = get_field('perioada', $term);
                    $torrent = get_field('torrent', $term);
                    $studio = get_field('studio', $term);
                    if ($episodes == true) {
                      echo ('<div class= "col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0"> Nr. episoade:  <b>' . $episodes . '</b></div>');
                    }
                    if ($genuri == true) {
                      echo ('<div class= "col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">Genuri: <b>' . $genuri . '</b></div>');
                    }
                    if ($perioada == true) {
                      echo ('<div class= "col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">Perioada apariției: <b>' . $perioada . '</b></div>');
                    }
                    if ($studio == true) {
                      echo ('<div class= "col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">Studio: <b>' . $studio . '</b></div>');
                    }
                    if ($status == true) {
                      if ($status && in_array('Terminat', $status)) {
                        echo '<div class = "col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">Status: <b>Terminat</b></div>';
                      } else if ($status && in_array('Ongoing', $status)) {
                        echo '<div class = "col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">Status:<b> Ongoing</b></div>';
                      }
                    }
                    if ($myanimelist == true) {
                      echo ('<div class = "col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0"><a href ="' . $myanimelist . '" role = "button" target="_blank"><i class="fas fa-link"></i> MyAnimeList</a></div>');
                    }
                    if ($torrent == true) {
                      echo ('<div class = "col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0"><a href ="' . $torrent . '" role = "button" target="_blank"><i class="fas fa-download"></i> Link Torrent</a></div>');
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-12 mb-2">
        <div class="p-2">
          <div class="row">
            <div class="col-12 mb-2 px-0">
              <div class="up px-1 py-3 text-left">
                <h3 class=" text-evo"><b><i class="fas fa-grip-lines-vertical"></i> Listă de postări</b></h3>
              </div>
              <div class="col-12">
                <div class="row">
                  <?php get_template_part('loops/series-loop'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
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
          <header class="mb-5">
            <h1>
              <?php _e('Category: ', 'b4st'); echo single_cat_title(); ?>
            </h1>
          </header>
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

/*if (is_active_sidebar('main-widget-area')) : ?>
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