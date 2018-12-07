<?php
require_once('inc/init.inc.php');
$page= 'Je suis ici';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
    [ 'JSI-equipe.jpg', 'horizontal', "L'équipe", "Bertrand Segers, architecte <br> Charles Edmond Henry, étudiant en architecture <br> Christophe Chabbert, vidéaste <br> Frank-David Barbier, étudiant en architecture"],
    [ 'JSI-050827-ph 044.jpg', 'horizontal', 'ph 044', ''],
    [ 'JSI-050827-ph 230-A3.jpg', 'horizontal', 'ph 230 A3', ''],
    [ 'JSI-axo_programme.jpg', 'vertical', 'axo programme', ''],
    [ 'JSI-GO46-EP8-050913-Mt_Fuji-02.jpg', 'horizontal', 'Mt Fuji 02', ''],
    [ 'JSI-panorama.jpg', 'horizontal', 'panorama', ''],
    [ 'JSI-p├йpini├иre-3.jpg', 'vertical', 'pépinière 3', ''],
    [ 'JSI-recif_artificiel-LG.jpg', 'horizontal', 'Récif artificiel LG', ''],
    [ 'JSI-section_programme-LG.jpg', 'horizontal', 'Section programme LG', ''],
    [ 'x-EP8-050827-ph 008.jpg', 'horizontal', 'ph 008', ''],
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>JSI, je suis ici</h2>
                <p>« JSI, je suis ici » est le titre de notre projet.<br>
                C’est un projet urbain qui s’attache à valoriser et à développer pour la ville d’Hénin Carvin l’image, l’activité, et les ressources existantes d’un territoire riche, en donnant leur place à ceux qui l’habitent.<br><br>

                Son titre vient du nom que nous avons donné à la stratégie centrale, parce que le projet est entré dans le sujet par le thème de la « stratégie ».
                JSI est une stratégie de projet urbain à la fois contextuelle, matérielle et expérimentale. Si elle convoque des notions abstraites comme la praxis, « action qui peut changer le monde », outil d’utopie, ou le trou une notion plus abstraite encore, conceptuelle et expérimentale, une idée qui relie les villes ou un désir poétique de toucher un fantôme, elle a pour but de donner à la ville les outils les plus concrets pour un développement pérenne parce que conscient de son identité.<br><br>

                Nous choisissons d’être présents sur le site et de nous y impliquer pour que le projet existe, pour apprendre à le connaître. Nous nous y rendons. Une fois sur place nous nous promenons dans les rues, grimpons sur le terril, pique niquons, prenons des photos et dessinons. A la fin de la première journée de visite, nous regagnons le véhicule et le retrouvons avec les deux pneus avant crevés. La mésaventure qui nous inquiète un court moment devient la porte d’entrée au cœur de la question d’Hénin Carvin. Nous sommes samedi soir, obligés donc de trouver une chambre d’hôtel, et d’y rester jusqu’au lundi pour faire la réparation. Pendant ces trois jours nous croisons Ursmar, Roger, monsieur Bernard, Hakim, Bélo, et d’autres. Chacun nous accueille, nous raconte son histoire de la ville, son histoire des mines, son histoire personnelle aujourd’hui. De la chronique de ce voyage avec ceux qu’il croise, le projet va prendre corps au présent.<br><br>

                Le programme se développe autour de trois pôles que sont le panorama, le troisième jumeau et le trou.</p>

                <h3>Panorama, le spectacle total</h3>
                <p>Le terril amorce le programme, l’entassement de stériles doit être la première ressource, le gisement, le creux riche et chargé.
                Cette ressource est exploitée pour ses propriétés.
                La première est sa matérialité. Les terres stériles sont dépolluées, exploitées pour construire les nouvelles routes. L’extraction se fait selon le gabarit d’une courbe pleine. Ce gabarit peut être appliqué aux autres terrils. Le panorama s’en trouve adouci. Dans un deuxième temps, il s’agit d’étudier, en collaboration avec l’université de Lille ou dans le prolongement de travaux australiens sur des questions similaires, l’exploitation de la chaleur produite par l’auto combustion des résidus organiques afin de produire une énergie calorifique pour les lotissements à venir.</p>

                <h3>Micro activités : le troisième jumeau</h3>
                <p>Le troisième jumeau fait référence à une typologie présente sur le site, les maisons jumelles. C’est une pièce ajoutée à cette typologie. L’intervention est posée sur l’ensemble du site selon les besoins du projet et du lieu. Son rôle est de densifier doucement le bâti. Des cellules de taille réduite permettent aux logements de s’agrandir. Elles permettent aussi en s’agglomérant ou non d’accueillir des activités tournées vers un espace public, lui donnant un caractère urbain qui prête à s’y promener.
                Un autre paradigme de cette cellule fonctionnelle est appliqué aux jardins familiaux sous la forme de petits équipements techniques.
                Cette micro stratégie est ouverte à des usages indéterminés que l’espace public à la capacité d’inventer.</p>

                <h3>Le trou</h3>
                <p>A la façon de Louis Kahn, on demande à la ville ce qu’elle veut, elle répond qu’elle veut de la lumière et des gens, de la chaleur. Sur le parc on doit pouvoir imaginer une foule. Les ouvertures du parc sont multipliées, et les chemins qui l’irriguent depuis la ville se croisent et y dessinent une centralité. Le travail sur la lumière se traduit par des pièces de verre ajoutées aux terres dépolluées, elles brillent.<br><br>

                « L’objectif initial d’Europan est de donner corps à l’idée d’une Europe de la jeune architecture » (charte Europan 8).
                Le projet reprend les missions indiquées. S’il n’est assujetti à aucune condition de forme, il reste soumis aux règles de fond qui régissent l’architecture. Sa vocation est généreuse. Il doit maintenant rencontrer ses interlocuteurs pour transposer sa volonté opérationnelle et construite de développement.</p>
                <a href="documents/JSI-affiche-Henin_Carvin-europan8-060327.pdf" target="_blank">Les affiches</a><br>
                <a href="documents/JSI-dossier-Henin_Carvin-europan8-060327.pdf" target="_blank">Le dossier</a><br>
                <a href="http://www.arclab.umontreal.ca/EUROPAN-FR/fiche_site.php?lang=2&langid=2&id=14" target="_blank">Europan-France</a>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
