<?php
require_once('inc/init.inc.php');
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("<?= RACINE_SITE ?>/imagier_processing/script.sh");
}
?>

<a href="?run=true">Clique pour convertir les photos</a>