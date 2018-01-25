<?php
require_once('inc/init.inc.php');
require_once('inc/haut.inc.php');

/* debug($_POST);
 */
//Enregistrement des noms des fichiers images dans un tableau
//$dirImagier = "/var/www/html/gloshmol/imagier"; 
$dirImagier = "imagier"; 
///RACINE_SITE . "imagier";

$nomsImages = scandir($dirImagier);

//fonction pour éliminer les accents
function wd_remove_accents($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);
    
    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères
    
    return $str;
}

//sélection des fichiers images contenant la requete
if(isset($_POST['requete']) && empty($_POST['requete']) == false) {
    $requeteString = $_POST['requete'];
    
    //echo $requeteString;
    //enlever accents et majuscules du nom de la requete
    $requeteString = wd_remove_accents($requeteString);
    $requeteString = strtolower($requeteString);
/*     var_dump($requeteString);
 */    
    foreach ($nomsImages as $nomImage) {
        //si le nom du fichier contient la requête, j'insère le nom du fichier dans un tableau
        //enlever accents et majuscules du nom du fichier image
        $nomImageFiltre = wd_remove_accents($nomImage);
        $nomImageFiltre = strtolower($nomImageFiltre);

        if (strpos($nomImageFiltre, $requeteString) !== false) {
            /* echo "Une correspondance pour " . $requeteString . " \n". " : " . $nomImage . " \n"; */
            array_push($resultatImages, $nomImage);
        }
    }
/*     var_dump($resultatImages);
 */    
}

if(isset($_POST) && empty($_POST) == false) {
    echo '<div class="resultatImagier" >' . count($resultatImages) . ' résultats pour "' . $requeteString . '"</div></div><div id="realisationsImagier">';
}

 

if(isset($_POST)){
    $tirets = array("-", "_");
    $extensions = array(".jpg", ".JPG", ".png", ".PNG", ".gif", ".GIF");
    
    foreach ($resultatImages as $resultatImage) {
        
        //affichage du titre
        $resultatImageTitre = str_replace($tirets, " ", $resultatImage);
        $resultatImageTitre = str_replace($extensions, "", $resultatImageTitre);
        $resultatImageTitre = ucwords($resultatImageTitre);

        echo "<div class='blocImagier'><div class='realisationImagier imagier'><img src='imagier/$resultatImage'/>
        </div><div class='titreImage'>". $resultatImageTitre . "</div></div>";
    }
    //var_dump($_SESSION['resultatImages']);     
}
?>