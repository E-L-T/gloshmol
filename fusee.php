<?php
require_once('inc/init.inc.php');
$page= 'Fusée';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'fusee_200618-Julio-3-w.jpg', 'horizontal', 'Fusée chez Julio, exposition solo, Paris, juin 2020', ''],
    [ 'fusee-190407-cerf_volant-Marianna-3-w.jpg', 'horizontal', 'Fusée au festival de Berck, avril 2019', ''],
    [ 'fusee_200617-livret-04-w.jpg', 'horizontal', 'le livret', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Fusée, cerf-volant</h2>
                <p>"Le cerf-volant est une architectonique sensible qui joue à la fois d’une structure légère, résistante et souple et de la mécanique des fluides aériens, des mouvements de l’air. La mécanique du cerf-volant c’est à la fois la cambrure de la surface souple qui permet d’évacuer l’air, la traîne généreuse qui équilibre la machine, le bridage mais aussi le moulinet en bois. C’est une architectonique sensible.<br />La fusée est une chose légère mais pas que.""
                <br /><br />
                Fusée est un cerf-volant réalisé selon des procédés traditionnels, une toile peinte fixée sur une structure de bambous.<br />Avec le cerf-volant il y a des dessins, des esquisses, des photos, des moulinets...<br />
                    - long : 2,2 m<br /> 
                    - large : 0,7 m<br /><br />
                    Merci à Maria et Constanza pour leur accueil à <a href="https://spaceinprogress.com/portfolio/fusee-de-bertrand-segers-expositions-ete-2020/" target="_blank">space in progress</a><br /><br />Livret 24 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2020<br />15 € + fdp </p>


            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
