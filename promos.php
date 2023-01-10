<?php

require_once("models/promo.php");

$promos = Promo::readAll();

// echo "<pre>";
// var_dump($promos);
// echo "</pre>";

?>
<?php include("assets/inc/head.php"); ?>
    <title>Liste des promotions</title>
<?php include("assets/inc/header.php"); ?>
    <main>
        <h1>Liste des promotions</h1>
        <table class="table">
            <tr>
                <th>Niveau</th>
                <th>Nom</th>
                <th>Prof principal - Nom</th>
                <th>Prof principal - Prénom</th>
                <th>Prof principal - Email</th>
                <th>Action</th>
            </tr>
            <?php 
                // Afficher les infos de chaque promo et de son prof principal
                foreach($promos as $promo) {
                    $promo->afficherInfos();
                }
            ?>
        </table>
    </main>
<?php include("assets/inc/footer.php"); ?>