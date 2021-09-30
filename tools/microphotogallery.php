<?php
/*************************************************
 * Micro Photo Gallery
 *
 * Version: 1.0
 * Date: 2007-04-05
 *
 * Usage:
 * Just copy these files into your image folder
 *
 ****************************************************/

 $columns     = 5;
 $thmb_width  = 120;
 $thmb_height = 80;

function resizeImage($originalImage,$toWidth,$toHeight){
    
    // Get the original geometry and calculate scales
    list($width, $height) = getimagesize($originalImage);
    $xscale=$width/$toWidth;
    $yscale=$height/$toHeight;
    
    // Recalculate new size with default ratio
    if ($yscale>$xscale){
        $new_width = round($width * (1/$yscale));
        $new_height = round($height * (1/$yscale));
    }
    else {
        $new_width = round($width * (1/$xscale));
        $new_height = round($height * (1/$xscale));
    }
    // Resize the original image
    $imageResized = imagecreatetruecolor($new_width, $new_height);
    $imageTmp     = imagecreatefromjpeg ($originalImage);
    imagecopyresampled($imageResized, $imageTmp, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    return $imageResized;
} 

function generateThumbnails(){
	global $thmb_width,$thmb_height;
	
	// Open the actual directory
	if ($handle = opendir(".")) {
		// Read all file from the actual directory
		while ($file = readdir($handle))  {
			// Check whether tha actual item is a valid file
			if (is_file($file)){
				// Check whether the actual image is a thumbnail
	      		if (strpos($file,'_th.jpg')){
	      			$isThumb = true;
	      		} else {
		      		$isThumb = false;
		      	}
	      	
	      		if (!$isThumb) {
		      		// Process the file string
	      			$dirName  = substr($file,0,strpos($file,basename($file)));
	      			if (strlen($dirName) < 1) $dirName = '.';
	      			$fileName = basename($file);
	      			$fileMain = substr($fileName,0,strrpos($fileName,'.'));
	      			$extName  = substr($fileName,strrpos($fileName,'.'),
	      								strlen($fileName)-strrpos($fileName,'.'));
  					
	      			// Check if the actual file is a jpeg image
	      			if (($extName == '.jpg') || ($extName == '.jpeg')){
			    		$thmbFile = $dirName.'/'.$fileMain.'_th.jpg';
			    		// If a thumbnail dosn't exists tahn create a new one
			    		if (!file_exists($thmbFile)){
				    		imagejpeg(resizeImage($file,$thmb_width,$thmb_height),$thmbFile,80);
				    	}
					}
	      		} 
	   		}
   		}
	}
	
}

function getNormalImage($file){
	$base = substr($file,0,strrpos($file,'_th.jpg'));
	if (file_exists($base.'.jpg')) return $base.'.jpg';
	elseif (file_exists($base.'.jpeg')) return $base.'.jpeg';
	else return "";
}

function displayPhotos(){
	global $columns;
	
	generateThumbnails();
	$act = 0;
	// Open the actual directory
	if ($handle = opendir(".")) {
		// Read all file from the actual directory
		while ($file = readdir($handle))  {
			// Check whether tha actual item is a valid file
			if (is_file($file)){
				// Check whether the actual image is a thumbnail
	      		if (strpos($file,'_th.jpg')){
					++$act;
					if ($act > $columns) {
						echo '</tr><tr><td class="photo"><a href="'.getNormalImage($file).'"><img src="'.$file.'" alt="'.$file.'"/></a><br/><span class="title">'.$file.'</span></td>';	
						$act = 1;
					} else {
						echo '<td class="photo"><a href="'.getNormalImage($file).'"><img src="'.$file.'" alt="'.$file.'"/></a><br/><span class="title">'.$file.'</span></td>';	
					}
	      			
	      		}
	      	}
		}
	}	
}

?>
