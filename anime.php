<?php /* Template Name: Anime */
get_header();
wp_head();
b4st_main_before();
error_reporting(E_ERROR | E_PARSE);
?>
<main id="site-main" class="page page-template anime text-light">
    <div class="container px-0">
        <div class="post-box p-2 my-3 evo-bottom-rounded evo-top-rounded">
            <img class="evo-bottom-rounded evo-top-rounded" src="https://cdn.discordapp.com/attachments/884134436684328960/896803061169803284/banner-serie.png" />
        </div>
        <div class="col-12 px-0">
            <div class=" row no-gutters text-center">
                <div class="col-8">
                    <div class="row">
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
                            if ($car == 'A') {
                                $type_name = "Anime";
                                $titlu = get_field('titlu_alternativ', $some->taxonomy . '_' . $some->term_id);
                                if ($check !== 'Anime' && $check !== 'Manga' && $check !== 'Serii Anime Terminate' && $check !== 'Serie Anime în curs de traducere') {
                                    if (!($some->category_parent == 2))

                                        echo '
                        <div  id="serie" class ="col-6 col-lg-3 col-md-3 col-sm-4 col-xl-3 p-0 text-center">
                            <a href="' . get_category_link($some) . '">
                            <div id="serie" class = "p-2">
                        <img src="' . $image . '" class="rounded" width="100%"/>
                        <div class="carousel-caption p-0 single-back" style="background: rgba(0, 0, 0, 0.541); vertical-align: text-top; font-size: 0.79rem;">' . $check . '</div>
                        <div id="background" style="visibility: hidden; position: absolute; z-index: -1;">' . $titlu . '</div>
                        </div></a>
                        </div>';
                                }
                            }
                        }

                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<?php
b4st_main_after();
get_footer();
?>