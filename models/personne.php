<?php 

class Personne {
    public string $nom;
    public string $prenom;

    function direBonjour(): void {
        echo "<p>Bonjour, je m'appelle " . $this->nom . " " . $this->prenom . "</p>";
    }
}