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
        window.onload(); // hack... j'ai casse le chargement des fitres, probablement dan le htacces. Tout ce code est tre complique et pourrait etre simplifie
    });
}

//Appels de la fonction pour chaque catégorie de réalisation
filtrerSommaire("filtreExposition", "exposition");
filtrerSommaire("filtreDessin", "dessin");
filtrerSommaire("filtreInstallation", "installation");
filtrerSommaire("filtreSculpture", "sculpture");
filtrerSommaire("filtreLivret", "livret");

//filtre du sommaire si on vient d'une page réalisation avec un hash
//a factoriser

if (window.location.hash === "#filtreExposition" || window.location.hash === "#filtreDessin" || window.location.hash === "#filtreInstallation" || window.location.hash === "#filtreSculpture" || window.location.hash === "#filtreLivret")  {
    //commence par (ré)afficher l'ensemble des éléments
    var realisationChoix = (window.location.hash).substr(7).toLowerCase();
    console.log(realisationChoix);
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
    };
}

//Déclaration de la fonction toggleMenu
var iconeMenuElt = document.querySelector("#iconeMenu");
var asideElt = document.querySelector("aside");
var iconeCroixElt = document.querySelector("#iconeCroix");

//Apparition du menu vertical post clic menu burger
iconeMenuElt.addEventListener("click", function(e){
    e.preventDefault(); //j'ajoute cette ligne pour éviter de remonter automatiquement en haut de page lors d'un clic sur menu burger (ou icone croix, ci-dessous);
    $('aside').animate({right:"0px"},600);
    /* $(this).fadeOut("slow", function () {
        $(this).css({display:"none"});
    }); */
    iconeCroixElt.classList.toggle("appear");
/*     $("#iconeCroix").fadeIn("slow");
 */ iconeMenuElt.classList.toggle("disappear");
    
});

//Disparition du menu vertical quand on clique sur la croix
iconeCroixElt.addEventListener("click", function(e){
    e.preventDefault();     
    $('aside').animate({right:"-210px"},600);
    iconeMenuElt.classList.toggle("disappear");
    iconeCroixElt.classList.toggle("appear");
});

//Disparition du menu vertical quand on clique sur un lien dans le menu vertical
var animationDuration = 600;
document.querySelector("nav").addEventListener("click", function(event) {
    /* permet de lancer le changement de page après la fin de l'animation \o/ */
    
    if (window.innerWidth < mediaLimitSize) {
    event.preventDefault();
    $('aside').animate({right:"-210px"},animationDuration);
    iconeMenuElt.classList.toggle("disappear");
    iconeCroixElt.classList.toggle("appear");
    setTimeout(function(){
        window.location.replace(event.target.href);
    }, animationDuration);
    } 
});


// Retour en haut de la page
$('.arrowUp').on('click', function () {
    $('body,html').animate({
        scrollTop: 0
    }, 600);
    return false;
});

// Faire apparaître la flèche après un peu de scroll
$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 800) {
        $('.arrowUp').fadeIn();
    } else {
        $('.arrowUp').fadeOut();
    }
});
 


//
// -- imagier --
//

// TODO tout le code ci-dessous dans son propre .js, et ne l'inclure que dans l'imagier

function getClientFormat() {
    return (window.innerWidth < mediaLimitSize) ? 'Mobile' : 'Desktop';
}
    
//gestion de la swipebox
$('.swipebox').swipebox({
    removeBarsOnMobile : false
});

//ajoute la classe swipebox au dernier moment pour ne pas avoir les images en doublon dans la swipebox
function addSwipebox() {
    $('.realisationImagier').click(function (event) {
        event.preventDefault();
        $('.blocImagier' + getClientFormat() +' .realisationImagier a').addClass('swipebox');
    });
}

addSwipebox();

$("document").ready(function() {
    const anchor = $(location).attr('hash');
    if (anchor) {
        const id = decodeURIComponent(anchor).substring(1) + '-' + getClientFormat();
        $( document.getElementById(id) ).find('.realisationImagier a').click();
    }
});

var ajaxLoading = false;
$(window).scroll(function() {
    if (ajaxLoading) {
        return;
    }

    if ($(window).scrollTop() < (($(document).height() - $(window).height()) * 0.99)) {
        return;
    }
    if ($('#end').length) {
        return;
    }

    const urlParams = new URLSearchParams(window.location.search);
    const query = urlParams.get('q');
    const lastId = $(".blocImagierMobile:last").attr('id');
    $('#scroll-loader-icon').show();
    ajaxLoading = true;
    $.get('imagier.php', {lid : lastId, q: (query ? query : "") },
          function(data) {
            $("#realisationsImagier").append(data);
            $(window).lazyLoadXT();
            addSwipebox();
          })
    .always(function(data) {
        $('#scroll-loader-icon').hide();
        ajaxLoading = false;
    });
});
