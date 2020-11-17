    <?php
        include_once ("./includes/header.php");
        include_once ("./traitement/traitement_projet.php");
    ?>
    <div class="container">
        <div class="titre-projet ">
            <h1 class="text-center"> <?php echo $requprojetid['nomProjet'];?></h1>
        </div>
        <div class="row">
            <div class="txt-projet container col ">

                <h1>Technologies</h1>
                <p><?php echo $requprojetid['technologie'];?></p>

                <h1>Période</h1>
                <p> <?php echo $requprojetid['periode'];?></p>

                <h1>Contexte</h1>
                <p> <?php echo $requprojetid['contexte'];?></p>

                <h1>Compétences</h1>
                <p> <?php echo $requprojetid['competence'];?></p>

                <h1>Bilan</h1>
                <p> <?php echo $requprojetid['bilan'];?></p>

            </div>
            <div class="img-projet container col ">
                <img src="<?php echo $requprojetid['lienImg']?>" alt="">

            </div>
        </div>

    </div>
