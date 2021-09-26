<?php
require_once('inc/init.inc.php');
$page = 'Imagier';
require_once('inc/haut.inc.php');
$imagier_active = 'active';
require_once('inc/header.index.inc.php');

//Enregistrement des noms des fichiers images dans un tableau
$dirImagier = "imagierbd"; 
$nomsImages = scandir($dirImagier);

//Tableau antechronologique pour affichage par défaut
$nomsImagesInverses = array_reverse($nomsImages);
$nomsImagesInverses = array_slice($nomsImagesInverses, 0, 1000);

//fonction pour éliminer les accents de la requête
function wd_remove_accents($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);
    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères
    
    return $str;
}

//sélection des fichiers images correspondant la requete
$requeteBrute = '';
if(isset($_POST) && empty($_POST) == false) {
    $requeteBrute = htmlspecialchars($_POST['the_search']);
    
    //traitement de la requête entrée par l'internaute
    //enlever accents et majuscules du nom de la requete
    $requete = wd_remove_accents($requeteBrute);
    $requete = strtolower($requete);

    //Si la requête est constituée de plusieurs termes séparés par un espace ou un +, je crée un tableau $requeteArray contenant chaque mot clé
    
    $requeteArray = preg_split("/[\s,+]/", $requete);
    
    //J'enlève les éléments vides du tableau
    $requeteArray = array_filter($requeteArray);
    
    //Je réindexe le tableau à partir de 0
    $requeteArray = array_values($requeteArray);

    if(strlen($requete) >= 2) {
        foreach ($nomsImages as $nomImage) {
            //enlever accents et majuscules du nom du fichier image
            $nomImageFiltre = wd_remove_accents($nomImage);
            $nomImageFiltre = strtolower($nomImageFiltre);
            
            //si le nom du fichier contient la ou les requête(s), j'insère le nom du fichier dans le tableau $resultatImages
            $counter = 0;
            for ($i=0; $i <count($requeteArray) ; $i++) { 
                if (strpos($nomImageFiltre, $requeteArray[$i]) !== false) {
                $counter++;
            }
                if($counter == count($requeteArray)){
                    array_push($resultatImages, $nomImage);   
                }
            }
        }
    }   
} else {
    $resultatImages = $nomsImagesInverses;
}

?>                 
        <div id="supRealisationsImagier">
            <h2>Imagier</h2>

            <div id="presentationImagier">L'imagier regroupe les dessins de mes carnets. Tous mes carnets ont été numérisés.<br />Le groupe de 2 lettres par lequel commence chaque nom de fichier désigne le carnet. Le premier carnet s'appelle AA,le deuxième AB, le 26° AZ, le 27° BA et ainsi de suite. Ils apparaissent donc en ordre antéchronologique, les derniers en haut.<br />Le dossier rassemble plus de 13000 dessins, il est mis à jour au fur et à mesure des numérisations.<br />Le moteur de recherche permet de trouver les dessins dont le nom comprend par exemple les mots : Louvre, bleu, portrait, Pasteur, TGI (pour tribunal de grande instance), pont, vélo, métro, vitrail, église..</div>
            <div class="formulaire">
                
                <form action="" method="post" class="formImagier">
                    <input class="inputImagier requeteImagier" type="search" placeholder="Mot-clé" name="the_search">
                    <input class="inputImagier submitImagier" type="submit" value="Rechercher" />

                </form>
                <?php 
                    if(isset($_POST) && empty($_POST) == false) {
                        if(strlen($requete) >= 2) {
                            if(count($resultatImages) < 2){
                                echo '<div class="resultatImagier" >' . count($resultatImages) . ' résultat pour "' . $requeteBrute . '"</div>';
                            } else {
                                echo '<div class="resultatImagier" >' . count($resultatImages) . ' résultats pour "' . $requeteBrute . '"</div>';
                            } 
                        } else {
                            echo '<div class="resultatImagier" >Entrez au moins deux caractères</div>';
                        } 
                    }
                ?>
            </div>
            <div id="realisationsImagier">
                
                <?php                           
                    //ré-écriture du titre du fichier image sans tirets ni extensions
                    $tirets = array("-", "_");
                    $extensions = array(".jpg", ".JPG", ".png", ".PNG", ".gif", ".GIF");

                    foreach ($resultatImages as $resultatImage) {
                        //affichage du titre
                        $resultatImageTitre = str_replace($tirets, " ", $resultatImage);
                        $resultatImageTitre = str_replace($extensions, "", $resultatImageTitre);
                        $resultatImageTitre = ucwords($resultatImageTitre);

                        //affichage de l'image
                        //là, imagesbd de 450 de w et images hd de 900 de w
                        //ajouter un srcset imagierbd-350
                        //et faire en sorte que l'on aboutisse soit au 350, 450 ou 900.
                        //ex : <img srcset="imagier/KF68-plage_Cros_Cagne-gros_ventre.jpg 900w, imagierbd/KF68-plage_Cros_Cagne-gros_ventre.jpg 450w" />
                        //En JS , transformer le img src = en img srcset = 
                        $imageDirs = array("Desktop" => "imagierhd", "Mobile" => "imagierbd");
                        foreach ($imageDirs as $format => $imageDir) {
                            echo "<div class='blocImagier blocImagier$format'><div class='realisationImagier imagier lazy-hidden lazy-loaded'><a href='$imageDir/$resultatImage' title='$resultatImageTitre'><img data-src='imagierbd/$resultatImage' alt=''></a></div><div class='titreImage'>".$resultatImageTitre . "</div></div>";
                        }
                    }
                ?>
            </div>     
        </div>    
    </section>
</div>

<?php
require_once('inc/footer.index.inc.php');
?>