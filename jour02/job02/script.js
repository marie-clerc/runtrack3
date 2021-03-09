/**
 Créez une balise button ayant comme id “button”. Lorsque l’on clique
 dessus, un <article> contenant le texte suivant est ajouté au contenu de la
 page : “L'important n'est pas la chute, mais l'atterrissage.”. Si on clique à
 nouveau sur ce bouton, l’article disparaît. L’apparition / Disparition doivent
 être gérées dans une fonction nommée “showhide()”.*/

var button = document.getElementById("button");
var article = document.getElementById('citation');


function showhide () {

    document.getElementById("citation").innerHTML = "L'important n'est pas la chute, mais l'atterrissage.";

    if (getComputedStyle(article).display != "none") {
        article.style.display ="none";
    } else  {
        article.style.display = "block";
    }
}

button.addEventListener('click', showhide);
