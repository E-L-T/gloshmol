<?php
session_start();
require_once('inc/init.inc.php');
require_once('inc/haut.inc.php');

//Enregistrement des noms des fichiers images dans un tableau
$dirImagier = '/var/www/html/gloshmol/imagier';

$dirImagierIntegral = '/home/eric/Documents/Mes_Textes/Projet_devt_Web/Site_Gloshmol/baseDonneesImages';

$nomsImages = scandir($dirImagier);
/* var_dump($nomsImages);
 */

//sélection des fichiers images contenant la requete
if(isset($_POST)){
    $requete = $_POST;
/*     var_dump($requete);
 */    $requeteString = $requete['the_search'];
    echo $requeteString;
    
    foreach ($nomsImages as $nomImage) {
        if (strpos($nomImage, $requeteString)) {
            /* echo "Une correspondance pour " . $requeteString . " \n". " : " . $nomImage . " \n"; */
            array_push($resultatImages, $nomImage);
        }
    }
/*     var_dump($resultatImages);
 */    
}
$_SESSION['resultatImages'] = $resultatImages;
header("Location:http://localhost/gloshmol/imagier.php");
?>