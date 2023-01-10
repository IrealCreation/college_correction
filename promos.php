<?php

require_once("models/promo.php");

$promos = Promo::readAll();

echo "<pre>";
var_dump($promos);
echo "</pre>";

?>
<?php include("assets/inc/head.php"); ?>
    <title>Liste des promotions</title>
<?php include("assets/inc/header.php"); ?>
    <main>
        <h1>Liste des promotions</h1>
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
            </tr>
            <?php 
                // TODO : afficher les infos des promos (nom, niveau, nom du prof, prénom du prof, email du prof)
            ?>
        </table>
    </main>
<?php include("assets/inc/footer.php"); ?>