    <?php
        include_once ("./includes/header.php");
        include_once ("./traitement/traitement_projet.php");
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="ressource/logo.jpg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#Accueil">Accueil
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Projets">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">à propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#parcours">Parcours</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- Navigation -->
    <section> <!-- ACCUEIL -->
      <div id="Accueil" class="Accueil">
        <h1 class="homeTitre">LELOUP THOMAS</h1>
        <button class="cv btn btn-primary" type="button" onclick="window.location.href = './source/cvFinish.pdf';" name="Cv">Mon CV</button>
      </div>
    </section>

    <!-- PROJETS -->
    <section id="Projets">
        <div class="projetBox container ">
            <div class="bigTitre">
                <h1>PROJETS</h1>
            </div>
            <div id="trait_dessus"><hr></div>
            <div class="row">
                <?php
                    while ($donnees = $requprojet->fetch()){
                ?>
                <div class="cardProjet col">
                    <a href="projet.php?id=<?php echo $donnees['idProjet']?>"><?php echo $donnees['nomProjet'];?></a>
                </div>
                        <?php
                    }
                    ?>
            </div>


        </div>
    </section>




    <section id="about"> <!-- A PROPOS -->

      <div class="about_vid">
          <!-- The gif BG -->
          <div class="bigTitre">
              <h1>A Propos</h1>
          </div>
          <div id="trait_dessus"><hr></div>
          <div class="presentationBox container row">
              <div class="col">
                  <img class="imgProfil" src="./source/imgProfil.jpg" alt="">
              </div>
              <div class="txt-profil col">
                  <h1 class="nameProfil">LELOUP Thomas</h1>
                  <p>18 ans</p>
                  <p>Etudiant en Web Developement dans le lycée St-Vincent à senlis. Sportif et passionné d'informatique, d'High Tech et dans le domaine de l'audiovisuel. </p>
                  <br>
                  <p>Localisation: Oise </p>
              </div>

          </div>
      </div>

      </div>

    </section>
  <section id="parcours" class="pt-5">
      <div class="bigTitre">
          <h1>Parcours</h1>
      </div>
      <div id="trait_dessus"><hr></div>
      <div class="container">
          <div class="timeline">
              <div class="timeline-section">
                  <div class="timeline-date">
                      2019-2021
                  </div>
                  <!-- -----------------------------formation 1-------------------------------------------------------- -->
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="timeline-box">
                              <div class="box-title">
                                  <i class="fa fa-asterisk text-success" aria-hidden="true"></i> BTS SIO (SLAM)
                              </div>
                              <div class="box-content">
                                  <a class="btn btn-xs btn-default pull-right text-primary">Details</a>
                                  <div class="box-item "><strong>SIO: Service Informatique au Organisation </strong></div>
                                  <div class="box-item "><strong>SLAM: Solution Logiciel et Application Métier</strong></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- --------------formation 1 end--------------------- -->
              <!-- ---------------formation 2---------------------- -->
              <div class="timeline-section">
                  <div class="timeline-date">
                      2019
                  </div>
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="timeline-box">
                              <div class="box-title">
                                  <i class="fa fa-pencil text-info" aria-hidden="true"></i> Bac STI2D option SIN
                              </div>
                              <div class="box-content">
                                  <a class="btn btn-xs btn-default pull-right text-primary">Details</a>
                                  <div class="box-item"><strong>Baccalauréat </strong></div>
                                  <div class="box-item"><strong>STI2D : sciences et technologies de l'industrie et du développement durable</strong></div>
                                  <div class="box-item"><strong>SIN : Système d'Information et Numérique</strong>: 6</div>
                                  <div class="box-item"><strong> 2017-2019 </strong></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              </div>

          </div>
      </div>
  </section>
  <!-- ---------------------contact------------------  -->

    <section id="contact">
        <div class="contact">Contact</div>
        <div id="contactForm">

            <h1>Juste le nécessaire 😉</h1>
            <small>Ici vous pouvez m'adresser un mail</small>

            <form action="#">
                <input placeholder="Nom" type="text" required />
                <input placeholder="Email" type="email" required />
                <input placeholder="Sujet" type="text" required />
                <textarea placeholder="Commentaire"></textarea>
                <input class="formBtn" type="submit" />
                <input class="formBtn" type="reset" />
            </form>
        </div>
    </section>

  </body>
</html>