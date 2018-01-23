<?php
require_once('inc/init.inc.php');
$page = 'Imagier';
require_once('inc/haut.inc.php');
$imagier_active = 'active';
require_once('inc/header.index.inc.php');

//Enregistrement des noms des fichiers images dans un tableau
//$dirImagier = "/var/www/html/gloshmol/imagier"; 
$dirImagier = "imagier"; 
///RACINE_SITE . "imagier";

$nomsImages = scandir($dirImagier);

//sélection des fichiers images contenant la requete
if(isset($_POST) && empty($_POST) == false) {
    $requete = $_POST;
    //var_dump($requete);
    $requeteString = $requete['the_search'];
    //echo $requeteString;
    
    foreach ($nomsImages as $nomImage) {
        //si le nom du fichier contient la requête, j'insère le nom du fichier dans un tableau
        if (strpos($nomImage, $requeteString)) {
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
                                foreach ($resultatImages as $resultatImage) {
                                    echo "<div class='realisationImagier imagier'><img src='imagier/$resultatImage'/>
                                    </div> ";
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