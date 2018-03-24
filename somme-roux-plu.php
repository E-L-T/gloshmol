<?php
require_once('inc/init.inc.php');
$page= 'Somme Roux PLU';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    ['FH32-FeV-transformation.jpg', 'vertical', 'FH32 FeV Transformation', ''],
    ['FH39-BlV-percee.jpg', '', 'FH39 BlV Percee', 'Aquarelle'],
    ['FH43-Che-poussiere_vent.jpg', '', 'FH43 Che Poussiere Vent', ''],
    ['FH45-Che-sequence.jpg', '', 'FH45 Che Sequence', ''],
    ['FO90-FeV-F_Buisson_r-maison.jpg', '', 'FO90-FeV-F_Buisson_r-maison', ''],
    ['FO92-FeV-Republique_r-traversee.jpg', '', 'FO92-FeV-Republique_r-traversee', ''],
    ['FW003-Sains-Tilleuls_pce.jpg', '', 'FW003-Sains-Tilleuls_pce', ''],
    ['FW033-Sains-Eg-Verts_Cerisiers_r.jpg', 'vertical', 'FW033-Sains-Eg-Verts_Cerisiers_r', ''],
    ['FW051-Sains-Moroville_ch.jpg', '', 'FW051-Sains-Moroville_ch', ''],
    ['FW066-Sains-Tilleuls_pce-calvaire.jpg', 'vertical', 'FW066-Sains-Tilleuls_pce-calvaire', ''],
    ['FW077-Sains_s_plateau.jpg', '', 'FW077-Sains_s_plateau', '']

];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Somme Roux PLU</h2>
                    <p>Stanislas Roux me demande de dessiner dans des villes pour lesquelles il doit actualiser les PLU. Je propose cet outil qui sera intégré aux pièces réglementaires.<br />
                    Objet : dessins d'analyse urbaine pour PLU<br />
                    Maître d'oeuvre : Agence Stanislas ROUX<br />
                    période : 2003<br /> 
                    5 communes : Bray sur Somme, Beaucamp le Vieux, Chépy, Feuquières en Vimeu, Sains en Amiénois<br />
                    Durée pour chaque dossier : 1 semaine de desins sur la commune, 1 semaine pour réaliser le dossier<br />
                    Fonds de dessins : 600 dessins ont été réalisés sur l'ensemble de la mission </p>

                <h3>Outil</h3>
                    <p>Ce travail est conçu et structuré comme un outil. Il permet à la maîtrise d'ouvrage d'investir une analyse du territoire et d'amorcer le projet de ville.</p>              
                <h3>Structure de l'ouvrage</h3>
                    <p>Plusieurs entrées sont proposées pour accéder aux dessins : filelist, planche contact, points de vues situés sur cadastre. Les fichiers des dessins portés par un CD sont ainsi utilisables.</p>
                <h3>Multiplication des médiums</h3>
                    <p>Dans la fabrication des dessins de nombreuses techniques sont mises en oeuvre (dessin, peinture, gravure, encre, pastels ...). Une chronique est écrite, elle parle des rencontres et de ce qui échappe au dessin. A le fin du dossier un thème contextuel est abordé sur un mode non figuratif. Les sujets abordent des échelles variées de la ville, de la vieille dame qui traverse avec sa cane au vent dans le paysage.</p>
                <h3>Résultat</h3>
                    <p>Stanislas a choisi d'associer ces dossiers aux pièces réglementaires des PLU. Comme le projet urbain, ce travail s'inscrit dans dans un long terme.</p> 
                <h3>Qualité consciente</h3>
                    <p>Avec le recul, cette expérience m'a fait toucher un point essentiel de ces projets urbains et de leurs enjeux. Comme on est tenté de regarder dans la direction que pointe un appareil photo, les habitants ont été surpris par la possibilité que le paysage, le patrimoine urbain qu'ils habitent comporte une qualité.</p> 
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
