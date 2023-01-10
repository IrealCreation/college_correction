<?php 
    /* TODO: 
        1) afficher les informations d'une promotion en fonction de son ID. 
            Indice : $_GET[] (paramètre en URL)
            Indice : créez une méthode readOne() dans la classe Promo
        2) afficher les informations de tous les élèves de cette promotion sous forme de tableau
    */

    echo $_GET["id"];

    // TODO: Récupération de la promo dont il s'agit grâce à la méthode readOne()
    // $promo = Promo::readOne($_GET["id"]);

?>
<?php include("assets/inc/head.php"); ?>
    <title>Détail de la promotion</title>
<?php include("assets/inc/header.php"); ?>
    <main>
        <h1>Détail de la promotion</h1>
    </main>
<?php include("assets/inc/footer.php"); ?>