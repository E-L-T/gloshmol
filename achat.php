<?php
require_once('inc/init.inc.php');
$page= 'Achat';
require_once('inc/haut.inc.php');
$realisations_active = '';
$achat_active = 'active';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.index.inc.php');	

//Enregistrement des noms des fichiers images dans un tableau
$dirImagier = "imagierbd"; 
$nomsImages = scandir($dirImagier);

//Filtrer fichiers dont la deuxieme lettre est un z
$nomsImages = array_filter($nomsImages, function($nom) {
    return substr($nom, 0, 2) == 'GZ' || substr($nom, 0, 2) == 'HZ' || substr($nom, 0, 2) == 'IZ' || substr($nom, 0, 2) == 'JZ' || substr($nom, 0, 2) == 'KZ' || substr($nom, 0, 2) == 'LZ';
    // return $nom == 'Z';
    // preg_match("/^JZ/", $nom); 
});

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
}

?>
        <div id="supRealisationsImagier">
        <h2>Achat</h2>

            <div id="presentationImagier">
                <div>Pour acheter un document original, adressez un mail à <a href="mailto:bs@gloshmol.com">bs@gloshmol.com</a><br />  
                Indiquez la référence du document ou demandez un renseignement. Les prix d'achat comprennent l'envoi postal. Le document est posté à la réception du versement.</div>

                <div>Pour acheter un document original, adressez un mail à <a href="mailto:bs@gloshmol.com">bs@gloshmol.com</a><br />  
                Indiquez la référence du document ou demandez un renseignement. Les prix d'achat comprennent l'envoi postal. Le document est posté à la réception du versement.</div>

                <h3>dessins 18x24 cm - aquarelles</h3>

                <p>aquarelle ou encre sur papier arches 300 g/m²
                sous verre, encadrement au bordé
                sous pli catron 3 mm anti-choc. 150 €</p>

                <h3>18 x 24 cm - peinture</h3>

                <p>peinture sur carton, bois ou medium
                sous verre, encadrement au bordé
                sous pli catron 3 mm anti-choc.	300 €</p>

                <h3>Dossier A4, impression jet d'encre qualité photo, papier couché ou ordinaire, reliure métal blanc, CD de données</h3>
                
                <p>Demander pour le prix</p>

                <div>L'imagier regroupe les dessins de mes carnets. Tous mes carnets ont été numérisés.<br />Le groupe de 2 lettres par lequel commence chaque nom de fichier désigne le carnet. Le premier carnet s'appelle AA,le deuxième AB, le 26° AZ, le 27° BA et ainsi de suite. Ils apparaissent donc en ordre antéchronologique, les derniers en haut.<br />Le dossier rassemble plus de 13000 dessins, il est mis à jour au fur et à mesure des numérisations.<br />Le moteur de recherche permet de trouver les dessins dont le nom comprend par exemple les mots : Louvre, bleu, portrait, Pasteur, TGI (pour tribunal de grande instance), pont, vélo, métro, vitrail, église..</div>
            </div>
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

                    if(isset($_POST) && empty($_POST) == false && strlen($requete) >= 2){  
                        
                        foreach ($resultatImages as $resultatImage) {
                            
                            //affichage du titre
                            $resultatImageTitre = str_replace($tirets, " ", $resultatImage);
                            $resultatImageTitre = str_replace($extensions, "", $resultatImageTitre);
                            $resultatImageTitre = ucwords($resultatImageTitre);

                            //affichage de l'image
                            
                            echo "<div class='blocImagier'><div class='realisationImagier imagier lazy-hidden lazy-loaded'><a href='imagierhd/$resultatImage' class='swipebox' title='$resultatImageTitre'><img data-src='imagierbd/$resultatImage' alt=''></a></div><div class='titreImage'>". $resultatImageTitre . "</div></div>";

                        }
                    }else if(empty($_POST) == true){
                        //Affichage antechronologique par défaut

                        foreach ($nomsImagesInverses as $nomImageInverse) {
                            
                            //affichage du titre
                            $nomImageInverseTitre = str_replace($tirets, " ", $nomImageInverse);
                            $nomImageInverseTitre = str_replace($extensions, "", $nomImageInverseTitre);
                            $nomImageInverseTitre = ucwords($nomImageInverseTitre);

                            //affichage de l'image
                            //là, imagesbd de 450 de w et images hd de 900 de w
                            //ajouter un srcset imagierbd-350
                            //et faire en sorte que l'on aboutisse soit au 350, 450 ou 900.
                            //ex : <img srcset="imagier/KF68-plage_Cros_Cagne-gros_ventre.jpg 900w, imagierbd/KF68-plage_Cros_Cagne-gros_ventre.jpg 450w" />
                            //En JS , transformer le img src = en img srcset = 

                            echo "<div class='blocImagier blocImagierDesktop'><div class='realisationImagier imagier lazy-hidden lazy-loaded'><a href='imagierhd/$nomImageInverse' title='$nomImageInverseTitre'><img data-src='imagierbd/$nomImageInverse' alt=''></a></div><div class='titreImage'>". $nomImageInverseTitre . "</div></div>";

                            echo "<div class='blocImagier blocImagierMobile'><div class='realisationImagier imagier lazy-hidden lazy-loaded'><a href='imagierbd/$nomImageInverse' title='$nomImageInverseTitre'><img data-src='imagierbd/$nomImageInverse' alt=''></a></div><div class='titreImage'>". $nomImageInverseTitre . "</div></div>";
                        }    
                    }                            
                ?>
            </div>     
        </section>
    </div>
<?php
    require_once('inc/footer.index.inc.php');	
?>