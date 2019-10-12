<?php
require_once('inc/init.inc.php');
if ($_GET['run']) {
    # This code will run if ?run=true is set.
    $imagesBrutes = scandir("imagierbrut");
    //delete . and .. from array
    $imagesBrutes = array_slice($imagesBrutes, 2);

    foreach ($imagesBrutes as $imageBrute) {
        $im = new imagick("imagierbrut/$imageBrute");
        $imageprops = $im->getImageGeometry();
        $width = $imageprops['width'];
        $height = $imageprops['height'];
        if($width > $height){
            $newWidth = 900;
            $newHeight = (900 / $width) * $height;
          }else{
            $newHeight = 900;
            $newWidth = (900 / $height) * $width;
        }
        $im->resizeImage($newWidth,$newHeight, imagick::FILTER_LANCZOS, 0.9, true);
        $im->writeImage("imagierhdtest/$imageBrute");
        echo "photo $imageBrute convertie en 900px";
        echo "<br><br>";
        echo '<img src="imagierhdtest/' . $imageBrute . '">';        
        echo "<br><br><br><br>";
    }

}
?>

<a href="?run=true">Clique pour convertir les photos</a>


<!-- 
Faire ça en php.
recuperer dans un tableau contenu de imagier_brut
boucler dans le tableau : convertir et déplacer dans imagierhdtest et imagierbd trait_exists
loguer chaque photo traitée
vider le dossier imagierbrut
loguer que le dossier est vide
voir ce qu'on peut récupérer des meta données -->
