<?php
require_once('inc/init.inc.php');
require_once('inc/haut.inc.php');

if(isset($_POST)){
    $requete = $_POST;
    var_dump($requete);
    $requeteString = $requete['the_search'];
    echo $requeteString;
    
    /* header('Location: http://localhost/gloshmol/imagier.php'); */
}

$dirImagier = '/var/www/html/gloshmol/imagier';

$dirImagierIntegral = '/home/eric/Documents/Mes_Textes/Projet_devt_Web/Site_Gloshmol/baseDonneesImages';

$nomsImages = scandir($dirImagierIntegral);
var_dump($nomsImages);

$resultatImages = [];

foreach ($nomsImages as $nomImage) {
    if (strpos($nomImage, $requeteString)) {
        echo "Une correspondance pour " . $requeteString . " \n". " : " . $nomImage . " \n";
        array_push($resultatImages, $nomImage);
    }
}

?>