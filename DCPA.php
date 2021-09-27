<?php
require_once('inc/init.inc.php');
$page= 'DCPA';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    ['01-180521-DCPA_Bedier-scenarios-bestiaire-04-w.jpg', 'horizontal', 'DCPA Bedier scenarios bestiaire 04', ''],
    ['02-180424-DCPA-Serpent-w.jpg', 'horizontal', 'DCPA Serpent', ''],
    ['03-180227-DCPA_Bedier-cubes_configurations-45-2-w.jpg', 'vertical', 'DCPA Bedier cubes configurations 45 2', ''],
    ['04-180227-DCPA_Bedier-cubes_configurations-49-2-w.jpg', 'horizontal', 'DCPA Bedier cubes configurations 49 2', ''],
    ['05-180521-DCPA_Bedier-scenario-serpent-05-w.JPG', 'horizontal', 'DCPA Bedier scenario serpent 05', ''],
    ['06-KK20-DCPA_Bedier-formes_constituees-w.jpg', 'horizontal', 'DCPA Bedier formes constituees', ''],
    ['07-KK38-DCPA_Bedier-scenarios-ZIG_ZAG-w.jpg', 'vertical', 'DCPA Bedier scenarios ZIG ZAG', ''],
    ['08-KK46-DCPA_Bedier-scenarios-mur-w.jpg', 'horizontal', 'DCPA Bedier scenarios mur', ''],
    ['09-KK57-DCPA_Bedier-scenarios-point_interrogation-w.jpg', 'horizontal', 'DCPA Bedier scenarios point interrogation', ''],
    ['10-KM23-DCPA_Bedier-cube-w.jpg', 'vertical', 'DCPA Bedier cube', ''],
    ['11-KM24-DCPA_Bedier-cube-w.jpg', 'horizontal', 'DCPA Bedier cube', ''],
    ['12-KZ180501-DCPA_Bedier-Mastaba-w.jpg', 'vertical', 'DCPA Bedier Mastaba', ''],
    ['13-180305-DPA_Bedier-caddie_ambassadeurs-3-w.jpg', 'vertical', 'DPA Bedier caddie ambassadeurs', ''],
    ['14-180426-banc_muscu_chatelet-w.jpg', 'horizontal', 'banc muscu chatelet', ''],
    ['15-KM10-DCPA_Bedier-tabouret-w.jpg', 'vertical', 'DCPA Bedier tabouret', ''],
    ['16-KM11-DCPA_Bedier-charniere_bois-w.jpg', 'horizontal', 'DCPA Bedier charniere bois', ''],
    ['DCPA-210321-livret-1-w.jpg', 'horizontal', 'DCPA, livret, couverture', ''],
    ['DCPA-210321-livret-2-w.jpg', 'horizontal', 'DCPA, livret, formes', ''],
    ['DCPA-210321-livret-7-w.jpg', 'horizontal', 'DCPA, cathédrale', '']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>DCPA</h2>
                    <p>Maître d'ouvrage<br />
                    DCPA Bédier Est - 6-8, avenue de la Porte d'Ivry – 75  013 Paris<br />
                    l'équipe<br />
                    - <a href="https://www.ateliermartel.com/" target="_blank">Atelier martel</a>, architecte mandataire, Stéphane Cachat<br />
                    - Construire, Denis Favret architecte<br /> 
                    - Bertrand Segers / gloshmol, artiste<br />
                    - Camille Ferry et Armelle Cuny toutes deux stagiaires</p>

                <h3>Mission</h3>
                    <p>Conception et suivi de réalisation de l'aménagement circulaire des 7 halls de 60m² et d'un espace partagé de 100 m²</p>              
                <h3>Triple diagnostic</h3>
                    <p>-Diagnostic des besoins des usagers de ces nouveaux bureaux<br />
                    - Diagnostic des compétences et expertises des ateliers municipaux porte d'Aubervilliers (menuiserie, serrurerie, tapisserie...)<br />
                    - Diagnostic des matériaux stockés pouvant être utilisés dans le mobilier circulaire</p>
                <h3>Un système modulaire</h3>
                    <p>Nous choisissons un système modulaire développé depuis 20 ans par Bertrand Segers. Un cube de 37 cm d'arête se transforme en différents meubles (rangements, assises, murs...). Cette dimension réduite présente de nombreux avantages en terme de recyclage et fabrication.</p>
                <h3>Livret</h3>
                    <p><br />Livret 40 pages, 18x24 cm, imprimé façonné à l'atelier, Aubervilliers 2018<br />15 € + fdp </p></p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
