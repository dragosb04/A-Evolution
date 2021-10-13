<?php
$i = 0;
$cat_name = 'category';
$categories = get_the_terms($post->ID, $cat_name);
foreach ($categories as $category) {
  if ($category->parent) {
    $i = $i + 1;
    $some = $category;
  }
}
$args = array(
  'posts_per_page' => 5,
  'offset' => 0,
  'cat' => $some->term_id,
  'orderby' => 'ID',
  'order' => 'DESC',
  'post_type' => 'post',
  'post_status' => 'publish',
  'suppress_filters' => false,
  'post__not_in' => array( $post->ID )
);
$query = new WP_Query($args); ?>
<?php while ($query->have_posts()) : $query->the_post(); ?>
  <div class="episode-container col-12 ng-scope">
            <div class="preview-data text-light">
              <div class="more"><a href="<?php the_permalink() ?>"><i class="fas fa-arrow-right"></i> <b><?php the_title(); ?></b></a></div>
            </div>
  </div>
<?php
endwhile;
wp_reset_postdata();
?>