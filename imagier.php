<?php
require_once('inc/init.inc.php');
$page = 'Imagier';
require_once('inc/haut.inc.php');
$imagier_active = 'active';
require_once('inc/header.index.inc.php');

//Enregistrement des noms des fichiers images dans un tableau
//$dirImagier = "/var/www/html/gloshmol/imagier"; 
$dirImagier = "imagierbd"; 
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
if(isset($_POST) && empty($_POST) == false) {
    $requete = $_POST;
    //var_dump($requete);
    $requeteString = $requete['the_search'];
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


?>
    
                
                <div id="supRealisationsImagier">
                    <h2>Imagier</h2>

                    <div id="presentationImagier">L'imagier regroupe les dessins de mes carnets. Tous mes carnets ont été numérisés.<br />Le groupe de 2 lettres par lequel commence chaque nom de fichier désigne le carnet. Le premier carnet s'appelle AA,le deuxième AB, le 26° AZ, le 27° BA et ainsi de suite. Ils apparaissent donc en ordre antéchronologique, les derniers en haut.<br />Le dossier rassemble plus de 13000 dessins, il est mis à jour au fur et à mesure des numérisations.<br />Le moteur de recherche permet de trouver les dessins dont le nom comprend par exemple les mots : Louvre, bleu, portrait, Pasteur, TGI (pour tribunal de grande instance), pont, vélo, métro, vitrail, église..</div>
                    <div class="formulaire">
                        
                        <form action="imagier.php" method="post" class="formImagier">
                            <input class="inputImagier requeteImagier" type="search" placeholder="Mot-clé" name="the_search">
                            <input class="inputImagier submitImagier" type="submit" value="Rechercher" />

                        </form>
                        <?php 
                            if(isset($_POST) && empty($_POST) == false) {
                                echo '<div class="resultatImagier" >' . count($resultatImages) . ' résultats pour "' . $requeteString . '"</div>';
                        }
                        ?>
                    </div>
                    <div id="realisationsImagier">
                        

                        <!-- <div class="realisation"></div>
                        <div class="realisation"></div> -->

                        <?php 
                            if(isset($_POST)){
                                $tirets = array("-", "_");
                                $extensions = array(".jpg", ".JPG", ".png", ".PNG", ".gif", ".GIF");
                                
                                foreach ($resultatImages as $resultatImage) {
                                    
                                    //affichage du titre
                                    $resultatImageTitre = str_replace($tirets, " ", $resultatImage);
                                    $resultatImageTitre = str_replace($extensions, "", $resultatImageTitre);
                                    $resultatImageTitre = ucwords($resultatImageTitre);

                                    echo "<div class='blocImagier'><div class='realisationImagier imagier'><img data-src='imagierbd/$resultatImage' />
                                    </div><div class='titreImage'>". $resultatImageTitre . "</div></div>";
                                }
                                //var_dump($_SESSION['resultatImages']);     
                            }
                        ?>
                    </div>     
                </div>    
            </section>
        </div>
<?php
require_once('inc/footer.index.inc.php');
?>