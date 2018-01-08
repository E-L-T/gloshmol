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