<?php
require_once('inc/init.inc.php');
$page= 'Bertrand Segers';
require_once('inc/haut.inc.php');
$realisations_active = '';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
require_once('inc/header.realisation.inc.php');	

?>

            <div id ="identificationContenu" class="class-404">
                <br>
                <br>            
                <div><p>Gloshmol. Du grec <em>glossa</em> la langue, <em>emon</em> tant que. "Tant qu'il y a la parole".</p>   
                </div>
                <br>
                
                <div >
                    <p>Erreur 404 -> <a href="<?= RACINE_SITE ?>index.php">retour à la page d'accueil</a></p>
                </div>
            </div>
        </section>
    </div>
<?php
require_once('inc/footer.realisation.inc.php');	
?>