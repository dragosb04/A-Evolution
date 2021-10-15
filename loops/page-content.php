<?php
/*
 * The Page Content Loop
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="post_<?php the_ID() ?>" <?php post_class() ?> class="mt-2">
      <div class="up anime-descr col-12 px-5 my-3 mb-5 py-3 evo-bottom-rounded evo-top-rounded text-center">
        <div class="title-evo page-name text-evo"><b> <?php the_title(); ?></b>
        </div>
      </div>
      <div class="p-2">
      <?php the_content() ?>
      </div>

    </div>
<?php
  endwhile;
else :
  get_template_part('loops/404');
endif;
?>