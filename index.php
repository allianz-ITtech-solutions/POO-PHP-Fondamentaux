<?php

// Ce fichier est le fichier de base en PHP. C'est le point d'entrée de notre application.
// C'est l'équivalent du 'App.java' avec la méthode main


// En Java, pour utiliser une classe il faut l'importer.
// En PHP, on parle d'Inclusion. Il faut inclure la classe
require_once "Personne.php";
require_once "Professeur.php"; // On inclut d'abord la classe Mère avant d'inclure Professeur qui est la fille


$personne = new Personne();

// $personne-> ===> Interface d'un Objet
$personne->setId(1);
$personne->setNomComplet("Bbw");

// Quand on affiche avec un echo, automatiquement c'est la méthode 'toString' qui est appelé
// Comme en Java ou quand on affiche un objet, il fait directement appel à la méthode 'toString'
echo $personne;

// Instanciation d'un Objet
$prof = new Professeur();

// Hydratation
$prof->setId(2);
$prof->setNomComplet("Bbw2");
$prof->setGrade("Ingénieur");

echo $prof;

?>