var mediaLimitSize = 900;

function filtrerSommaire(filtre, realisationChoix) {
    //gestionnaire d'événement "click"
    var filtreElt = document.getElementById(filtre);
    filtreElt.addEventListener("click", function() {
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
    });
}
//Appels de la fonction pour chaque catégorie de réalisation
filtrerSommaire("filtreExposition", "exposition");
filtrerSommaire("filtreDessin", "dessin");
filtrerSommaire("filtreInstallation", "installation");
filtrerSommaire("filtreSculpture", "sculpture");
filtrerSommaire("filtreLivret", "livret"); 

//Déclaration de la fonction toggleMenu
var iconeMenuElt = document.querySelector("#iconeMenu");
console.log(iconeMenuElt);
var asideElt = document.querySelector("aside");
console.log(asideElt);
var iconeCroixElt = document.querySelector("#iconeCroix");
console.log(iconeCroixElt);

function toggleMenu() {
    iconeMenuElt.classList.toggle("disappear");
    asideElt.classList.toggle("appear");
    iconeCroixElt.classList.toggle("appear");
}

//Apparition du menu vertical post clic menu burger
iconeMenuElt.addEventListener("click", toggleMenu);

//Disparition du menu vertical quand on clique sur la croix
iconeCroixElt.addEventListener("click", toggleMenu);

//Disparition du menu vertical quand on clique sur un lien dans le menu vertical

document.querySelector("nav").addEventListener("click", function() {
    if (window.innerWidth < mediaLimitSize) {
        toggleMenu();
    } 
});

 
// scroll by pour descendre par palier

