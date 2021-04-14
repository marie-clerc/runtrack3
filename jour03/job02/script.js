

var melange = document.getElementById("melangees");
//var image = document.querySelectorAll('.melange>div');

// on mélange
$('#button').click(function() {
    for (var i = melange.children.length; i >= 0; i--) {
        melange.appendChild(melange.children[Math.random() * i | 0]);
    }
})

// transfere d'image au click
