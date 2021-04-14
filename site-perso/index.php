<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Marie Clerc Développeur Web à Marseille/Aix">

    <link href="css/accueil.css" rel="stylesheet" type="text/css">
    <title>Développeur web</title>
</head>
<body class="parallax">
    <header class="header">
        <a href="" class="logo">MriClr</a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#apropos">A propos</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </header>
    <main>
        <div id="intro">
            <h1>Marie Clerc <br>
            Développeuse Web à Marseille</h1>
            <br>
            <p>
                Découvrez mon Portfolio ici <br>
                Recherche d'alternance pour Sept.2021, <br>
                contactez-moi ici
            </p>
        </div>

        <div id="portfolio">
            <h2>portfolio</h2>
            <br>
            <section id="projets">
                <!-- Projets réalisés 6 max -->
                <div class="projet">
                    <img src="images/projet_boutique.JPG"
                            alt="Projet Boutique en ligne, réalisé en php par Marie Clerc à l'école de la Plateforme_.">
                    <p>Boutique en ligne <br>
                    Projet PHP</p>
                </div>
                <div class="projet">
                    <img src="images/projet_roombooking.JPG"
                         alt="Projet Réservation de salles, réalisé en php par Marie Clerc à l'école de la Plateforme_.">
                    <p>Résevation de salle <br>
                        Projet PHP</p>
                </div>
                <div class="projet">
                    <img src="images/projet_appfavorite.JPG"
                         alt="Projet Applications Favorites, réalisé en HTML/CSS par Marie Clerc à l'école de la Plateforme_.">
                    <p>Applications Favorites <br>
                        Projet HTML/CSS</p>
                </div>
                <div class="projet">
                    <img src="images/projet_agenda.JPG"
                         alt="Projet Agenda, réalisé en HTML/CSS par Marie Clerc à l'école de la Plateforme_.">
                    <p>Agenda <br>
                        Projet HTML/CSS</p>
                </div>
                <div class="projet">
                    <img src="images/projet_phonotheque.JPG"
                         alt="Projet Phonotèque, réalisé en HTML/CSS par Marie Clerc à l'école de la Plateforme_.">
                    <p>Phonothèque <br>
                        Projet HTML/CSS</p>
                </div>
                <div class="projet"><img><p style="color: white">Projets JavaScript en cours d'apprentissage</p></div>
            </section>
        </div>

        <div id="apropos">
            <h2>Qui suis-je ?</h2>
            <br>
            <section id="moi">
                <p>Je m'appelle <b>Marie CLERC</b>, j'ai <b>27 ans</b>, et je vis à Marseille.
                    je suis actuellement en 1ère année de formation  à l'école
                    <a href="https://laplateforme.io/">La Plateforme_</a> au sein de la <a href="https://laplateforme.io/coding-school/">Coding School</a>.

                    <br>Je suis à la recherche d'une <b>alternance pour septembre 2021</b>, pour la deuxième année.

                    <br>D'autre part j'ai aussi un background en management spécialité marketing digital. J'ai donc de l'expérience en marketing, et gestion de projet.
                </p>
                <br>
            </section>

            <section id="competences">
                <p>Cette année de formation m'a permis de développer les bases du développement : <br>
                    HTML/CSS dans un premier temps, avec des projets tels que Phonothèque ou Agenda que vous pouvez voir dans mon portfolio. <br>
                    PHP /MySQL, pour la partie back-end, avec des projet tel que Boutique en ligne. <br>
                    Nous avons aussi travaillé avec Bootstrap, Materialize, Git/Github, en design patern: MVC. <br>
                    Js/ Jquery et sass pour la partie front-end, avec des projet tel que mon portfolio, d'autre projets arrivent, cette unit de formatin est toujours en cours :)
                </p>
                <section id="skillsimg">
                    <img src="images/logo_html.png" alt="html logo">
                    <img src="images/logo_css.png" alt="css logo">
                    <img src="images/logo_php.png" alt="php logo">
                    <img src="images/logo_sql.png" alt="sql logo">
                    <img src="images/logo_javascript.png" alt="javascript logo">
                    <img src="images/logo_jquery.png" alt="jquery logo">
                </section>
            </section>
        </div>

        <div id="contact">
            <h2>Me contacter : </h2>
            <p>par email : <a href="mailto:marie.clerc@laplateforme.io">marie.clerc@laplateforme.io</a>
            </p>
        </div>

    </main>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>