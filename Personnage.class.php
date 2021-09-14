<?php
// pas besoin de HTML car cette page ne contiendra que du PHP et a vocation à être insérée dans d'autres pages
// l'idée de la POO est de définir le type - comparé a PHP basique, définir par une class permet d'utiliser tous les types (int, float, string, booléen) dans un seul élément

// 1 - on créé une classe synonyme de type
class Personnage{ // classe va contenir un ensemble d'attributs/propriétés et de méthodes
    private string $_nom;
    private int $_vie; // première propriétés (variables) = caractéristiques qui vont caractériser notre objet 
    private int $_degat;
    private int $_force;
    private int $_localisation; 
// on peut définir une propriété sans lui donner de valeur

    public function __construct(string $_nom, int $_vie, int $_degat, int $_force, int $_localisation){ // __construct : initialise les attributs et fourni à l'objet tout ce dont il a besoin pour fonctionner
        $this->nom = $_nom; // on repasse la var $_nom dans l'instance pour la sauvegarder sinon elle sera perdu 
        $this->vie = $_vie;
        $this->degat = $_degat;
        $this->force = $_force; // this permet d'utiliser l'objet en cours / est relier aux attributs/méthodes d'instance
        $this->localisation = $_localisation;
    }

    public function crier(){
        echo 'Par la foudre du Destin !';
    }
 
    public function regenerer(){
        // $this->vie = 150;
    }

    public function mort(){
        return $this->vie == 0; // 1-A : retournera false si le personnage est vivant et true s'il est mort
    }


    // // méthode pour déplacer le personnage = modifier sa localisation donc avec la propriété $localisation
    // public function deplacer(){

    // }

    // // méthode pour frapper le personnages = suivant sa force -> $force
    // public function frapper(){
    // }

    // // méthode pour augmenter l'attribut $experience du personnage
    // public function gagnerXp(){
    // }
}

// les attributs et méthodes ci-dessus appartiennent à l'objet $perso1 ou $perso2 (et les autre sque l'on peu créer) qui est l'instance de la class Personnage
?>