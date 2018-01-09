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
/* console.log(iconeMenuElt);
 */var asideElt = document.querySelector("aside");
/* console.log(asideElt);
 */var iconeCroixElt = document.querySelector("#iconeCroix");
/* console.log(iconeCroixElt);
 */


/* function toggleMenu() {
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
}); */
/* 
function addMenu(){
    e.preventDefault(); 
    $('aside').animate({right:"0px"},600);
    iconeMenuElt.classList.toggle("disappear");
    iconeCroixElt.classList.toggle("appear");
}

function removeMenu(){
    e.preventDefault();     
    $('aside').animate({right:"-210px"},600);
    iconeMenuElt.classList.toggle("disappear");
    iconeCroixElt.classList.toggle("appear");
}
//Apparition du menu vertical post clic menu burger
iconeMenuElt.addEventListener("click", addMenu(e));

//Disparition du menu vertical quand on clique sur la croix
iconeCroixElt.addEventListener("click", removeMenu(e));

//Disparition du menu vertical quand on clique sur un lien dans le menu vertical

document.querySelector("nav").addEventListener("click", function() {
    if (window.innerWidth < mediaLimitSize) {
        removeMenu();
    } 
}); */

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



//mousewheel effect
// using on
/* $('.realisation').on('mousewheel', function(event) {
    console.log(event.deltaX, event.deltaY, event.deltaFactor);
}); */

/* var owl = $('#realisations');
owl.on('mousewheel', function (e) {
    var delta = event.deltaY;
    var i = 0,
        nextScrollTop 	= 0,
        prevScrollTop 	= 0,
        currScrollTop	= 0,
        nextScrollable 	= true,
        prevScrollable 	= true,
        currIndex 		= 1,
        nextIndex		= 2,
        prevIndex		= numberOfSections;
    /* $(this).scrollTop = "200"; */
    /* if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault(); 
}); */

//Essai avec fullpage
/* $(function(){
    $('#realisations').fullpage();
} */
 
//essai de scroll par étape

/* var Current_scroll_Y=0;
var Target_scroll_Y=0;
var scroll_Speed = 15;

function animate_Scroll(Y)
{
  Target_scroll_Y = Y;
  screen_Y = Math.floor(window.scrollY);

  //Scroll Down
  if(screen_Y<Y)
  {
    var myWindowScroll = setInterval(function(){ screen_Y = screen_Y+scroll_Speed;  if(screen_Y>=Target_scroll_Y){ clearInterval(myWindowScroll); return;}    window.scrollTo(0, screen_Y); }, 3);   
  }
  //Scroll Up
  if(screen_Y>Y)
  {
    var myWindowScroll = setInterval(function(){ screen_Y = screen_Y-scroll_Speed;  if(screen_Y<=Target_scroll_Y){ clearInterval(myWindowScroll); return;}    window.scrollTo(0, screen_Y); }, 3);  
  } 


}//End animate_Scroll */

/* 
// scroll by pour descendre par palier
var scrollStep = document.querySelector(".realisation").style.height;

window.addEventListener("keydown", function() {
    //animate_Scroll(10);
    
    //window.scrollBy(0, window.innerHeight*0.9); //ajusté avec une height des div realisation de 90vh
    //this.scrollBy(0, 300); //tester scrollTop
}); //au premier scroll, il se met à descendre tt en bas

//gestionnaire d'evt scroll
//attribuer taille de 100 vh à realisation en mobile
//scrollBy 100vh
//transition : 1s ease-in-out sur la div .realisation dans le css mobile */

