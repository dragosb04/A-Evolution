<?php
/*
 * The Single Post
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="col-12 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 mb-2 px-0">
      <div class="p-2">
        <div class="up px-2 pt-3 text-left">
          <h3 class="text-evo"><b><i class="fas fa-file-signature"></i> <?php the_title(); ?></b></h3>
        </div>
        <hr class="line-evo my-1 mb-3">
        <div class="p-2 evo-bottom-rounded evo-top-rounded">
          <div class="col-12 text-center p-0">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="post_thumbnail" class="evo-bottom-rounded evo-top-rounded">
          </div>
          <div class="col-12 pt-2 p-0 smaller-font">
            <?php preview() ?>
          </div>
          <div class="text-light text-center py-3 p-0 post-descr"><b>
              <?php
              if (!empty(get_field('numele_postarii')))
                echo get_the_title() . ' - ' . get_field('numele_postarii');
              else
                echo get_the_title();
              ?></b>
          </div>
          <div class="col-12 pt-2 p-0 text-center smaller-font">
            <?php credits_preview() ?>
            <?php parteneriat() ?>
          </div>

          <?php
          $link = get_field('link');
          if ($link) {
            echo '<div class="col-12 p-sm-0 p-xs-0 p-lg-5 p-md-5 p-xl-5 p-lg-5 text-center"><a class="button" href="' . $link . '" target="_blank"><img src="https://cdn.discordapp.com/attachments/239836327636369408/866292386926034944/Buton-vizionare.png"/></a></div>';
          }
          ?>
          <div class="col-12 px-0 text-center">
            <?php
            $categories = get_the_category();
            if (!empty($categories)) {
              $last;
              $i = 0;
              $cat_name = 'category';
              $last_n;
              $categories = get_the_terms($post->ID, $cat_name);
              foreach ($categories as $category) {
                if ($category->parent) {
                  $last = $category->name;
                  $i++;
                  $category_link = $category->term_id;
                  $last_n = $category->name;
                }
              }
            }
            $isTouch = isset($last);
            if ($isTouch == false) {
              $last = "0% Serie";
            }
            try {
              echo '<a role="button"   style="font-size: 0.87rem;" class = "btn button-aevo my-4 btn-block" href="' . get_category_link($category_link) . '">' . "<i class='fas fa-folder-open'></i> " . esc_html($last_n) . '</a>';
            } catch (\Exception $e) {
              //$e->getMessage();
            }
            ?>
          </div>
          <div class="col-12 pt-3 p-0">
            <h4 class="text-evo px-2"><b><i class="fas fa-info"></i> Descriere postare</b></h4>
            <hr class="line-evo my-1 mb-3">
            <div class="post-descr text-left text-lg-center text-sm-left text-md-center text-xl-center">
              <?php the_content() ?>
            </div>
          </div>
          <?php
          $categories = get_the_category();
          if (!empty($categories)) {
            $last;
            $i = 0;
            $cat_name = 'category';
            $categories = get_the_terms($post->ID, $cat_name);
            foreach ($categories as $category) {
              if ($category->parent) {
                $last = $category->term_id;
              }
            }
          }
          if (!(empty(category_description($last))))
            echo '<div class = "col-12 pt-3 p-0"><h4 class=" px-2 text-evo"><b><i class="fas fa-info"></i> Descriere serie</b></h4><hr class="line-evo my-1 mb-3"><div class="post-descr text-left text-lg-center text-sm-left text-md-center text-xl-center">' . category_description($last) . '</div></div>';
          ?>
          <div class="up px-2 pt-3 text-left">
            <h4 class="text-evo"><b><i class="fas fa-info"></i> Mai multe postări din serie</b></h4>
          </div>
          <hr class="line-evo my-1 mb-3">
          <?php get_template_part('functions/categ-posts') ?>
          <div class="up pt-3 text-left">
        <?php
        // This continues in the single post loop
        if (comments_open() || get_comments_number()) :

          //comments_template();
          comments_template('/loops/single-post-comments.php');

        endif;
      endwhile;
    else :
      get_template_part('loops/404');
    endif;

        ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 my-2  px-0">
      <div class="p-2 pt-1">
        <?php get_template_part('functions/sidebar') ?>
      </div>
    </div>
    <?php
    /*
  If you revert to the traditional main column + sidebar layout, then
  comment out (or remove) the entire `main-widget-area` unit below.
  */
    ?>

    <!--<?php if (is_active_sidebar('main-widget-area')) : ?>
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
  <?php endif; ?>-->