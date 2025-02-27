<?php

// Ce fichier est le fichier de base en PHP. C'est le point d'entrée de notre application.
// C'est l'équivalent du 'App.java' avec la méthode main.
// Tout sera chargé ici.

// Index fait appel au Controller
// C'est comme quand App fait appel aux Services en Java
require_once "./controllers/PersonneController.php";

// Création d'un Objet Controller
// Il va nous fournir les services nécessaires
$ctrl = new PersonneController();

// Appel de la méthode pour lister les personnes
$ctrl->listerPersonnes();

?>