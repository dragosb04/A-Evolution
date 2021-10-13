<?php
/*
 * The Index Post (or excerpt)
 * ===========================
 * Used by index.php, category.php and author.php
 */
?>


<div role="article" id="post_<?php the_ID() ?>" <?php post_class("p-1 col-12 col-md-6 col-lg-6 col-xl-6"); ?>>
  <div class="post-box evo-bottom-rounded evo-top-rounded">
    <div class="col-12 p-0 post-image evo-top-rounded">
      <a href="<?php the_permalink(); ?>"><img class="post-image evo-top-rounded" src="<?php the_post_thumbnail_url() ?>">
        <div class="col-12 px-0 position-absolute blur text-left evo-top-rounded-back" style="top: 0; color: white;">
          <div class="p-2 title-post">
            <b><?php echo get_the_title() ?></b>
          </div>
        </div>
      </a>
    </div>
    <div class="about-post p-2">
      <div class="text-light post-name"><b>
          <?php
          if (!empty(get_field('numele_postarii')))
            echo get_field('numele_postarii');
          else
            echo get_the_title();
          ?></b>
      </div>
      <div class="text-light text-center post-name py-2">
        Vizionare plăcută!
      </div>
      <div class="pt-1 border-dark border-top text-muted extra-info text-right">
        <i class="fas fa-calendar"></i> <?php echo get_the_date() ?>&nbsp;|
        <i class="far fa-user"></i>
        <?php the_author_posts_link(); ?>&nbsp;|
        <i class="far fa-comment"></i>
        <?php
        $comment_count = get_comments_number();
        printf(
          /* translators: 1: comment count number. */
          esc_html(_nx('%1$s ', '%1$s ', $comment_count, 'b4st')),
          number_format_i18n($comment_count)
        );
        ?>
        <?php edit_post_link(__('&nbsp;| <i class="fas fa-wrench"></i> '));  ?>
      </div>
    </div>
  </div>
</div>