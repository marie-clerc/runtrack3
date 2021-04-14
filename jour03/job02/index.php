<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour02</title>
    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
    </script>
</head>
<body>
    <div id="melangees" style="display: flex; flex-direction: row; border: solid 1px black; width: 40%; height: 30vh">
        <div id="div1">
            <img id="1" width="60" src="arc1.png">
        </div>
        <div id="div2">
            <img id="2" width="60" src="arc2.png">
        </div>
        <div id="div3">
            <img id="3" width="60" src="arc3.png">
        </div>
        <div id="div4">
            <img id="4" width="60" src="arc4.png">
        </div>
        <div id="div5">
            <img id="5" width="60" src="arc5.png">
        </div>
        <div id="div6">
            <img id="6" width="60" src="arc6.png">
        </div>
    </div>
    <button id="button" style="margin-left: 35%;">Mélanger</button>
    <div id="rangees" ondrop="drop(event)" ondragover="allowDrop(event)" style="display: flex; flex-direction: row; border: solid 1px black; width: 40%; height: 30vh">
        <div id="secondDiv1"></div>
        <div id="secondDiv2"></div>
        <div id="secondDiv3"></div>
        <div id="secondDiv4"></div>
        <div id="secondDiv5"></div>
        <div id="secondDiv6"></div>
    </div>
    <div id="win">Vous avez gagné</div>
    <div id="lose">Vous avez perdu</div>

    <!-- JS -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>