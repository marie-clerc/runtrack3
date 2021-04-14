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

    <div class="container">
        <main>
            <section class="row">
                <form method="post" class="col s12">
                    <section>
                        <label>Civilité</label>
                        <p><label for="Mme">
                            <input type="radio" name="civilite" value="Mme" id="Mme" class="with-gap" checked="checked"/>
                            <span>Mme</span></label>
                            <label for="Mr"><input type="radio" name="civilite" value="Mr" id="Mr" class="with-gap"/>
                            <span>Mr</span></label>
                        </p>
                    </section><br>

                    <section>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="nom" type="text" class="validate" autofocus>
                            <label for="nom">Nom</label>
                        </div>

                        <div class="input-field col s6">
                            <input id="prenom" type="text" class="validate">
                            <label for="prenom">Prenom</label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">home</i>
                            <input id="adresse" type="text" class="validate">
                            <label for="adresse">Adresse</label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">create</i>
                            <input id="password" type="password" class="validate">
                            <label for="password">Mot de Passe</label>
                        </div>

                        <div class="input-field col s6">
                            <input id="password" type="password" class="validate">
                            <label for="password">Confirmez votre Mot de Passe</label>
                        </div>

                        <section>
                            <p>Vos passions :</p>

                            <div class="input-field col s3">
                                <label>
                                    <input type="checkbox" id="informatique"/>
                                    <span>Informatique</span>
                                </label>
                            </div>

                            <div class="input-field col s3">
                                <label>
                                    <input type="checkbox" checked="checked" id="voyages"/>
                                    <span>Voyages</span>
                                </label>
                            </div>

                            <div class="input-field col s3">
                                <label>
                                    <input type="checkbox" id="sport"/>
                                    <span>Sport</span>
                                </label>
                            </div>

                            <div class="input-field col s3">
                                <label>
                                    <input type="checkbox" checked="checked" id="lecture"/>
                                    <span>Lecture</span>
                                </label>
                            </div>

                        </section>
                        <br><br>

                        <div class="row">
                            <div class="input-field col s12">
                                <input type="submit" value="Envoyer le formulaire">
                            </div>
                        </div>
                    </section>
                </form>
            </section>
        </main>
    </div>


    <footer>
        <nav class="pink lighten-5">
            <ul>
                <li><a href="index.php" class="pink-text">Accueil</a></li>
                <li><a href="index.php" class="pink-text">Inscription</a></li>
                <li><a href="index.php" class="pink-text">Connexion</a></li>
            </ul>
        </nav>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>