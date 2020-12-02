<?php
require_once("./includes/header.php");
require_once("./traitement/traitement_projet.php");
?>
<header>
    <div class="navigation">
        <input type="checkbox" class="check" id="list">
        <label for="list" class="navbar">
            <span class="hamburger"></span>
        </label>
        <div class="item-list">
            <ul class="navi">
                <li><a href="#">Accueil</a></li>
                <li><a href="#Projets">Projets</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#parcours">Parcours</a></li>
                <li><a href="#contact">Contacts</a></li>
            </ul>
        </div>
        <div class="nav-back"></div>
    </div>
</header>

<!-- Fin Navigation -->

<!-- ACCUEIL -->
<section>
    <div id="Accueil" class="Accueil">
        <h1 class="homeTitre">LELOUP THOMAS</h1>
        <h1 class="txt-dev">Développeur Symfony/Vue.Js</h1>
        <br>
        <form  target="_blank">
            <button class="btn btn-primary" formaction="source/cvFinish.pdf">Mon Cv</button>
        </form>
    </div>
</section>

<!-- PROJETS -->
<section id="Projets">
    <div class="bigTitre">
        <h1>Projets</h1>
    </div>
    <div class="l-container">
        <?php
        $donnees = $requprojet;
        foreach ($donnees as $donnee) {
            ?>

            <a href="projet.php?id=<?php echo $donnee['idProjet'] ?>">
                <div class="b-game-card">
                    <div class="b-game-card__cover">
                        <img src="<?php echo $donnee['lienImg'] ?>" alt="<?php echo $donnee['nomProjet']; ?>">
                    </div>
                </div>
            </a>
            <?php
        }
        ?>

    </div>
</section>
<section id="about"> <!-- A PROPOS -->

    <div class="about_vid container">
        <!-- The gradiant BG -->
        <div class="bigTitre">
            <h1>A Propos</h1>
        </div>
        <div id="trait_dessus">
            <hr>
        </div>
        <div class="presentationBox container row">
            <div class="col">
                <img class="imgProfil" src="./source/imgProfil.jpg" alt="">
            </div>
            <div class="txt-profil col">
                <h1 class="nameProfil">LELOUP Thomas</h1>
                <p>18 ans</p>
                <p>Etudiant en Web Developement dans le lycée St-Vincent à senlis. Sportif et passionné d'informatique,
                    d'High Tech et dans le domaine de l'audiovisuel. </p>
                <br>
                <p>Localisation: Oise </p>
            </div>
        </div>
    </div>
</section>
<section id="parcours" class="bg-main pt-5">
    <div class="bigTitre">
        <h1>Parcours</h1>
    </div>
    <div class="parcours-main " id="trait_dessus">
        <hr>
    </div>
    <div class="container">
        <div id="timeline-content">
            <ul class="timeline">
                <li class="event" data-date="Novembre 2020">
                    <h3>Initiation SYMFONY</h3>
                    <p>Framework du langage PHP</p>
                </li>
                <li class="event" data-date="Novembre 2020">
                    <h3>Initiation Vue.js</h3>
                    <p>Framework de Javascrip</p>
                </li>
                <li class="event" data-date="Novembre 2019">
                    <h3>Initiation AxureRP</h3>
                    <p>Auto-formation sur AxureRP</p>
                </li>
                <li class="event" id="date" data-date="Septembre 2019">
                    <h3>Initiation Wordpress</h3>
                    <p>Par le CTO des Mozarts du web </p>
                    <a target="_blank" href="https://mozartsduweb.com/">Les Mozarts du Web ICI</a>
                </li>
                <li class="event" data-date="Septembre 2019">
                    <h3>Initiation PHP</h3>
                    <p>Par le CTO de Mentalworks
                    <p/>
                    <a target="_blank" href="https://www.mentalworks.fr/">Mentalworks ICI</a>
                </li>
                <li class="event" data-date="Octobre 2017">
                    <h3>Initiation HTML/CSS</h3>
                    <p>Au lycée dans la formation STI2D</p>
                    <a target="_blank" href="https://www.linkedin.com/in/dorian-jacquot-8459a2101/?originalSubdomain=fr">Professeur
                        M.Dorian JAQUOT</a>
                </li>
                <li class="event" data-date="2012">
                    <h3>Initiation Photoshop</h3>
                    <p>Auto-formation sur Photoshop</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ---------------------contact------------------  -->

<section id="contact">
    <div class="bigTitre">
        <h1>Contact</h1>
    </div>

</section>
</body>
</html>