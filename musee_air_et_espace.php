<?php
require_once('inc/init.inc.php');
$page= 'musée air et espace';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'musee_air_espace-200901-3-w.jpg', 'horizontal', 'livret de dessins', ''],
    [ 'musee_air_espace-200901-4-w.jpg', 'horizontal', '', ''],
    [ 'musee_air_espace-200901-6-w.jpg', 'horizontal', '', ''],
]
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Musée de l'air et de l'espace</h2>
                <p>"Parfois je rêve que je vole. Le musée de l’air et de l’espace est au Bourget et c’est «notre endroit», «notre musée», on habite pas loin et on sait qu’en famille on peut y aller d’un saut, faire notre petit tour des collections. "

                <h3>On va voir les avions, musée de l'air et de l'espace</h3>
                Livre aux éditions 18x24<br>60 pages, 18x24 cm broché<br>Couverture Fabriano cartacrea 220<br>impression sur DCP 100<br>imprimé façonné à l'atelier, Aubervilliers<br>1° éd. 2020<br>dépôt légal 2023 n°10000000874114<br>ISBN 978-2-9587859-2-5<br>tirages numérotés<br>20 € + fdp</p>
                
                - <a href="https://www.museeairespace.fr/" target="_blank">site du musée de l'air et de l'espace</a><br />


            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
