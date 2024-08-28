<?php

// En Web PHP, le controller représente la partie qui va définir les services (usecases).


// En Java, pour utiliser une classe il faut l'importer.
// En PHP, on parle d'Inclusion. Il faut inclure la classe
require_once "./models/Personne.php";
require_once "./models/Professeur.php"; // On inclut d'abord la classe Mère avant d'inclure Professeur qui est la fille


// 1 - Recoit et traite la request http (GET | POST)
// 1 - Réalise les Fonctionnalités
// 3 - Produit une Response ===> Retourner une vue HTML/CSS
class PersonneController{

    public function listerPersonnes() {

        $personne = new Personne();

        // $personne-> ===> Interface d'un Objet
        $personne->setId(1);
        $personne->setNomComplet("Bbw");

        // Quand on affiche avec un echo, automatiquement c'est la méthode 'toString' qui est appelé
        // Comme en Java ou quand on affiche un objet, il fait directement appel à la méthode 'toString'

        // Instanciation d'un Objet
        $prof = new Professeur; // Si on veut, on enlève les ()

        // Hydratation
        $prof->setId(2);
        $prof->setNomComplet("Bbw2");
        $prof->setGrade("Ingénieur");

        // Tableau qui contient deux personnes
        $personnes = [$personne, $prof];

        // On charge la vue ici. En fesant cela, c'est comme si on fusionnait le fichier présent et liste.html.php
        // Par conséquent, le contenu de ce fichier esr accessible dans liste.html.php
        require_once "./views/liste.html.php";
    }
}

?>