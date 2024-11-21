<?php
require_once('inc/init.inc.php');
$page= 'Strasbourg lalala';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    ['LS41-musee-oeuvre_notre_Dame_Strasbourg-chapiteau-tritons-w.jpg', 'horizontal', 'Chapiteau au tritons', ''],
    ['LU08-Strasbourg-musee_oeuvre_notre_Dame-chapiteau_cubique_palmettes-ornement-w.jpg', 'vertical', 'chapiteau cubique à palmettes', ''],
    ['LU10-Strasbourg-musee_oeuvre_notre_Dame-chapiteau-colonne_engagee-w.jpg', 'vertical', 'chapiteau, colonne engagée', ''],
    ['LU47-Strasbourg-musee_archeologie-sphinge-w.jpg', 'vertical', 'sphinge', ''],
    ['LU48-Strasbourg-musee_beaux_arts-Hans_Memling-polyptique-vanite_redemption-w.jpg', 'vertical', 'Hans Memling, vanité de la rédemption', ''],
    ['Strasbourg_lalala-livre-edition-18x24-210903.gif', 'horizontal', 'édition 18x24', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Strasbourg lalala</h2>
                    <p>"Je suis à Strasbourg pour 3 jours, les musées viennent de rouvrir après de longs mois de confinement. Et je me mets à dessiner comme une chanson qui te donne envie de danser."<br />
                    - <a href="https://www.musees.strasbourg.eu/musee-de-l-oeuvre-notre-dame" target="_blank">Musée de l'Œuvre Notre Dame</a><br />
                    - <a href="https://www.musees.strasbourg.eu/musee-archeologique" target="_blank">Musée Archéologique</a><br />
                    - <a href="https://www.musees.strasbourg.eu/musee-des-arts-decoratifs" target="_blank">Musée ddes Arts Décoratifs</a><br />
                    - <a href="https://www.musees.strasbourg.eu/web/musees/musee-historique" target="_blank">Musée Historique</a><br />
                    - <a href="https://www.musees.strasbourg.eu/web/musees/musee-des-beaux-arts" target="_blank">Musée des Beaux Arts</a><br />
                    - <a href="https://www.musees.strasbourg.eu/web/musees/musee-d-art-moderne-et-contemporain" target="_blank">Musée d'Art Moderne et Contemporain</a><br />

                <h3>Edition</h3>
                    <p>Un livre réunit les dessins réalisés dans les musées de Strasbourg.
                    60 pages, 18x24 cm, imprimé et façonné à l'atelier, Aubervilliers 2021.<br>ISBN : 978-2-494939-09-7<br> 20 euros + fdp</p> 
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
