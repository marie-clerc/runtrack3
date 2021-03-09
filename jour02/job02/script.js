/**
 Créez une balise button ayant comme id “button”. Lorsque l’on clique
 dessus, un <article> contenant le texte suivant est ajouté au contenu de la
 page : “L'important n'est pas la chute, mais l'atterrissage.”. Si on clique à
 nouveau sur ce bouton, l’article disparaît. L’apparition / Disparition doivent
 être gérées dans une fonction nommée “showhide()”.*/

var button = document.getElementById("button");
var article = document.createElement('article');


function showhide () {

    article.textContent = "L'important n'est pas la chute, mais l'atterrissage.";
    document.getElementById("citation").innerHTML = "L'important n'est pas la chute, mais l'atterrissage.";

    if (getComputedStyle(citation).display != "none") {
        citation.style.display ="none";
    } else  {
        citation.style.display = "block";
    }
}

button.addEventListener('click', showhide);
