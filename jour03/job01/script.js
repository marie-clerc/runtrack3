/**
 Créez une balise button ayant comme id “button”. En cliquant sur le
 bouton, vous devrez faire apparaître le texte “le $ est un bon élément
 monétaire. Le # de twitter est une bonne I D. Il faudra faire le point avec la
 classe pour cacher cet élément. ”.
 En dessous faire un bouton qui servira à cacher tout l’élément html.*/

var button = document.getElementById("button");
var article = document.getElementById('citation');
var buttonbye = document.getElementById("buttonBye");

// faire disparaitre l 'article de le bouton bye
buttonbye.style.display = "none";
article.style.display = "none";

function show () {
    // faire apparaitre l'article et le bouton
    article.style.display = "block";
    buttonbye.style.display = "block";
    // faire disparaitre le 1er bouton
    button.style.display = "none";
}

function bye () {
    // faire tout disparaitre
    article.style.display ="none";
    buttonbye.style.display = "none";
}

button.addEventListener('click', show);
buttonbye.addEventListener('click', bye);