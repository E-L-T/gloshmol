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
define("RACINE_SITE", "/gloshmol/");
//define('RACINE_SITE', 'http://www.gloshmol.com/gloshmolB/');

// le chemin à partir de htdocs

//htdocs nom du dossier en local. devient www sur le serveur (nom de l'url acheté)

//Autres inclusions
require_once('fonctions.inc.php');