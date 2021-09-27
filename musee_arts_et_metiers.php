<?php
require_once('inc/init.inc.php');
$page= 'musée des arts et métiers';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'musee_arts_metiers-191017-livret-1-w.jpg', 'horizontal', 'cloches en verre et étalons', ''],
    [ 'musee_arts_metiers-191017-livret-2-w.jpg', 'horizontal', 'prothèse de hanche', ''],
    [ 'musee_arts_metiers-191017-livret-4-w.jpg', 'horizontal', 'le fusil de Marey', '']
]
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>musée des arts et métiers</h2>
                <p>"Clémence ma nièce est partie au Canada faire des études d’ingénierie. En anglais ça se dit «art» ou «arts» alors j’ai plaisanté en lui disant qu’elle faisait comme tonton des études d’art, lui promettant de lui offrir sa boîte d’aquarelles. Mais elle ne fait pas d’études d’art, ça s’appelle «art» comme ce musée s’appelle «arts et métiers». Pourtant beaucoup considèrent les sciences comme un art..."<br /><br />Livret 68 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2020<br />15 € + fdp </p>

                    - <a href="https://www.arts-et-metiers.net/" target="_blank">site du musée des arts et métiers</a><br />
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
