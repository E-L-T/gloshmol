<?php
require_once('inc/init.inc.php');
$page= 'Contact';
require_once('inc/haut.inc.php');
$realisations_active = '';
$achat_active = '';
$a_propos_active = '';
$contact_active = 'active';
require_once('inc/header.realisation.inc.php');

?>

            <div id ="identificationContenu">
                <h2>Contact</h2>
                <p><a href="http://eepurl.com/mrZfT">Inscription à la newsletter</a></p>
                <p><a href="https://www.facebook.com/pg/BertrandSegersGloshmol/" target="_blank">Facebook</a></p>
                <p><a href="https://vimeo.com/user71683044" target="_blank">Vimeo</a></p>
                <p>Pour me contacter directement, vous pouvez m'écrire un email à cette adresse : <a href="mailto:bs@gloshmol.com">bs@gloshmol.com</a></p>
            </div>
        </section>
    </div>
<?php
    require_once('inc/footer.realisation.inc.php');	
?>