/**
 Créez un textarea dont l’id est “keylogger”. Chaque fois que l’utilisateur
 tape une lettre sur son clavier (a-z), celle-ci est ajoutée dans le textarea
 (même si le focus en cours n’est pas le textarea). Si c’est le cas, la lettre
 doit être ajoutée deux fois.

var press = document.getElementById("keylogger");
document.addEventListener('keydown', logger);
function logger (e) {
    get = window.event?event:e;
    key = get.keyCode?get.keyCode:get.charCode; //get character code
    key = String.fromCharCode(key); // convert it to string
    press.textContent += key; // append current character to previous one (concatinate)


    // on check si textarea est actif
    document.addEventListener('pointerlockchange', myFunction);
    function myFunction(event) {
        alert(event.target);
        get = window.event?event:e;
        key = get.keyCode?get.keyCode:get.charCode; //get character code
        key = String.fromCharCode(key); // convert it to string
        press.textContent += key;
        press.textContent += key;
    }

}*/

// ce que joris à fait
function keylogger(e) {
    var keynum;

    if (document.event) { // IE
        keynum = e.keyCode;
    } else if (e.which) { // Netscape/Firefox/Opera
        keynum = e.which;
    }
    document.getElementById('textarea').textContent += String.fromCharCode(keynum);

}
// document.onkeypress = function () { keylogger(e) };
document.addEventListener("keypress", keylogger, true);
