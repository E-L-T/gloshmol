<?php
require_once('inc/init.inc.php');
set_time_limit(600);
if ($_GET['run']) {
    # This code will run if ?run=true is set.
    $imagesBrutes = scandir("imagierbrut");
    //delete . and .. from array
    $imagesBrutes = array_slice($imagesBrutes, 2);

    foreach ($imagesBrutes as $imageBrute) {
        $imHD = new imagick("imagierbrut/$imageBrute");
        $imBD = new imagick("imagierbrut/$imageBrute");
        $imageprops = $imHD->getImageGeometry();
        $width = $imageprops['width'];
        $height = $imageprops['height'];
        if($width > $height){
            $newHDWidth = 900;
            $newBDWidth = 600;
            $newHDHeight = (900 / $width) * $height;
            $newBDHeight = (600 / $width) * $height;
          }else{
            $newHDHeight = 900;
            $newBDHeight = 600;
            $newHDWidth = (900 / $height) * $width;
            $newBDWidth = (600 / $height) * $width;
        }
        $imHD->resizeImage($newHDWidth,$newHDHeight, imagick::FILTER_LANCZOS, 0.9, true);
        $imBD->resizeImage($newBDWidth,$newBDHeight, imagick::FILTER_LANCZOS, 0.9, true);
        $imHD->writeImage("imagierhd/$imageBrute");
        $imBD->writeImage("imagierbd/$imageBrute");
        $imHDResource = imagecreatefromjpeg("imagierhd/$imageBrute");
        $imBDResource = imagecreatefromjpeg("imagierbd/$imageBrute");
        imageinterlace($imHDResource, 1);
        imageinterlace($imBDResource, 1);
        imagejpeg($imHDResource, "imagierhd/$imageBrute", 75);
        imagejpeg($imBDResource, "imagierbd/$imageBrute", 75);

        echo "photo $imageBrute convertie en 900px";
        echo "<br><br>";
        echo '<img src="imagierhd/' . $imageBrute . '">';        
        echo "<br><br><br><br>";

        echo "photo $imageBrute convertie en 600px";
        echo "<br><br>";
        echo '<img src="imagierbd/' . $imageBrute . '">';        
        echo "<br><br><br><br>";
    }

    $files = glob('imagierbrut/*'); // get all file names
    foreach($files as $file){ // iterate files
        if(is_file($file))
            unlink($file); // delete file
    }
    echo "dossier imagierbrut vidé";
}
?>

<a href="?run=true">Clique pour convertir les photos</a>

