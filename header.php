<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#585696">

  <?php
  if (is_single() == true) {
    $post_tags = get_the_tags();
    $tags = "";
    if ($post_tags) {
      foreach ($post_tags as $tag) {
        $tags .= $tag->name . ', ';
      }
    }
    echo '<meta property="og:site_name" content="' . get_bloginfo('name') . ' - ' . get_the_title() . '">
  <meta property="og:title" content="' . get_bloginfo('name') . ' - ' . get_the_title() . '" />
  <meta property="og:url" content="' . get_the_permalink() . '" />
  <meta property="og:image" content="' . get_the_post_thumbnail_url() . '" />
  <meta name="twitter:image:src" content="' . get_the_post_thumbnail_url() . '">
  <meta property="og:description" content="' . $tags . '" />
  <meta name="Description" content="' . $tags . '">
  <meta name="keywords" content="' . $tags . '">
  <script type="application/ld+json">
  {
    "@context": "http:\/\/schema.org",
    "@type": "WebSite",
    "@id": "' . get_bloginfo('url') . '",
    "name": "' . get_the_title() . '",
    "alternateName": "' . get_bloginfo('name') . '",
    "description": "Aici avem ' . get_the_title() . ' subtitrat în română doar pentru voi. Disponibil Online cât și offline. Vă dorim vizionare plăcută!",
    "author": "' . get_the_author_meta('display_name') . '",
    "url": "' . get_the_permalink() . '",
    "logo": "https://site.a-evolution.ro/wp-content/uploads/2021/03/cropped-logoc-2.png",
    "image": "' . get_the_post_thumbnail_url() . '",
    "keywords": "' . $tags . '",
    "isFamilyFriendly": "True",
    "thumbnailUrl": "' . get_the_post_thumbnail_url() . '",
    "datePublished": "' . get_the_date() . '",
    "headline": "' . get_the_title() . '",
    "creator": "Shinobi-AM",
    "isAccessibleForFree": "True"
  }
  </script>';
  } else if (is_category() == true) {
    $term = get_queried_object();
    $about = ' ';
    if (!is_null(get_field('titlu_alternativ', $term)))
      $about .= get_field('titlu_alternativ', $term) . ' ';

    if (!is_null(get_field('capitole', $term)))
      $about .= get_field('capitole', $term) . ' ';

    if (!is_null(get_field('volume', $term)))
      $about .= get_field('volume', $term) . ' ';

    if (!is_null(get_field('episodes', $term)))
      $about .= get_field('episodes', $term) . ' ';

    if (!is_null(get_field('studio', $term)))
      $about .= get_field('studio', $term) . ' ';

    if (!is_null(get_field('genuri', $term)))
      $about .= get_field('genuri', $term) . ' ';

    if (!is_null(get_field('perioada', $term)))
      $about .= get_field('perioada', $term) . ' ';

    if (!is_null(get_field('descriere', $term)))
      $about .= get_field('descriere', $term);
    echo '<meta property="og:site_name" content="' . get_bloginfo('name') . '">
  <meta property="og:title" content="' . $term->name . '" />
  <meta property="og:url" content="' . get_bloginfo('url') . '" />
  <meta property="og:image" content="' . categ() . '" />
  <meta name="twitter:image:src" content="' . categ() . '">
  <meta property="og:description" content="' . $about . '" />
  <meta name="Description" content="' . $about . '">
  <meta name="keywords" content="">
  <script type="application/ld+json">
  {
    "@context": "http:\/\/schema.org",
    "@type": "WebSite",
    "@id": "' . get_bloginfo('url') . '",
    "url": "' . get_bloginfo('url') . '",
    "name": "' . get_bloginfo('name') . '",
    "alternateName": "' . get_bloginfo('name') . '",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "' . get_bloginfo('url') . '/?s={search_term_string}",
      "query-input": "required name=search_term_string"
    },
    "image": "' . categ() . '",
    "logo": "' . categ() . '",
    "isFamilyFriendly": "True",
    "keywords": "",
    "thumbnailUrl": "' . categ() . '",
    "headline": "' . get_bloginfo('name') . '",
    "creator": "Shinobi-AM",
    "isAccessibleForFree": "True"
  }
  </script>';
  } else
    echo '<meta property="og:site_name" content="' . get_bloginfo('name') . '">
  <meta property="og:title" content="' . get_bloginfo('name') . '" />
  <meta property="og:url" content="' . get_bloginfo('url') . '" />
  <meta property="og:image" content="https://site.a-evolution.ro/wp-content/uploads/2021/03/cropped-logoc-2.png" />
  <meta name="twitter:image:src" content="https://site.a-evolution.ro/wp-content/uploads/2021/03/cropped-logoc-2.png">
  <meta property="og:description" content="ANIME ONLINE ROSUB || MANGA ONLINE ROSUB" />
  <meta name="Description" content="ANIME ONLINE ROSUB || MANGA ONLINE ROSUB">
  <meta name="keywords" content="">
  <script type="application/ld+json">
  {
    "@context": "http:\/\/schema.org",
    "@type": "WebSite",
    "@id": "' . get_bloginfo('url') . '",
    "url": "' . get_bloginfo('url') . '",
    "name": "' . get_bloginfo('name') . '",
    "alternateName": "' . get_bloginfo('name') . '",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "' . get_bloginfo('url') . '/?s={search_term_string}",
      "query-input": "required name=search_term_string"
    },
    "image": "https://site.a-evolution.ro/wp-content/uploads/2021/03/cropped-logoc-2.png",
    "logo": "https://site.a-evolution.ro/wp-content/uploads/2021/03/cropped-logoc-2.png",
    "isFamilyFriendly": "True",
    "keywords": "",
    "thumbnailUrl": "https://site.a-evolution.ro/wp-content/uploads/2021/03/cropped-logoc-2.png",
    "headline": "' . get_bloginfo('name') . '",
    "creator": "Shinobi-AM",
    "isAccessibleForFree": "True"
  }
  </script>
  ';
  ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php b4st_navbar_before(); ?>
  <div class=" photo-up">
    <?php get_template_part('functions/photo') ?>
  </div>

  <nav id="site-navbar" class="navbar navbar-expand-md navbar-dark bg-evo" style="box-shadow: 0px 0px 7px 1px black; z-index: 1; top: 0%; font-size: 1.1rem;">
    <div class="container">

      <a class="text-decoration-none text-white" href="<?php echo esc_url(home_url('/')); ?>"><img src="https://site.a-evolution.ro/wp-content/uploads/2021/10/A-Evolution_Logo-hallo.png" role="link" width="45px" height="45px" alt="aevo_logo"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarDropdown">
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new b4st_walker_nav_menu()
        ));
        ?>

        <?php b4st_navbar_search(); ?>
      </div>

    </div>
  </nav>
  <?php b4st_navbar_after(); ?>