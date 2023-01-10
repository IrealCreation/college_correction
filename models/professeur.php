<?php

// Inclusion de la connexion à la base de données
require_once("conf.php");

require_once("personne.php");

class Professeur extends Personne {
    public string $email;

    // Création d'une propriété statique qui sera commune à tous mes professeurs
    public static int $nombre = 0;

    function __construct()
    {
        // Incrémenter le nombre des élèves
        self::$nombre ++;
    }

    function afficherInfos() {
        echo "<tr><td>" . $this->nom . "</td><td>" . $this->prenom . "</td><td>" . $this->email . "</tr>";
    }

    // Création d'une méthode statique, qui concerne le concept d'Eleve en général, afin de récupérer la liste des élèves
    static function readAll(): array {
        // Permet d'aller chercher la variable $pdo à l'extérieur de la fonction (portée globale)
        global $pdo;

        // Ecriture de la requête SQL dans une chaîne de caractères
        $sql = "SELECT nom, prenom, email FROM professeurs";

        // Préparation de la requête SQL par PDO
        $statement = $pdo->prepare($sql);

        // Exécution de la requête
        $statement->execute();

        // Récupération des résultats de la requête, sous forme de tableau associatif ici
        $liste = $statement->fetchAll(PDO::FETCH_CLASS, "Professeur");

        return $liste;
    }

    // Méthode permettant de charger les informations d'un professeur en fonction de son id
    static function readOne(int $id): Professeur {
        // Permet d'aller chercher la variable $pdo à l'extérieur de la fonction (portée globale)
        global $pdo;

        // Utilisation d'un paramètre nommé :id afin de se protéger des injections SQL
        $sql = "SELECT nom, prenom, email FROM professeurs WHERE id_professeurs = :id";

        // Préparation de la requête SQL par PDO
        $statement = $pdo->prepare($sql);

        // Lien entre le paramètre nommé :id et la variable $id qui sont de type Int
        $statement->bindParam(":id", $id, PDO::PARAM_INT);

        // Exécution de la requête
        $statement->execute();

        // Récupération du résultat de la requête sous forme d'un objet Professeur grâce à fetch()
        $statement->setFetchMode(PDO::FETCH_CLASS, 'Professeur');
        $professeur = $statement->fetch();

        return $professeur;
    }
}