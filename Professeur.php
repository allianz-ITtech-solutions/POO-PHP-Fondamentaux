<?php

// Pour faire de l'héritage, on utilise le mo-clé 'extends'
// Ici, Professeur hérite de Personne
class Professeur extends Personne{

    private string $grade;
    

    public function __construct()
    {
        // On fait appel au constructeur du parent (Personne)
        // En java c'est 'super()' alors qu'en PHP c'est 'parent'
        parent::__construct();
    }

    public function getGrade()
    {
        return $this->grade;
    }

    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    // Redéfinition de la méthode 'toString' du parent
    // En PHP, '@override' n'est pas conseillé
    public function __toString()
    {
        // On rappelle le constructeur du parent (Personne) + les attributs de cette classe fille à ajouter (Professeur)
        return parent::__toString() . "Grade : " .$this->grade;
    }

}

?>