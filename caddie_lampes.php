<?php
require_once('inc/init.inc.php');
$page= 'caddie de lampes';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'lampes_caddie-1_4-baguette-w.jpg', 'horizontal', 'lampe baguette, photogramme 18x24cm', ''],
    [ 'lampes_caddie-4_42-bocal_clous-w.jpg', 'vertical', 'lampe bocal à clous, photogramme 18x24cm', ''],
    [ 'lampes_caddie-baguette-config-01-w.JPG', 'horizontal', 'lampe baguette, configuration', ''],
    [ 'lampes_caddie-photomaton-w.jpg', 'vertical', 'caddie, photomaton', ''],
    [ 'lampes_caddie-livret-210708-01-w.JPG', 'horizontal', 'livret, couverture', ''],
    [ 'lampes_caddie-livret-210708-02-w.JPG', 'horizontal', 'livret', ''],
    [ 'lampes_caddie-livret-210708-03-w.JPG', 'horizontal', 'livret, photogrammes', ''],
    [ 'lampes_caddie-livret-210708-05-w.JPG', 'horizontal', 'livret, configurations', ''],
    [ 'lampes_caddie-livret-210708-16-w.JPG', 'horizontal', 'livret, colportages', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>caddie de lampes</h2>
                <p>Ce travail est une archive de 1998, 1999. Il s'agit de lampes accompagnées de photogrammes qui les représentent. L'importance de ce caddie est double:<br>
                 - choix du format 18x24 cm pour les documents<br> - premiers colportages du caddie</p><br><br>
                
                <h2>caddie de lampes, livret</h2>
                <p>Le livret "caddie de lampes" réunit le contenu du caddie, tous les photogrammes à l'échelle 1/1. Les colportages sont racontés, certains illustrés de  photos. D'autres modèles de lampes ou photogrammes de lumières sont joints parce qu'ils sont liés.<br>64 pages, 20 € + fdp</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
