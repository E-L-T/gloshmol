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
        if (filtre !== "filtreTout") {
            var excludedElts = realisationsElts.querySelectorAll("div:not(." + realisationChoix + ")"); 
            for (i = 0; i < excludedElts.length; i++) {
                excludedElts[i].style.display = "none";
            }
        }
        //affiche systématiquement le texte de présentation des réalisations
        var texteRealisationsElts = document.querySelectorAll(".texteRealisation");
        for (j = 0; j < texteRealisationsElts.length; j++) {
            texteRealisationsElts[j].style.display = "block";
        }
        //filtreElt.style.color = "rgba(253,0,141,0.8)";
        //filtreElt.style.textDecoration = "underline";
    });
}
//Appels de la fonction pour chaque catégorie de réalisation
filtrerSommaire("filtreExposition", "exposition");
filtrerSommaire("filtreDessin", "dessin");
filtrerSommaire("filtreInstallation", "installation");
filtrerSommaire("filtreSculpture", "sculpture");
filtrerSommaire("filtreLivret", "livret");
filtrerSommaire("filtreTout", "");

//Apparition de la liste de filtres au hover du menu
function dropDownMenu(idMenu, idContenu) {
    var contenuElt = document.getElementById(idContenu);
    var menuElt = document.getElementById(idMenu);
    menuElt.addEventListener("mouseover", function() {
        contenuElt.style.display = "block";
    });
    contenuElt.addEventListener("mouseover", function() {
        contenuElt.style.display = "block";
    });
    contenuElt.addEventListener("mouseout", function() {
        contenuElt.style.display = "none";
    });
    menuElt.addEventListener("mouseout", function() {
        contenuElt.style.display = "none";
    });
}

dropDownMenu("menuRealisations", "filtres");
dropDownMenu("menuAPropos", "aPropos");