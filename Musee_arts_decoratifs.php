<?php
require_once('inc/init.inc.php');
$page= 'musée des arts décoratifs, Paris';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'MAD-210321-Musee_arts_decoratifs-livret_dessins-01-w.jpg', 'horizontal', 'des cintres', ''],
    [ 'MAD-210321-Musee_arts_decoratifs-livret_dessins-08-w.jpg', 'horizontal', 'des cintres', ''],
    [ 'MAD-210321-Musee_arts_decoratifs-livret_dessins-12-w.jpg', 'horizontal', 'Charpin', '']
]
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>musée des arts décoratifs, Paris</h2>
                <p>(mais surtout des cintres et Gio Ponti)<br />En 2020 une exposition au musée des Arts décoratifs de Paris s’appelle «le dessin sans réserve».
                Elle présente une collection ou plutôt un panorama, en fait un abécédaire construit des dessins choisis dans des réserves.<br /><br />Livret 72 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2020<br />15 € + fdp </p>

                    - <a href="https://madparis.fr/" target="_blank">site du musée des arts décoratifs</a><br />
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
