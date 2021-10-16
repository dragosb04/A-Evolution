<?php

function rand_img() {
    $random_image = _get_random_header_data();
 
    if ( empty( $random_image->url ) ) {
        return '';
    }
 
    return $random_image->url;
}

function preview(){
    echo 'Vizionare placută la '. get_the_title().', vă așteptăm părerile în secțiunea de comentarii!';
}
function credits_preview(){
    $rows = get_field('echipa');
        if (!empty(trim($rows['traducator'])))
          echo ("<div class='d-inline-block text-left px-1'><i class='fas fa-language'></i> Traducere: " . $rows['traducator'] . " ||</div>");
        if (!empty(trim($rows['verificator'])))
          echo "<div class='d-inline-block text-left px-1'><i class='fas fa-edit'></i> Verificare: " . $rows['verificator'] . " ||</div>";
        if (!empty(trim($rows['editor'])))
          echo "<div class='d-inline-block text-left px-1'><i class='fas fa-keyboard'></i> Typesetting: " . $rows['editor'] . " ||</div>";
          if (!empty(trim($rows['editare_manga'])))
          echo "<div class='d-inline-block text-left px-1'><i class='fas fa-keyboard'></i> Editare Manga: " . $rows['editare_manga'] . " ||</div>";
          if (!empty(trim($rows['encoder'])))
          echo "<div class='d-inline-block text-left px-1'><i class='fas fa-cogs'></i> Encoding: " . $rows['encoder'] . " ||</div>";
        if (!empty(trim($rows['quality-check'])))
          echo "<div class='d-inline-block text-left px-1'><i class='fas fa-check-double'></i> Quality Check: " . $rows['quality-check'] . " ||</div>";
        
}

function parteneriat() {

  if (get_field('parteneriat') == 'enable_sidebar') {
    $rows2 = get_field('partener');
    if ($rows2[0] == 'wiensubs') {
      echo "<div class = 'col-12 pt-3 text-center'>Realizat în parteneriat cu <a href = 'https://wien-subs.moe/' style='color: #ff4500'>Wien-Subs</a></div>";
    } 
    else if ($rows2[0] == 'mangakids') {
      echo "<div class = 'col-12 pt-3 text-center'>Realizat în parteneriat cu <a href = 'http://manga-kids.com/' style='color: #FAD02C'>Manga-Kids</a></div>";
    } 
    else if ($rows2[0] == 'shinobi') {
      echo "<div class = 'col-12 pt-3 text-center'>Realizat în parteneriat cu <a href = 'https://www.shinobi-am.com/' style='color: #dc3545'>Shinobi-AM Fansub </a></div>";
    }
  }
}
function categ()
{
  $term = get_queried_object();
  $cover = get_field('cover', $term);
  if (is_null($cover)) {
    $cover = "https://a-evolution.ro/ext/planetstyles/flightdeck/store/logoc.png";
  }
  return $cover;
}

?>