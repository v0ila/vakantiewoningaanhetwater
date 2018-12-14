<?php


function gallery($page)
{
    $dirname = "assets/img/" . $page . "/";
    $images = glob($dirname . "*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);
    foreach ($images as $image) {
        if (strpos($image, 'main') === false) {
            echo "
          <div class='column is-3-desktop is-6-touch'>
            <figure class='image is-square'>
              <a href='$image'><img src='$image'></a>
            </figure>
          </div>
              ";
        }
    }
}
