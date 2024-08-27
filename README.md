## Ce cours présente les fondamentaux de la POO en PHP.

## Syntaxe d'une Classe + Ajout d'attributs + Getters & Setters

## Table des Matières
- [Syntaxe de création d'une Classe](#class_NomClasse)
- [Ajout d'attributs à une Classe](#private_type_attrName)
- [Ajout d'un constructeur à une Classe avec la méth. magique '__constructor'](#private_type_attrName)
- [Accèder à un attribut d'une Classe](#_$this->attrName)
- [Getters](#public_function_type_getterName())
- [Setters](#public_function_setterName())
- [Attributs Statique avec le mot-clé 'static'](#private_static_type)
- [Syntaxe d'accès d'un attribut statique (Attribut de Classe)](#self::)
- [Héritage d'une classe mère par une classe fille](#class_Parent_extends_Child)
- [Accéder aux attributs d'une classe mère dans une classe fille avec le mot-clé 'protected']
- [Appel d'une méthode de la classe Mère dans la classe Fille](#parent::methodName)

> NB : En PHP, le mot-clé this est obligatoire dans la classe.

## Pour exécuter un projet PHP, on peut utiliser le serveur interne de PHP.
> On tape ceci : php -S localhost:8000 index.php