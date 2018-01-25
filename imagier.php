<?php
require_once('inc/init.inc.php');
$page = 'Imagier';
require_once('inc/haut.inc.php');
$imagier_active = 'active';
require_once('inc/header.index.inc.php');

?>
    
                
                <div id="supRealisationsImagier">
                    <h2>Imagier</h2>

                    <div id="presentationImagier">L'imagier regroupe les dessins de mes carnets. Tous mes carnets ont été numérisés.<br />Le groupe de 2 lettres par lequel commence chaque nom de fichier désigne le carnet. Le premier carnet s'appelle AA,le deuxième AB, le 26° AZ, le 27° BA et ainsi de suite. Ils apparaissent donc en ordre antéchronologique, les derniers en haut.<br />Le dossier rassemble plus de 13000 dessins, il est mis à jour au fur et à mesure des numérisations.<br />Le moteur de recherche permet de trouver les dessins dont le nom comprend par exemple les mots : Louvre, bleu, portrait, Pasteur, TGI (pour tribunal de grande instance), pont, vélo, métro, vitrail, église..</div>
                    <div class="formulaire" id="divFormulaire">
                        
                        <form action="imagier.php" method="post" class="formImagier" id="formulaireImagier">
                            <input class="inputImagier requeteImagier"id="inputFormulaireImagier" type="search" placeholder="Mot-clé" name="the_search">
                            <input class="inputImagier submitImagier" type="submit" value="Rechercher" />

                        </form>
                           
                </div>    
            </section>
        </div>
<?php
require_once('inc/footer.index.inc.php');
?>