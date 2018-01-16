<?php
require_once('inc/init.inc.php');
$page = 'Imagier';
require_once('inc/haut.inc.php');
$imagier_active = 'active';
require_once('inc/header.index.inc.php');

//Enregistrement des noms des fichiers images dans un tableau
$dirImagier = '/var/www/html/gloshmol/imagier';

$nomsImages = scandir($dirImagier);

//sélection des fichiers images contenant la requete
if(isset($_POST) && empty($_POST) == false) {
    $requete = $_POST;
    //var_dump($requete);
    $requeteString = $requete['the_search'];
    //echo $requeteString;
    
    foreach ($nomsImages as $nomImage) {
        if (strpos($nomImage, $requeteString)) {
            /* echo "Une correspondance pour " . $requeteString . " \n". " : " . $nomImage . " \n"; */
            array_push($resultatImages, $nomImage);
        }
    }
/*     var_dump($resultatImages);
 */    
}


?>
    
                
                <div id="realisations">
                    <div class="formulaire realisation">
                        <form action="imagier.php" method="post">
                            <input class="inputImagier requeteImagier" type="search" placeholder="Mot-clé" name="the_search">
                            <input class="inputImagier submitImagier" type="submit" value="Rechercher" />

                        </form>
                        <?php 
                            if(isset($_POST) && empty($_POST) == false) {
                                echo '<span class="resultatImagier" >Voici les résultats de la recherche "' . $requeteString . '"</span>';
                        }
                        ?>
                    </div>

                    <div class="realisation"></div>
                    <div class="realisation"></div>

                <?php 
                    if(isset($_POST)){
                        foreach ($resultatImages as $resultatImage) {
                            echo "<div class='realisation imagier'><img src='imagier/$resultatImage'/>
                            </div> ";
                        }
                        //var_dump($_SESSION['resultatImages']);
                        
                    }
                ?>
                
            </div>    
        </section>
    </div>
<?php
require_once('inc/footer.index.inc.php');
?>