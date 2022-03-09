<?php
require_once('inc/init.inc.php');
$page = 'Paris Halle aux farines - Surface vivante';
require_once('inc/haut.inc.php');
$realisations_active = 'active';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');

//Mettre ici infos sur images en respectant le format: fichier, vertical ou '' pour horizontal, legendeTitre, legendeDetails.
$images = [
  ['Surface_vivante-PHF-corps_braille.jpg', '', 'PHF Corps Braille', "J'ai couché ma femme sous la voûte et l'ai coupée en 4 morceaux, autant qu'il y a d'amphis. J'ai attribué à chaque type d'accident de la peau un caractère."],    
  ['Surface_vivante-PHF-tableau.gif', '', 'PHF Tableau', "Une fois les accidents répertoriés, ils sont mis au tableau en autant de lignes qu'il y a de niveaux decirculation.Puis ils sont reportés sur les voiles dans une première maquette au 1/40."],    
  ['surface_vivante-nord.jpg', '', 'Répertoire général', "Façade Nord"],    
  ['surface_vivante-sud.jpg', '', 'Répertoire général', "Façade Sud"],    
  ['Surface_vivante-071123-PHF-moule_W.jpg', '', 'Moule', "Meuble permettant le coulage et le moulage des pastilles en béton dense"],    
  ['Surface_vivante-sechoir-W.jpg', '', 'Séchoir', "Meuble conçu et réalisé dans le cadre de la réponse au concours 1% artistique de la Halle aux farines, novembre 2007"],    
  ['Surface_vivante-PHF-071128-chariot-W.JPG', 'vertical', 'Chariot', ""],
  ['Surface_vivante-6-ph-Thomas_Porchet-25_halle_aux_farines_segers_090217-w.jpg', 'vertical', "Surface Vivante 6 Ph Thomas Porchet 25 halle aux farines segers", "©Thomas & Porchet"],
  [ 'Surface_vivante-6-ph-Thomas_Porchet-26_halle_aux_farines_segers_090217-w.jpg', 'vertical', 'Surface vivante 6 ph Thomas Porchet 26 halle aux farines segers 090217 w', '©Thomas & Porchet'],
  [ 'Surface_vivante-6-ph-Thomas_Porchet-27_halle_aux_farines_segers_090217-w.jpg', 'vertical', 'Surface vivante 6 ph Thomas Porchet 27 halle aux farines segers 090217 w', '©Thomas & Porchet'],
  [ 'Surface_vivante-6-ph-S_Chalmeau_102-w.jpg', 'vertical', 'Surface vivante 6 ph S Chalmeau 102 w', '©Stéphane Chalmeau pour ANMA'],
  [ 'Surface_vivante-6-ph-S_Chalmeau_120-w.jpg', 'vertical', 'Surface vivante 6 ph S Chalmeau 120 w', '©Stéphane Chalmeau pour ANMA'],
  [ 'Surface_vivante-6-ph-S_Chalmeau_126-w.jpg', 'vertical', 'Surface vivante 6 ph S Chalmeau 126 w', '©Stéphane Chalmeau pour ANMA'],
  [ 'Surface_vivante-6-ph-S_Chalmeau_195-w.jpg', 'vertical', 'Surface vivante 6 ph S Chalmeau 195 w', '©Stéphane Chalmeau pour ANMA'],
  [ 'Surface_vivante-6-ph-Thomas_Porchet-55_halle_aux_farines_segers_090217-w.jpg', 'horizontal', 'Surface vivante 6 ph Thomas Porchet 55 halle aux farines segers 090217 w', '©Jean-Pierre Porchet & Frédérique Thomas / Rectorat de Paris Université Paris Diderot '],
  [ 'Surface_vivante-6-ph-Thomas_Porchet-63_halle_aux_farines_segers_090217-w.jpg', 'horizontal', 'Surface vivante 6 ph Thomas Porchet 63 halle aux farines segers 090217 w', '©Jean-Pierre Porchet & Frédérique Thomas / Rectorat de Paris Université Paris Diderot'],
  [ 'Surface_vivante-6-ph-Thomas_Porchet-67_halle_aux_farines_segers_090217-w.jpg', 'horizontal', 'Surface vivante 6 ph Thomas Porchet 67 halle aux farines segers 090217 w', '©Jean-Pierre Porchet & Frédérique Thomas / Rectorat de Paris Université Paris Diderot'],
  [ 'Surface_vivante-6-ph-Thomas_Porchet-Thomas&Porcher-04555-w.jpg', 'horizontal', 'Surface vivante 6 ph Thomas Porchet Thomas&Porcher 04555 w', '©Jean-Pierre Porchet & Frédérique Thomas / Rectorat de Paris Université Paris Diderot'],
  [ 'Surface_vivante-6-ph-Thomas_Porchet-Thomas&Porcher-04551-w.jpg', 'vertical', 'Surface vivante 6 ph Thomas Porchet Thomas&Porcher 04551 w', '©Jean-Pierre Porchet & Frédérique Thomas / Rectorat de Paris Université Paris Diderot'],
  [ 'Surface_vivante-201209-pastilles+livret-w.jpg', 'horizontal', 'Un séchoir à pastilles et les éditions qui retracent ce projet, cette histoire']
];
?>
            <div id ="mediasRealisation">

<?php
    AffichageImages($images);
?>
                  
            </div>

            <div id ="presentationRealisation">
                <h2>Paris Halle aux farines - Surface vivante</h2>
                    <p><em>Voir également la réalisation associée :  <a href="<?= RACINE_SITE ?>paris-halle-aux-farines-visiteur.php">Paris Halle aux farines - Visiteur</a></em></p>
                    <p>Projet artistique<br>
                    Halle aux Farines - Université Paris7 Denis Diderot<br>
                    2002 - 2008<br>
                    Architecte : <a href="www.anma.fr">ANMA</a><br>
                    </p>

                    <h3><em>Points saillants sur le nu des murs</em>, texte de Jean Attali</h3>

                    <p>Bertrand Segers écrit en braille sur le nu des murs. Le mot « image », par exemple, ou le mot «écrit». Et si ce dernier mot est trop long pour le pan de mur, il le raccourcit et ne garde que le «cri». Le mot recèle, chaque poète le sait, une inépuisable plasticité.<br><br>

                    Le braille lie les lettres de l’alphabet aux combinaisons d’une matrice de six points. Ces points estampés en relief les rendent tactiles et disponibles à une lecture sur le bout des doigts (comme on le dit de ce qu’on sait « par cœur »).<br><br>

                    Mais le braille ne se réduit pas à la langue écrite des aveugles : un procédé plastique très beau transforme ici le bas-relief des sculpteurs en une rhapsodie de points, de pastilles hémisphériques en faible saillie sur le fond uni d’une paroi. A l’encodage du braille, Bertrand Segers préfère, pour les murs de la halle aux farines, un code intime et dépourvu de message explicite : sur l’enveloppe des amphithéâtres, il écrit le texte épidermique des menus accidents de la peau d’un corps aimé, grains de beauté, points de rousseur, cicatrices. Les points saillants de la peau deviennent la modénature des murs.<br><br>

                    « J’ai couché ma femme sous la voûte de la halle aux farines »<br><br>

                    « J’ai [envoûté] ma femme [sur la couche] de la halle aux farines »<br><br>

                    [Envoûter. Mot venu de l’ancien français volt, vout : « visage, image ». Le mot signifie : 1° « représenter une personne par une figure de cire, de terre glaise, etc. dans le dessein de faire subir à la personne représentée [un] effet magique (…). 2° Exercer sur (qqn) un attrait, une domination irrésistible. (…) « Nous étions envoûtés par les gestes, les voix, le décor, tout ce prestige du théâtre » (Tharaud). Extraits du Petit Robert].
                    D’instinct, Bertrand Segers prononce des phrases aux résonances multiples : par-delà les jeux de langage, les mots qu’il touche semblent faits pour exprimer et signifier plus librement. « L ‘épaisseur de la langue… ne fait pas image », dit l’artiste à propos du braille. Et pourtant, c’est ici l’épaisseur de l’image (son relief, son grain) qui absorbe, en son abstraction muette, la vertu communicative de la langue.<br><br>

                    La longue postérité de la « femme couchée » ou du « nu descendant l’escalier » ne s’est pas épuisée. Le double thème se perpétue sous les marques d’un diagramme discret, qui serait presque fondu dans la matière du mur s’il ne faisait rebondir sur le nu de la maçonnerie les signes d’une taxinomie poétique et plastique. L’idée d’un répertoire de la peau, dès lors qu’elle naît d’un désir prompt à investir tous les fragments de la mosaïque humaine, suggère cette transformation analogue : graphique, sculpturale, architecturale, à la manière du peintre, mais dans la sobriété anti-figurative qui caractérise le geste de Bertrand Segers.<br><br>

                    Les points qui forment la signature du corps sont répartis en de hauts tableaux, dispersés au gré de cette surface d’inscription qu’offrent ensemble le bas-relief et le mur, à tous les degrés de ses niveaux superposés : s’ils ont cessé d’être mots, les points y demeurent matière d’expression, leur signification se résout dans ce « béton dessiné » que l’artiste appelle de ses vœux.<br><br>

                    Car les voiles de béton n’impliquent aucune dureté s’ils sont perçus comme la surface sensible des murs, réagissant aux incidences de l’éclairage comme au rythme des sonorités ambiantes. Le long de l’enfilade des amphithéâtres, on imagine ces mots intimes qui ne disent pas leur nom, comme les « fragments d’un parcours amoureux » – si l’on ose parodier le titre du livre mémorable de Roland Barthes. Le discours amoureux, disait le sémiologue philosophe, « est peut-être parlé par des milliers de sujets (qui le sait ?) mais il n’est soutenu par personne ; il est complètement abandonné des langages environnants ».<br><br>

                    Admettre en cheminant sous cette nef universitaire et le long de ses amphis la présence d’un « langage environnant » qui ferait écho d’une parole intime à la parole savante délivrée de l’autre côté de leurs parois, telle est au fond la suggestion de l’artiste. C’est l’épaisseur de l’image qui absorbe les bruissements de la langue, qui accueille la persistance des pouvoirs de l’écriture, y compris lorsqu’à la manière de très anciens idéogrammes, elle n’est plus lue ni déchiffrée.</p>

                    <h3>Braille</h3>
                    <p>J'ai couché ma femme sous la voûte. Sur la base d'une nomenclature définie j'ai dressé le répertoire des accidents de sa peau en attribuant à chaque type d'accident un caractère.</p>

                    <h3>Protos</h3>
                    <p>A trois reprises j’ai eu l’occasion de tester à l’échelle 1 cette écriture en braille agrandi. A <a href="<?= RACINE_SITE ?>image-braille.php">l’espace mains d’œuvre</a> en 2004 ; lors d’une exposition artistique, au milieu d’autres œuvres, j’ai écrit le mot « image ». En 2006, dans le hall d’accueil du pavillon d’ophtalmologie de <a href="<?= RACINE_SITE ?>paris-hopital-cochin-niches.php">l’hôpital Cochin</a> j’ai installé 4 pastilles de braille, sans écrit de mot. Dernièrement dans la librairie <a href="<?= RACINE_SITE ?>cri.php">« A Balzac à Rodin »</a> je voulais écrire le mot « écrit », au milieu de ses murs de livres, mais je n’ai eu la place que pour le mot « cri ».
                    Le dispositif est donc celui d’une écriture contextuelle, qui nomme ou raconte le lieu où elle se trouve.</p>

                    <h3>Outils</h3>
                        <p>4 outils spécifiques sont conçus et réalisés :<br>
                            <a href="<?= RACINE_SITE ?>documents/moule.pdf" target="_blank">Moule</a><br>
                            <a href="<?= RACINE_SITE ?>documents/sechoir.pdf" target="_blank">Séchoir</a><br>
                            Chariot<br>
                            <a href="<?= RACINE_SITE ?>documents/gerbage.pdf" target="_blank">Gerbage</a><br>

                        </p>

                        <p>
                            <a href="<?= RACINE_SITE ?>documents/surface-vivante-book-web.pdf" target="_blank">Documentation génerale du projet</a>
                        </p>
            </div>

        </section>
    </div>
                
<?php
require_once('inc/footer.realisation.inc.php');	
?>
