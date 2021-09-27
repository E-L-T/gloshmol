<?php
require_once('inc/init.inc.php');
$page= 'musée de la céramique de Sèvres';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'musee_ceramique_Sevres-200328-livret-w.jpg', 'horizontal', 'couverture', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>musée de la céramique de Sèvres, livret</h2>
                <p>"Il y a des fois où la réalité résiste au dessin, des fois où c’est difficile de dessiner et quand je pense à ces moments je pense au musée de la céramique de Sèvres et à cette première visite que j’y avais faite il y a près de 20 ans. Ce n’était pas la première fois que j’y allais, je pense que je l’avais déjà visité avec mes parents mais longtemps avant. Cette fois-ci j’y allais à la découverte de ses collections avec mon carnet."<br /><br />Livret 64 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2020<br />15 € + fdp </p>
                    - <a href="https://www.sevresciteceramique.fr/" target="_blank">site du musée de la céramique de Sèvres</a><br />

            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
