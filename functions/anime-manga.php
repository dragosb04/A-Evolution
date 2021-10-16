<?php ##Anime/Manga 
?>
<div class="up px-1 pt-3 text-left">
    <h3 class=" text-evo"><b><i class="fas fa-grip-lines-vertical"></i> ANIME</b></h3>
</div>
<div class="container">
    <div class="row">
        <?php
        $args = array(
            'hide_empty' => 0,
            'pad_counts' => true,
            'child_of' => 3
        );
        $categories = get_categories($args);
        shuffle($categories);
        $ok = 0;
        foreach ($categories as $category) {
            if ($ok != 3) {
                $some = $category;
                $check = $some->cat_name;
                $image = get_field('cover', $some->taxonomy . '_' . $some->term_id);
                if ($check !== 'Anime' && $check !== 'Serii Anime Terminate' && $check !== 'Serii Anime în curs de traducere') {
                    echo
                    '<div class = "col-4 p-0 text-center">
                  <a href = "' . get_category_link($category->term_id) . '">
                  <div class="serie">
                  <img src="' . $image . '" alt="' . $check . '" class=" evo-bottom-rounded evo-top-rounded col-12 p-1" width="100%"/>
                  <div class="col-12  p-1 position-absolute" style="bottom: 0px; color: white;">
                  <div class = " blur title-post p-2 text-center evo-bottom-rounded-back ">
                  <b>' . $check . '</b>
                  </div>
                  </div>
                  </div>
                  </a>
                  </div>';
                    $ok++;
                }
            } else
                break;
        }
        ?>
    </div>
</div>
<div class="up px-1 pt-3 text-left">
    <h3 class=" text-evo"><b><i class="fas fa-grip-lines-vertical"></i> MANGA</b></h3>
</div>
<div class="col-12">

    <div class="row">
        <?php
        $args = array(
            'hide_empty' => 0,
            'pad_counts' => true,
            'child_of' => 4
        );
        $categories = get_categories($args);
        shuffle($categories);
        $ok = 0;
        foreach ($categories as $category) {
            if ($ok != 3) {
                $some = $category;
                $check = $some->cat_name;
                $image = get_field('cover', $some->taxonomy . '_' . $some->term_id);
                if ($check !== 'Manga' && $check !== 'Serii Manga în curs de traducere' && $check !== 'Serii Manga Terminate') {
                    echo
                    '<div class = "col-4 p-0 text-center">
                  <a href = "' . get_category_link($category->term_id) . '">
                  <div class="serie">
                  <img src="' . $image . '" alt="' . $check . '" class=" evo-bottom-rounded evo-top-rounded col-12 p-1" width="100%"/>
                  <div class="col-12  p-1 position-absolute" style="bottom: 0px; color: white;">
                  <div class = " blur title-post p-2 text-center evo-bottom-rounded-back ">
                  <b>' . $check . '</b>
                  </div>
                  </div>
                  </div>
                  </a>
                  </div>';
                    $ok++;
                }
            } else
                break;
        }
        ?>
    </div>
</div>