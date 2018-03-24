<?php

//une fonction debug pour faire des print_r

function debug($tab) {
    echo '<div style="color:white; padding:20px; background:#' .rand(111111,999999) . '">'; // affiche une couleur de façon aléatoire
    $trace = debug_backtrace(); //fction qui envoie des infos sur là où on est, là où on a exécuté la fonction.
    // cette fonction  est p^ratique car elle nous retourne plein d'infos sur l'emplacement depuis lequel la fction en cours a été exécutée. Sous la forme d'un tableau muldimensionnel

    echo 'Le débug a été demandé dans le fichier : ' . $trace[0]['file'] . 'à la ligne : ' . $trace[0]['line']. '<hr/>';

    echo '<pre>';
    print_r($tab);
    echo '</pre>';

    echo '</div>';

}

function AffichageImages($images) {
    foreach ($images as $image) {
        if ($image[1] == 'vertical') {
            echo "<div class='vertical'><img src='images/" . $image[0] . "'  alt=''></div>
            <div class='vertical legendeTitre'><p>" . $image[2] . "</p></div><div class='vertical legendeDetails'><p>" . $image[3] . "</p></div>";
        } else {
            echo "<img src='images/" . $image[0] . "' alt=''>
            <div class='legendeTitre'><p>" . $image[2] . "</p></div><div class='legendeDetails'><p>" . $image[3] . "</p></div>";
        }       
    }
}