<?php

//definir $page 
$page='';
$resultatImages = [];
$realisations_active = '';
$achat_active = '';
$a_propos_active = '';
$contact_active = '';
$imagier_active = '';


//Chemins
// la variable d'environment "RACINE_SITE" est definie dans .htacccess
// (pas sur que ca soit utile... tout les chemins peuvent etre relatifs... a nettoyer)
define('RACINE_SITE', getenv('RACINE_SITE'));

//Autres inclusions
require_once('fonctions.inc.php');
