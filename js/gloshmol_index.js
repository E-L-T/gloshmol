function filtrerSommaire(filtre, realisationChoix) {
    //gestionnaire d'événement "click"
    var filtreElt = document.getElementById(filtre);
    filtreElt.addEventListener("click", function() {
        //commence par (ré)afficher l'ensemble des éléments
        var realisationsElts = document.getElementById("realisations");
        var integraleRealisationElts = realisationsElts.querySelectorAll(".realisations, .realisation, .exposition, .dessin, .installation, .sculpture, .livret");
        for (i = 0; i < integraleRealisationElts.length; i ++) {
           if (window.innerWidth < 1000) {
               integraleRealisationElts[i].style.display = "block"; //essai : je change flex par block
           } else if (window.innerWidth > 1000) {
                integraleRealisationElts[i].style.display = "block";
           }   
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
    });
}
//Appels de la fonction pour chaque catégorie de réalisation
filtrerSommaire("filtreExposition", "exposition");
filtrerSommaire("filtreDessin", "dessin");
filtrerSommaire("filtreInstallation", "installation");
filtrerSommaire("filtreSculpture", "sculpture");
filtrerSommaire("filtreLivret", "livret");
/*filtrerSommaire("filtreTout", "");
*/
//Apparition de la liste de filtres au hover du menu. Remplacé par du CSS
/*function dropDownMenu(idMenu, idContenu) {
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
if (window.innerWidth > 1000) { //pour éviter effet non voulu en version mobile
    dropDownMenu("menuRealisations", "filtres");
    dropDownMenu("menuAPropos", "aPropos");
}
*/


//gestionnaire d'événement pour changer le logo en dessous et au-dessus de 1000 pixels de largeur
//aide trouvée ici : https://stackoverflow.com/questions/641857/javascript-window-resize-event


var addEvent = function(object, type, callback) {
    if (object == null || typeof(object) == 'undefined') return;
    if (object.addEventListener) {
        object.addEventListener(type, callback, false);
    } else if (object.attachEvent) {
        object.attachEvent("on" + type, callback);
    } else {
        object["on"+type] = callback;
    }
};

addEvent(window, "resize", function() {
    if (window.innerWidth < 1000) {
        if (document.getElementById("iconeCroix").style.display === "none") {
            document.getElementById("realisations").style.display = "block";
            document.querySelector("aside").style.display = "none";
            document.getElementById("iconeMenu").style.display = "block";

        } else if (document.getElementById("iconeCroix").style.display === "block") {
            document.getElementById("realisations").style.display = "block"; //changement none par block
            document.querySelector("aside").style.display = "block";

        }
    //document.querySelector("aside").style.display = "none";
    //document.getElementById("lienLogo").innerHTML = "gloshmol";
    //document.getElementById("logo").style.textAlign = "center";
    //afficherMenuV()
    //enleverMenuV();
    } else if (window.innerWidth > 1000) {
        if (document.getElementById("iconeCroix").style.display === "none") {
            document.querySelector("aside").style.display = "block";
            document.querySelector("nav").style.display = "block";
            document.getElementById("iconeMenu").style.display = "none";
            document.getElementById("realisations").style.display = "flex";
        } else if (document.getElementById("iconeCroix").style.display === "block") {
            document.querySelector("aside").style.display = "block";
            document.querySelector("nav").style.display = "block";
            document.getElementById("iconeCroix").style.display = "none";
            document.getElementById("realisations").style.display = "flex";
        }
    //document.querySelector("aside").style.display = "block";
    //document.getElementById("lienLogo").innerHTML = "-:-:-:-gloshmol-:-:-:-";
    //document.getElementById("logo").style.textAlign = "left";
    //Ajouter la fonction pour affichage normal du menu
    //enleverMenuV();
    //document.querySelector("nav").style.display = "block";
    //document.getElementById("iconeMenu").style.display = "none";
    //document.getElementById("iconeCroix").style.display = "none";
    //afficherMenuH();
    }
});

//J'ajoute ceci pour lancer l'instruction dès l'ouverture de la page
/*if (window.innerWidth < 1000) {
    document.getElementById("lienLogo").innerHTML = "gloshmol";
    document.getElementById("logo").style.textAlign = "center";
}; 
if (window.innerWidth > 1000) {
document.getElementById("lienLogo").innerHTML = "-:-:-:-gloshmol-:-:-:-";
document.getElementById("logo").style.textAlign = "left";
};*/

function afficherMenuV() {
    if (window.innerWidth > 1000) {
        document.getElementById("iconeMenu").style.display = "none";
        document.querySelector("aside").style.display = "block";
        document.querySelector("nav").style.display = "block";
        document.getElementById("filtres").style.display = "block";//css
        document.getElementById("aPropos").style.display = "block";
        document.getElementById("iconeCroix").style.display = "block";
        //document.querySelectorAll("realisation").style.display = "block";
    } else if (window.innerWidth < 1000) { //reprendre ici
    //document.getElementById("logo").style.display = "none";
    document.getElementById("iconeMenu").style.display = "none";
    /*document.getElementById("realisations").style.display = "none";*/
    document.querySelector("aside").style.display = "block";
    document.querySelector("nav").style.display = "block";
    document.getElementById("filtres").style.display = "block";//css
    document.getElementById("aPropos").style.display = "block";//css
    document.getElementById("iconeCroix").style.display = "block";
    //document.querySelectorAll("realisation").style.display = "flex";
    }
}

function enleverMenuV() {
    if (window.innerWidth > 1000) {
        document.getElementById("iconeMenu").style.display = "block";
        document.querySelector("nav").style.display = "none";
        document.querySelector("aside").style.display = "block";
        document.getElementById("iconeCroix").style.display = "none";
        //document.querySelectorAll("realisation").style.display = "block";
    } else if (window.innerWidth < 1000) {
        document.getElementById("logo").style.display = "block";
        document.getElementById("iconeMenu").style.display = "block";
        document.querySelector("aside").style.display = "none";
        //document.querySelector("nav").style.display = "none";
        document.getElementById("iconeCroix").style.display = "none";
        document.getElementById("realisations").style.display = "block";
        /*document.querySelectorAll("realisation").style.display = "block";*/
    }    
}



//Apparition du menu vertical post clic menu burger
document.getElementById("iconeMenu").addEventListener("click", function () {
    afficherMenuV();
});

//Disparition du menu vertical quand on clique sur la croix
document.getElementById("iconeCroix").addEventListener("click", function() {
    enleverMenuV();
});

//Disparition du menu vertical quand on clique sur un lien dans le menu vertical

document.querySelector("nav").addEventListener("click", function() {
    if (window.innerWidth < 1000) {
        enleverMenuV();
    } 
});