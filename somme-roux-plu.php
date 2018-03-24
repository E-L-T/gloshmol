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
    ['FW077-Sains_s_plateau.jpg', '', 'FW077-Sains_s_plateau', ''],
    ['FW205-BlV-Mayon_r.jpg', '', 'FW205-BlV-Mayon_r', ''],
    ['FW212-BlV-Beuville_r.jpg', '', 'FW212-BlV-Beuville_r', ''],
    ['FW215-BlV-Liberation_av.jpg', 'vertical', 'FW215-BlV-Libération_av', ''],
    ['FW216-BlV-Tour_de_Ville-David-croix.jpg', '', 'FW216-BlV-Tour_de_Ville-David-croix', ''],
    ['P-Che-02-EG-eglise.jpg', 'vertical', 'P-Che-02-EG-eglise', ''],
    ['FW281-Che-Eglise_pce.jpg', 'vertical', 'FW281-Che-Eglise_pce', ''],
    ['P-Che-04-Eglise_pce.jpg', 'vertical', 'P-Che-04-Eglise_pce', ''],
    ['FY040-Che-Frieres_r-vieille.jpg', 'vertical', 'FY040-Che-Frieres_r-vieille', ''],
    ['FY051-Che-Charrons_r.jpg', 'vertical', 'FY051-Che-Charrons_r', ''],
    ['GB04-Che-poule.jpg', 'vertical', 'GB04-Che-poule', ''],
    ['GB07-Che-poule.jpg', 'vertical', 'GB07-Che-poule', ''],
    ['P_FeV-02-V_Hugo_r.jpg', '', 'P_FeV-02-V_Hugo_r', ''],
    ['P_FeV-06-seuil-D29_est-ex.jpg', '', 'P_FeV-06-seuil-D29_est-ex', ''],
    ['P_FeV-08-ZI-Auer-usine.jpg', '', 'P_FeV-08-ZI-Auer-usine', ''],
    ['P_FeV-09-ZI-silos.jpg', '', 'P_FeV-09-ZI-silos', ''],
    ['FW247-BlV-seuil_est_in-cirque_pavillon.jpg', 'vertical', 'FW247-BlV-seuil_est_in-cirque_pavillon', ''],
    ['P_FeV-16-seuil_ouest-A_Briand-in.jpg', '', 'P_FeV-16-seuil_ouest-A_Briand-in', ''],
    ['P_FeV-19-seuil_ouest-A_Briand-ex.jpg', 'vertical', 'P_FeV-19-seuil_ouest-A_Briand-ex', ''],
    ['P_FeV-20-ZI-parking_bleu.jpg', '', 'P_FeV-20-ZI-parking_bleu', ''],
    ['FZ29-Che--EG-J_Deliniere_r-w.jpg', 'vertical', 'FZ29-Che--EG-J_Delinière_r', ''],
    ['P-Che-13--EG-J_Deliniere_r.jpg', 'vertical', 'P-Che-13--EG-J_Deliniere_r', ''],
    ['P-Che-03-poste.jpg', '', 'P-Che-03-poste', ''],
    ['P-Che-07-Arrest_rte-gare-paysage.jpg', '', 'P-Che-07-Arrest_rte-gare-paysage', ''],
    ['P-Che-08-RD925.jpg', '', 'P-Che-08-RD925', ''],
    ['P-Che-09-ecole.jpg', '', 'P-Che-09-ecole', ''],
    ['P-Che-10-F&N_Get_r.jpg', '', 'P-Che-10-F&N_Get_r', ''],
    ['FX086-FeV-Pasteur_r.jpg', 'vertical', 'FX086-FeV-Pasteur_r', ''],
    ['P-Che-14-eolienne_nez.jpg', '', 'P-Che-14-eolienne_nez', ''],
    ['P-Che-16-restaurant_routier-nationale.jpg', '', 'P-Che-16-restaurant_routier-nationale', ''],
    ['P-Che-18-eolienne_chantier.jpg', 'vertical', 'P-Che-18-eolienne_chantier', ''],
    ['P_FeV-03-Holleville-fres-pce.jpg', '', 'P_FeV-03-Holleville-fres-pce', ''],
    ['SAINS_e_A-02-Chaussee_r.jpg', 'vertical', 'SAINS_e_A-02-Chaussee_r', ''],
    ['SAINS_e_A-01-Cottenchy_in.jpg', '', 'SAINS_e_A-01-Cottenchy_in', '']
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
                <h3>Documents</h3>
                    <p><a href="documents/Che-book-screen.pdf" target="blank">PLU de Chépy</a></p>
                    <p><a href="documents/FeV-book-screen.pdf" target="blank">PLU de Feuquières-en-Vimeu</a></p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
