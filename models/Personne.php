<?php

// En PHP, pas besoin de mettre de mot clé devant le nom de la classe
// abstract 
    // Classe ===> La classe est non instanciable
                    // Impossible ===> $personne = new Personne();
    // Méthode ===>
// final 
    // Classe ===> La classe ne peut etre hérité. Elle ne peut pas avoir de classes filles.
                    // Impossible de faire 'class Professeur extends Personne'

    // Méthode ===>
class Personne{

    // Attributs Statiques
    // NB : Quand on génère les getters et setters d'un attribut statique, c'est à nous de spécifier 'static' dans ces deux méthodes
    private static int $nbrePers;

    // Attributs d'Instances
    // 'protected' pour dire que la classe actuelle sera une classe mère donc sujette à l'héritage
    protected $id;
    protected string $nomComplet;


    // En PHP, le constructeur est une méthode magique déja proposé par PHP. Il ne porte pas le mm nom que la classe
    // Pas de surcharge en PHP. Mais il peut etre simulé grace aux paramètres optionnels.
    public function __construct()
    {
        
    }

    public static function getNbrePers()
    {
        // On doit utiliser 'self' pour pointer la classe.
        // A utiliser dans la classe pour accéder à des attributs statiques.
        return self::$nbrePers;
    }


    public function setNbrePers($nbrePers)
    {
        self::$nbrePers = $nbrePers;

    }


    public function getId()
    {
        // En PHP, this est obligatoire contrairement à Java
        return $this->id;  // Java this.id = id
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    // La méthode toString est une méthode magique proposé directement par php
    public function __toString()
    {
        // En PHP, la concaténation est faite en utilisant un '.'
        return "ID : ".$this->id ." NomComplet : " .$this->nomComplet;
    }

}

?>