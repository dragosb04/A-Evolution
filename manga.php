<?php /* Template Name: Manga */
get_header();
wp_head();
b4st_main_before();
error_reporting(E_ERROR | E_PARSE);
?>
<main id="site-main" class="page page-template manga text-light">
    <div class="container mb-5 mt-2">
        <div class="col-12 px-0">
            <div class="row">
                <div class="up anime-descr col-12 px-5 my-3 pt-5 pb-3 evo-bottom-rounded evo-top-rounded text-center"
                style="<?php
                echo "background : url('" . get_the_post_thumbnail_url() . "') no-repeat center; background-size: cover;"
                ?>">
                    <div class="title-evo page-name text-evo pb-3"><b> <?php the_title(); ?></b>
                        <br><h5>Lasă-te purtat de curiozitate și afundă-te în lecturarea seriilor noastre!</h5>
                    </div>
                    <h6 class="up-text text-left"><b> Caută serie după nume ↴</b></h6>
                    <div class="input-group bg-search-bar evo-bottom-rounded evo-top-rounded">
                        <div class="input-group-prepend text-light border border-dark rounded rounded-left bg-search-bar" style="color: white;">
                            <span class="input-group-text bg-search-bar"><i class="fas fa-search" style="color: white;"></i></span>
                        </div>
                        <input class="form-control border border-dark bg-search-bar" style="color: black;" id="myInput" type="text" placeholder="Caută serie după nume...">
                    </div>
                </div>
                <div class="post-box col-12 back-text-manga p-2 my-3 evo-bottom-rounded evo-top-rounded">
                    <div class="up px-1 py-2 text-left">
                        <span style="font-size: 1.75rem;" class=" text-evo"><b><i class="fas fa-grip-lines-vertical"></i> Serii în curs de traducere</b></span>
                    </div>
                </div>
                <?php
                $i = 0;
                $cat_name = 'category';
                $categories = get_categories();
                foreach ($categories as $category) {
                    $i = $i + 1;
                    $some = $category;
                    $type;
                    $image = get_field('cover', $some->taxonomy . '_' . $some->term_id);
                    if (is_null($image)) {
                        $image = 'https://shinobi-am.com/wp-content/uploads/2021/08/load.jpg';
                    }
                    $check = $some->cat_name;
                    $car = get_category_parents($some)[0]; 
                    ?>
                <?php
                    if ($car == 'M') {
                        $type_name = "Anime";
                        $titlu = get_field('titlu_alternativ', $some->taxonomy . '_' . $some->term_id);
                        $status = get_field('status', $some->taxonomy . '_' . $some->term_id);
                        if ($check !== 'Anime' && $status[0] == 'Ongoing' && $check !== 'Manga' && $check !== 'Serii Anime Terminate' && $check !== 'Serii Anime în curs de traducere') {
                            echo '
                        <div  id="serie" class ="col-6 col-lg-3 col-md-3 col-sm-6 col-xl-3 p-0 text-center">
                            <a href="' . get_category_link($some) . '">
                            <div id="serie">
                        <img src="' . $image . '" alt="' . $check . '" class=" evo-bottom-rounded evo-top-rounded col-12 p-1" width="100%"/>
                        <div class="col-12  p-1 position-absolute" style="bottom: 0px; color: white;">
                        <div class = " blur p-2 text-center evo-bottom-rounded-back ">
                        <b>' . $check . '</b>
                        </div>
                        <div id="background" style="visibility: hidden; position: absolute; z-index: -1;">' . $titlu . '</div>
                        </div>
                        </div>
                        </a>
                        </div>';
                        }
                    }
                }

                ?>
                <div class="post-box col-12 back-text-manga p-2 my-3 evo-bottom-rounded evo-top-rounded">
                    <div class="up px-1 py-2 text-left">
                        <span style="font-size: 1.75rem;" class=" text-evo"><b><i class="fas fa-grip-lines-vertical"></i> Serii terminate</b></span>
                    </div>
                </div>
                <?php
                $i = 0;
                $cat_name = 'category';


                $categories = get_categories();

                foreach ($categories as $category) {
                    $i = $i + 1;
                    $some = $category;
                    $type;
                    $image = get_field('cover', $some->taxonomy . '_' . $some->term_id);
                    if (is_null($image)) {
                        $image = 'https://shinobi-am.com/wp-content/uploads/2021/08/load.jpg';
                    }
                    $check = $some->cat_name;
                    $car = get_category_parents($some)[0]; ?>

                <?php
                    if ($car == 'M') {
                        $type_name = "Anime";
                        $titlu = get_field('titlu_alternativ', $some->taxonomy . '_' . $some->term_id);
                        $status = get_field('status', $some->taxonomy . '_' . $some->term_id);
                        if ($check !== 'Anime' && $status[0] == 'Terminat' && $check !== 'Manga' && $check !== 'Serii Anime Terminate' && $check !== 'Serii Anime în curs de traducere') {
                            echo '
                        <div  id="serie" class ="col-6 col-lg-3 col-md-3 col-sm-6 col-xl-3 p-0 text-center">
                            <a href="' . get_category_link($some) . '">
                            <div id="serie">
                        <img src="' . $image . '" alt="' . $check . '" class=" evo-bottom-rounded evo-top-rounded col-12 p-1" width="100%"/>
                        <div class="col-12  p-1 position-absolute" style="bottom: 0px; color: white;">
                        <div class = " blur p-2 text-center evo-bottom-rounded-back ">
                        <b>' . $check . '</b>
                        </div>
                        <div id="background" style="visibility: hidden; position: absolute; z-index: -1;">' . $titlu . '</div>
                        </div>
                        </div>
                        </a>
                        </div>';
                        }
                    }
                }

                ?>
            </div>
        </div>
    </div>

</main>

<?php
b4st_main_after();
get_footer();
?>