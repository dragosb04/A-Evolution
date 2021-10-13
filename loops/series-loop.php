<?php
/*
 * Category Loop
 * =================================================================
 * If you require only post excerpts to be shown in index and category pages, 
 * use the [---more---] block within blog posts.
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php get_template_part('loops/series-posts', get_post_format()); ?>

  <?php endwhile; ?>

  <nav class="col-12 p-2">
    <div class="row ">
      <div class="text-left col-6"><?php next_posts_link('<i class="fas fa-caret-square-left fa-2x"></i>') ?></div>
      <div class="text-right col-6"><?php previous_posts_link('<i class="fas fa-caret-square-right fa-2x"></i>') ?></div>

    </div>
  </nav>

<?php
else :
  get_template_part('loops/404');
endif;
?>