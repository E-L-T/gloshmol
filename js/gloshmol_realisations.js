var mediaLimitSize = 900;

function filtrerSommaire(filtre, realisationChoix) {
    //gestionnaire d'événement "click"
    //si je ne suis pas sur la page index.php, allons y. Attendons que la page se charge, puis activons les filtres (la suite des instructions de cette fonction)
    var filtreElt = document.getElementById(filtre);
    filtreElt.addEventListener("click", function() {
        //redirige sur la page d'accueil si on ne si trouve pas :
        if(window.location!="index.php"){
            //console.log(window.location.href);
            window.location.replace("index.php#" + filtre);
        } 
        window.onload = function(){
            //commence par (ré)afficher l'ensemble des éléments
            var realisationsElts = document.getElementById("realisations");
            var integraleRealisationElts = realisationsElts.querySelectorAll(".realisations, .realisation, .exposition, .dessin, .installation, .sculpture, .livret");
            for (i = 0; i < integraleRealisationElts.length; i ++) {
                integraleRealisationElts[i].style.display = "block";   
            }
            //supprime les éléments ne faisant pas partie de la catégorie sélectionnée
            var excludedElts = realisationsElts.querySelectorAll("div:not(." + realisationChoix + ")"); 
            for (i = 0; i < excludedElts.length; i++) {
                excludedElts[i].style.display = "none";
            }
            //affiche systématiquement le texte de présentation des réalisations
            var texteRealisationsElts = document.querySelectorAll(".texteRealisation");
            for (j = 0; j < texteRealisationsElts.length; j++) {
                texteRealisationsElts[j].style.display = "block";
             }
        }
        
    });
}
//Appels de la fonction pour chaque catégorie de réalisation
filtrerSommaire("filtreExposition", "exposition");
filtrerSommaire("filtreDessin", "dessin");
filtrerSommaire("filtreInstallation", "installation");
filtrerSommaire("filtreSculpture", "sculpture");
filtrerSommaire("filtreLivret", "livret");
//filtrerSommaire("filtreTout", "");

//Déclaration de la fonction toggleMenu
var iconeMenuElt = document.querySelector("#iconeMenu");
/* console.log(iconeMenuElt);
 */var asideElt = document.querySelector(".realisationAside");
/* console.log(asideElt);
 */var iconeCroixElt = document.querySelector("#iconeCroix");
/* console.log(iconeCroixElt);
 */
//Apparition du menu vertical post clic menu burger
iconeMenuElt.addEventListener("click", function(e){
    e.preventDefault(); //j'ajoute cette ligne pour éviter de remonter automatiquement en haut de page lors d'un clic sur menu burger (ou icone croix, ci-dessous);
    $('.realisationAside').animate({right:"0px"},600);
    iconeMenuElt.classList.toggle("disappear");
    iconeCroixElt.classList.toggle("appear");
});

//Disparition du menu vertical quand on clique sur la croix
iconeCroixElt.addEventListener("click", function(e){
    e.preventDefault();     
    $('.realisationAside').animate({right:"-210px"},600);
    iconeMenuElt.classList.toggle("disappear");
    iconeCroixElt.classList.toggle("appear");
});

//Disparition du menu vertical quand on clique sur un lien dans le menu vertical
document.querySelector("nav").addEventListener("click", function(e) {
/*     e.preventDefault(); Là, j'ai besoin de revenir au début de la liste
 */    if (window.innerWidth < mediaLimitSize) {
        $('.realisationAside').animate({right:"-210px"},600);
        iconeMenuElt.classList.toggle("disappear");
        iconeCroixElt.classList.toggle("appear");
    } 
});
