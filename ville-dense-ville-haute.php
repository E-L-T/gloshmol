<?php
require_once('inc/init.inc.php');
$page= 'Ville dense / Ville haute';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'HZ-bleu-maison-pagode-070901-W.jpg', 'vertical', 'Pagode', 'Aquarelle sur arches'],
    [ 'HZ-bleu_maison-residentialisation-070826-W.jpg', 'vertical', 'Résidentialisation', 'Aquarelle sur arches'],
    [ 'HZ-bleu-maisons_porte_densite-070608-W.jpg', 'vertical', 'Densité', 'Aquarelle au bleu de pastel sur arches'],    
    [ 'HZ-bleu-maison-famille_1-070817-W.jpg', 'horizontal', 'Monsieur et Madame Maison attendent un heureux événement', 'Aquarelle sur arches'],
    [ 'HZ-bleu-maison-famille_2-070817-W.jpg', 'horizontal', "La famille Maison s'agrandit", "aquarelle au bleu de Lectoure sur arches"],
    [ 'HZ-bleu-maisons-densite-070610-W.jpg', 'vertical', 'Densité 2', 'Aquarelle au bleu de pastel sur arches'],    
    [ 'HZ-la+haute_tour_du_monde-070808-W.jpg', 'vertical', 'La tour la plus haute du monde', 'Aquarelle et encre sur arches'],
    [ 'HZ-maison_arbre-070820-W.jpg', 'horizontal', 'Maison arbre', 'Encre de chine sur arches'],
    [ 'ellipse-01.jpg', 'horizontal', 'Ellipse 1', ''],
    [ 'ellipse-02.jpg', 'horizontal', 'Ellipse 2', ''],
    [ 'ellipse-03.jpg', 'horizontal', 'Ellipse 3', ''],
    [ 'ellipse-04.jpg', 'horizontal', 'Ellipse 4', ''],
    [ 'HVD-070421-cercle_densite-W.jpg', 'horizontal', 'Cercle densité', "Le cercle a un rayon de 3,94 m, dessine le périmètre d'une surface de 48,55 m² soit la surface diponible pour chaque habitant de la ville de Paris dont la densité est de 90 000 hab/km²"],
    [ 'densite_corde-W.jpg', 'horizontal', 'Densite corde', 'Le cercle de feu est réalisé au moyen de cette corde lestée à son extrémité. En déroulant ou en réduisant la longueur de la corde le cercle contient une surface plus ou moins importante, correspondant à la densité souhaitée.'],
    
    

];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Ville dense / Ville haute</h2>
                <p>La question de la ville dense, ou plutôt de la ville qui grandirait en hauteur est à Paris une question urbaine actuelle.<br>
                De nombreuses démarches sont engagées pour échapper à un débat simpliste, pour faire bouger les esprits et considérer ce projet sereinement et sans idéologie.<br>

                C’est précisément cette dynamique que ce travail sert, sur un mode artistique, poétique, à travers des dessins et « le cercle », une performance.</p>
                  <h3>Dessins</h3>
                        <p>Certains de mes dessins abordent cette question de la ville dense ou haute. Ils donnent une image singulière de certaines figures de cette ville
                        </p>
                    <h3>Le cercle</h3>
                      <p>Quelle est la forme de la densité ? Comment représenter la densité ?
                          Comment mettre en place des procédures alternatives pour ouvrir, sur la base des ratios de la ville dense, à des formes ?<br>

                          Le cercle est une forme parfaite et cette installation permet de s'approprier formellement et physiquement ces questions.<br>

                          Les premiers schémas montrent des méthodes pour dessiner l'ellipse, transformation du cercle dans la perspective. Ils conduisent à une photographie d'une performance, la réalisation, le dessin d'un cercle à l'échelle 1/1 qui contient la surface disponible pour chaque habitant de Paris pour une densité de xxxxxxx hab./km²</p>
                      <a href="<?= RACINE_SITE ?>documents/tour-ville_dense-BSegers-2007.pdf">Des chiffres et des formes</a>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
