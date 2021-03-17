<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>job01</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

    <header>
        <nav class="pink lighten-5">
            <ul>
                <li><a href="index.php" class="pink-text">Accueil</a></li>
                <li><a href="index.php" class="pink-text">Inscription</a></li>
                <li><a href="index.php" class="pink-text">Connexion</a></li>
                <li>
                    <form action="" method="get" class="input-field col s6 s12 black-text">
                        <i class="blue-grey-text material-icons prefix">search</i>
                        <input type="search" placeholder="Search" aria-label="Search">
                    </form>
                </li>
            </ul>
        </nav>
    </header>


    <main>
        <section>
            <form method="post">
                <section>
                    <label>Civilité</label>
                    <input type="radio" name="civilite" value="Mme" id="Mme" checked="checked"/>
                    <label for="Mme">Mme</label>
                    <input type="radio" name="civilite" value="Mr" id="Mr"/>
                    <label for="Mr">Mr</label>
                </section><br>
                <section>
                    <label>Nom:</label><br>
                    <input type="text" name="nom" id="nom"/><br><br>
                    <label>Prénom:</label><br>
                    <input type="text" name="prenom" id="prénom"/><br><br>
                    <label>Adresse:</label><br>
                    <input type="text" name="adresse" id="adresse" /><br><br>
                    <label>Mail:</label><br>
                    <input type="email" name="mail" id="mail" /><br><br>
                    <label>Mdp:</label><br>
                    <input type="password" name="password" id="password" /><br><br>
                    <label>Confirmez Mdp:</label><br>
                    <input type="password" name="Cpassword" id="Cpassword" /><br><br>
                    <section>
                        <p>Vos passions :</p>
                        <input type="checkbox" id="informatique" name="informatique" >
                        <label for="informatique">Informatique</label>
                        <input type="checkbox" id="voyages" name="voyages" >
                        <label for="voyages">Voyages</label>
                        <input type="checkbox" id="sport" name="sport" >
                        <label for="sport">Sport</label>
                        <input type="checkbox" id="lecture" name="lecture" >
                        <label for="lecture">Lecture</label>
                    </section>
                </section><br>
                <input type="submit" value="Envoyer le formulaire">
            </form>
        </section>
    </main>


    <footer>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <form action="" method="get">
                    <input type="search" placeholder="Search" aria-label="Search">
                    <button type="submit">Search</button>
                </form>
            </ul>
        </nav>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>