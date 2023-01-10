<?php

// Inclusion de la connexion à la base de données
require_once("conf.php");

require_once("personne.php");

class Eleve extends Personne {
    public string $date_naissance;

    // Création d'une propriété statique qui sera commune à tous mes élèves
    public static int $nombre = 0;

    function __construct()
    {
        // Incrémenter le nombre des élèves
        self::$nombre ++;
    }

    function afficherInfos() {
        echo "<tr><td>" . $this->nom . "</td><td>" . $this->prenom . "</td><td>" . $this->date_naissance . "</tr>";
    }

    // Création d'une méthode statique, qui concerne le concept d'Eleve en général, afin de récupérer la liste des élèves
    static function readAll(): array {
        // Permet d'aller chercher la variable $pdo à l'extérieur de la fonction (portée globale)
        global $pdo;

        // Ecriture de la requête SQL dans une chaîne de caractères
        $sql = "SELECT nom, prenom, date_naissance FROM eleves";

        // Préparation de la requête SQL par PDO
        $statement = $pdo->prepare($sql);

        // Exécution de la requête
        $statement->execute();

        // Récupération des résultats de la requête, sous forme de tableau associatif ici
        $liste = $statement->fetchAll(PDO::FETCH_CLASS, "Eleve");

        return $liste;
    }
}