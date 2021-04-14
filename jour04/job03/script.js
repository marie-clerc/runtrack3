/**
 Lorsque l’on clique sur “filtrer”, le
 script doit à l’aide d’AJAX, récupérer le contenu du fichier et lister les
 éléments répondant aux critères sélectionnés en les affichant sur une page
 HTML.
 */

//$("#filtrer").click(function(){

    $.ajax({
        url : 'pokemon.json',
        type : 'GET',
        dataType : 'json',



        //success : function (msg) {
          //  var citation = '<p>' + msg + '</p>';
            //$("body").append(citation);

            /**const obj = JSON.parse(msg);
            //return obj[key];

            var pokemon = '<p>'+obj+'</p>';
            $('body').append(pokemon);*/
        }
    })
//});
/////////////////////////////////////////////////////////////
///////// SCRIPT DE L EXO PRECEDENT /////////////////////////
/////////////////////////////////////////////////////////////
const json = '{ "name": "La Plateforme_", "address": "8 rue dhozier", "city": "Marseille", "nb_staff": 11, "creation": 2019 }';
const obj = JSON.parse(json);
console.log(obj.name);

function jsonValueKey(json, key) {
    const obj = JSON.parse(json);
    return obj[key];
}

console.log(jsonValueKey(json, "city"));

