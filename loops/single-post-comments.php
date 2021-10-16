<?php
/*
 * Custom Feedback
 * ===============
 * https://codex.wordpress.org/Function_Reference/wp_list_comments#Comments_Only_With_A_Custom_Comment_Display
*/

function b4st_comment($comment, $args, $depth)
{
  $GLOBALS['comment'] = $comment;
  extract($args, EXTR_SKIP);
  if ('div' == $args['style']) {
    $tag = 'div';
    $add_below = 'comment';
  } else {
    $tag = 'li';
    $add_below = 'div-comment';
  }
?>

  <<?php echo $tag ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ('div' != $args['style']) : ?>
      <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
      <?php endif; ?>

      <div class="comment-author vcard">
        <div class="float-left pr-3">
          <?php echo get_avatar($comment->comment_author_email, $size = '52'); ?>
        </div>
        <div>
          <h4 class="m-0"><?php comment_author(); ?></h4>
          <p class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf('%1$s ' . __('at', 'b4st') . ' %2$s', get_comment_date(), get_comment_time()) ?></a></p>
          <?php if ($comment->comment_approved == '0') : ?>
            <p><em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'b4st') ?></em></p>
          <?php endif; ?>
          <?php if ($comment->comment_approved == '1') : ?>
            <p class="comment-approved"><?php comment_text() ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="reply">
        <p>
          <?php comment_reply_link(
            array_merge($args, array(
              'add_below' => $add_below,
              'reply_text' => __('<i class="fas fa-reply"></i> Răspunde', 'textdomain'),
              'depth' => $depth,
              'max_depth' => $args['max_depth']
            ))
          ); ?>
          <?php edit_comment_link('<span class="btn button-aevo text-light my-1">' . __('<i class="fas fa-edit"></i> Editează comentariul', 'b4st') . '</span>', ' ', ''); ?>
        </p>
      </div>

      <?php if ('div' != $args['style']) : ?>
      </div>
    <?php endif;
    }

    /**!
     * Custom Comments Form
     */

    // Do not delete this section
    if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
      die('Please do not load this page directly. Thanks!');
    }
    if (post_password_required()) { ?>
    <section id="post-comments">
      <div class="comments-wrap">
        <div class="alert alert-warning">
          <?php _e('This post is password protected. Enter the password to view comments.', 'b4st'); ?>
        </div>
      </div>
    </section>
  <?php
      return;
    } // End do not delete section

    if (have_comments()) : ?>

  <?php
    else :
      if (!comments_open()) :
        echo '<section id="post-comments"><div class="comments-wrap"><p class="alert alert-info">' . __('Comments are closed for this post.', 'b4st') . '</p></div></section>';
      endif;
    endif;
  ?>

  <?php if (comments_open()) : ?>
    <section id="respond" class="post-box evo-top-rounded evo-bottom-rounded p-3 mt-2">
      <div class="text-light mt-2">
        <h5><b><?php comment_form_title(__('Lasă un comentariu', 'b4st'), __('Răspuns către %s', 'b4st')); ?></b></h5>
        <h6 class="shinobi-color-red">Comentariile vor fi moderate de administratori mai întâi, iar abia apoi vor apărea postate.</h6>
      </div>
      <div class="comments-wrap">
        <p><?php cancel_comment_reply_link(); ?></p>
        <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
          <p><?php printf(__('Trebuie să fii <a href="%s">conectat</a> pentru a posta un comentariu.', 'b4st'), wp_login_url(get_permalink())); ?></p>
        <?php else : ?>

          <form action="<?php echo site_url('/wp-comments-post.php') ?>" method="post" id="commentform">

            <?php if (is_user_logged_in()) : ?>
              <p>
                <?php printf(__('Conectat(ă) ca', 'b4st') . ' <a href="%s/wp-admin/profile.php">%s</a>.', get_option('url'), $user_identity); ?>
                <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Deconectează-te', 'b4st'); ?>"><?php echo __('Deconectează-te', 'b4st') . ' <i class="fas fa-arrow-right"></i>'; ?></a>
              </p>
            <?php else : ?>

              <div class="form-group">
                <label for="author"><?php _e('Numele tău', 'b4st');
                                    if ($req) echo ' <span class="text-muted">' . __('obligatoriu', 'b4st') . '</span>'; ?></label>
                <input type="text" class="form-control" name="author" id="author" placeholder="<?php _e('Nume', 'b4st'); ?>" value="<?php echo esc_attr($comment_author); ?>" <?php if ($req) echo 'aria-required="true"'; ?>>
              </div>

              <div class="form-group">
                <label for="email"><?php _e('Adresa de email', 'b4st');
                                    if ($req) echo '&nbsp;<span class="text-muted">' . _e(' (obligatoriu, dar nu va fi afișată)', 'b4st') . '</span>'; ?></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="<?php _e('Adresa de email', 'b4st'); ?>" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo 'aria-required="true"'; ?>>
              </div>

            <?php endif; ?>

            <div class="form-group">
              <label for="comment"><?php _e('Comentariul tău', 'b4st'); ?></label>
              <textarea name="comment" class="form-control bg-dark text-light" id="comment" style="font-size: 15px;" placeholder="<?php _e('Înainte de a comenta, te rugăm să înțelegi că episoadele/capitolele manga se fac în timpul nostru liber. Nu suntem plătiți pentru acest lucru, așa că atunci când dorești să scrii comentarii precum „Când apare episodul/capitolul X?” sau „Nu mai postați odată următorul episod/capitol?” gândește-te că nu vei ajuta cu nimic, ci doar vei scădea din motivația membrilor care se ocupă de seria respectivă. Mulțumim pentru înțelegere!', 'b4st'); ?>" rows="8" aria-required="true"></textarea>
            </div>

            <p><input name="submit" class="btn button-aevo-comment" type="submit" id="submit" value="Postează comentariul"></p>

            <?php comment_id_fields(); ?>
            <?php do_action('comment_form', $post->ID); ?>
          </form>
        <?php endif; ?>
      </div>
    </section>
    <secion id="post-comments">
      <div class="post-box evo-top-rounded evo-bottom-rounded p-3 mt-2">
        <div class="text-light mt-2" style="font-size: 13px;">
          <h5><b>
              <?php printf(
                /* translators: 1: title. */
                esc_html__('Comentarii', 'b4st'),
                '<span>' . get_the_title() . '</span>'
              ); ?>
            </b></h5>
        </div>
        <div class="card-body">
          <p><i class="far fa-comment"></i> <?php
                                            $comment_count = get_comments_number();
                                            if ('1' === $comment_count) {
                                              printf(
                                                /* translators: 1: title. */
                                                esc_html__('Un comentariu la &ldquo;%1$s&rdquo;', 'b4st'),
                                                '<span>' . get_the_title() . '</span>'
                                              );
                                            } else {
                                              printf(
                                                /* translators: 1: comment count number, 2: title. */
                                                esc_html(_nx('%1$s comentariu la &ldquo;%2$s&rdquo;', '%1$s comentarii la „%2$s”', $comment_count, 'comments title', 'b4st')),
                                                number_format_i18n($comment_count),
                                                '<span>' . get_the_title() . '</span>'
                                              );
                                            }
                                            ?>
          </p>

          <ul class="commentlist">
            <?php wp_list_comments('type=comment&callback=b4st_comment'); ?>
          </ul>

          <p class="text-muted">
            <?php paginate_comments_links(); ?>
          </p>
        </div>
      </div>
      </section>
    <?php endif; ?>