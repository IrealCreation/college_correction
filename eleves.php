<?php

// Inclusion de la classe Eleve
require_once("models/eleve.php");

// Appel de la méthode statique readAll() de notre classe Eleve, qui nous permet de charger la liste de tous les élèves
$eleves = Eleve::readAll();

// echo "<pre>";
// var_dump($eleves);
// echo "</pre>";

?>
<?php include("assets/inc/head.php"); ?>
    <title>Liste des élèves</title>
<?php include("assets/inc/header.php"); ?>
    <main>
        <h1>Liste des élèves</h1>
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
            </tr>
            <?php 
                foreach($eleves as $eleve) {
                    $eleve->afficherInfos();
                }
            ?>
        </table>
    </main>
<?php include("assets/inc/footer.php"); ?>