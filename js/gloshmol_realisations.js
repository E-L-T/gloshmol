var mediaLimitSize = 900;

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
var animationDuration = 600;

document.querySelector("nav").addEventListener("click", function(event){
    /* permet de lancer le changement de page après la fin de l'animation \o/ */
    
    if (window.innerWidth < mediaLimitSize) {
    event.preventDefault();
    $('.realisationAside').animate({right:"-210px"},animationDuration);
    iconeMenuElt.classList.toggle("disappear");
    iconeCroixElt.classList.toggle("appear");
    setTimeout(function(){
        window.location.replace(event.target.href);
    }, animationDuration);
    } 
});

//retour en haut de la page imagier
$('.arrowUp').on('click', function () {
    $('body,html').animate({
        scrollTop: 0
    }, 600);
    return false;
});

//Faire apparaître la flèche après un peu de scroll
$(document).scroll(function() {
    var y = $(this).scrollTop();
    if (y > 800) {
      $('.arrowUp').fadeIn();
    } else {
      $('.arrowUp').fadeOut();
    }
  });
