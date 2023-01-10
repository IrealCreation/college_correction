<?php

require_once("models/professeur.php");

$professeurs = Professeur::readAll();

?>
<?php include("assets/inc/head.php"); ?>
    <title>Liste des professeurs</title>
<?php include("assets/inc/header.php"); ?>
    <main>
        <h1>Liste des professeurs</h1>
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
            <?php 
                foreach($professeurs as $professeur) {
                    $professeur->afficherInfos();
                }
            ?>
        </table>
    </main>
<?php include("assets/inc/footer.php"); ?>