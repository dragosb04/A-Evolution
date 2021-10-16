<div class="col-12 px-1 mb-3 d-none d-lg-block d-xl-block d-md-block carousel-image evo-top-rounded evo-bottom-rounded">
    <div id="carouselExampleIndicators" class="carousel social slide d-block" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <?php
            $u = 1;
            while ($u <= 4) {
                echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $u . '"></li>';
                $u++;
            }
            ?>
        </ol>
        <div class="carousel-inner carousel-image evo-top-rounded evo-bottom-rounded text-center d-none d-md-block d-lg-block post-box d-xl-block text-white">
            <?php
            $cat_name = 'category';
            $i = 0;
            $the_query = new WP_Query(array('orderby' => 'rand', 'posts_per_page' => '5'));
            $a = 0;
            $ok = 1;
            while ($the_query->have_posts()) : $the_query->the_post();
                if ($ok == 1) {
                    echo '<div class="carousel-item  carousel-image active ">
              <div class=" text-center">
              <a href = ' . get_post_permalink() . '><img class="text-center social rounded border-dark" width = "100%" src="' . get_the_post_thumbnail_url() . '" alt="Second slide"></a>
              <h4 class="carousel-caption"><a style="text-decoration: none; color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;" href = "' . get_post_permalink() . '"> <b>' . get_the_title() . '</b>  </a></h4>
              </div>
      </div>';
                    $ok = 0;
                } else {
                    echo '<div class="carousel-item carousel-image ">
              <div class=" text-center">
              <a href = ' . get_post_permalink() . '><img class="text-center social rounded border-dark" width = "100%" src="' . get_the_post_thumbnail_url() . '" alt="Second slide"></a>
              <h4 class="carousel-caption"><a style="text-decoration: none; color: white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;" href = "' . get_post_permalink() . '"> <b>' . get_the_title() . '</b> </a></h4>
              </div>
      </div>';
                }
            endwhile;
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</div>