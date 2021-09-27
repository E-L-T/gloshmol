<?php
require_once('inc/init.inc.php');
$page= 'Musée de la Toile de Jouy';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'Toile_Jouy-livret-191017-13-w.jpg', 'horizontal', 'couverture et quatrième', ''],
    [ 'Toile_Jouy-livret-191017-06-w.jpg', 'horizontal', 'fleurs de couleur', ''],
    [ 'Toile_Jouy-livret-191017-07-w.jpg', 'horizontal', 'motifs fleurs', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Musée de la Toile de Jouy</h2>
                <p>"Ça fait bien longtemps que je connais le musée de la toile de Jouy, j’ai grandi pas très loin, à Igny. Je peux m’y rendre souvent, profiter d’une visite à mes parents. Quand j’y retourne j’emmène quelqu’un et j’y découvre de nouvelles choses. Un changement dans l’accrochage, une pièce, un espace ou une vue que je n’avais pas vu. Ce que j’aime y retrouver c’est la délicatesse du dessin des motifs et des motifs floraux en particulier, mais parfois des surprises me cueillent comme les coquecigrues ou les polonaises."<br /><br />Livret 32 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2017<br />15 € + fdp </p>

                <p><a href="http://www.museedelatoiledejouy.fr/" target="_blank">Site du Musée de la Toile de Jouy</a></p>

            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
