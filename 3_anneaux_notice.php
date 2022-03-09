<?php
require_once('inc/init.inc.php');
$page= 'anneaux notice';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ '3_anneaux_notice-190711-sculpture-buche-bois-3_anneaux-22.jpg', 'horizontal', '3 anneaux, bouleau, 2019, 53cm', ''],
    [ '3_anneaux-211014-sculpture-3_trois_anneaux-3-w.JPG', 'horizontal', 'LB52, esquisse, encre, 18x24 cm', ''],
    [ '3_anneaux-211019-anneaux_boite-3-w.JPG', 'vertical', 'boîte de stockage, de transport', ''],
    [ '3_anneaux-LB52-projet_sculpture-anneaux-bois-w.jpg', 'vertical', 'LB52, esquisse, encre, 18x24 cm', ''],
    [ '3_anneaux-LB53-projet_sculpture-anneaux-bois-w.jpg', 'vertical', 'LB53, esquisse, encre, 18x24 cm', ''],
    [ '3_anneaux-LB34-projet_sculpture-anneaux-bois-w.jpg', 'vertical', 'LB34, esquisse, encre, 18x24 cm', ''],
    [ '3_anneaux-LB33-projet_sculpture-anneaux-bois-w.jpg', 'vertical', 'LB33, esquisse, encre, 18x24 cm', ''],
    [ '3_anneaux-LB32-projet_sculpture-anneaux-bois-w.jpg', 'vertical', 'LB32, esquisse, encre, 18x24 cm', ''],
    [ '3_anneaux-LC58-Lisbonne-projet-sculpture-anneaux_bois-w.jpg', 'horizontal', 'LC58, esquisse, encre, 18x24 cm', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>3 anneaux, sculpture</h2>
                <p> - sculpture<br> - année 2019<br> - bûche glanée sur un trottoir d’Aubervilliers<br> - hauteur : <br> - largeur : <br>accompagnant l’oeuvre :<br> - une notice de médiation<br> - boîte de rangement, de stockage et d’archivage<br> - QR code avec informations numériques relatives à l’oeuvre (photo + notice)<br><br>dispositif de monstration<br> - sur une tablette, une table, un socle<br><br>peut être manipulée<br> - oui, conseillé<br> - appartient au fonds d'art contemporain de la ville d'Aubervilliers, acquisition 2021<br>
 </p><br><br>
                
                <h2>description, récit de l'oeuvre, notice</h2>
                <p>3 anneaux est une sculpture à la fois classique et moderne.<br>Ce qu’elle a de classique c’est sa fabrique, sa conceprion. Au départ il y a un travail d’esquisses pour comprendre les volumes, comment dans un bloc je vais trouver la forme que j’ai en tête, la forme que je cherche. Il faut en passer par le dessin pour appréhender ces volumes articulés, simples mais imbriqués. Les 3 anneaux sont taillés dans une seule bûche. Il y a dans cette chaine une mécanique que j’expérimente ici pour la première fois et cette mécanique spatiale nouvelle est relativement complexe du point de vue de la représentation mentale et matérielle. Le travail de dessin permet de faire les premiers choix concernant la disposition des anneaux dans le cylindre de la bûche et combien, d’abord deux puis trois.<br><br>La pièce est attaquée comme une sculpture classique, dégrossissage qui s’arrête à un niveau de finition “non finito” parce que la pièce trouve son enjeu à un endroit qui nous est plus actuel, plus proche de nous.<br>Cette proximité est celle du contact de notre peau avec le bois. Ce n’est pas seulement une émotion, c’est plus qu’une sensation, c’est la matière qu’on a réussi à enlever, le contrat négocié avec un morceau de bois.<br>Alors les 3 anneaux sont posés sur une table, sur une tablette, ils peuvent être manipulés, le contraire serait dommage parce que beaucoup ont envie de les prendre en mains.<br><br>On peut manipuler une œuvre, une sculpture. Ceux qui prennent les 3 anneaux en main veulent répondre à une question, est-ce qu’il y a un raccord ? la chaine a-t-elle été taillée d’une pièce ou bien les trois anneaux ont été assemblés ? On peut aussi les prendre en main pour essayer de reconstituer la bûche et voir éventuellement comment la disposition des anneaux dans le bois tente d’éviter le coeur fragile (sans toujours y parvenir). On peut aussi prendre cette sculpture en mains parce que c’est une sculpture, des formes articulées, un jeu mécanique qui roule gentiment dans la main. On peut la toucher parce qu’un doigt, l’annulaire doit son nom à l’anneau qu’il porte. On peut la toucher pour toucher du bois.</p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
