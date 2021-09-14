<?php
   class Voiture{
      private $couleur;
      private $puissance;
      private $vitesse;
      public function __construct(){
         $this->couleur="Rouge";
         $this->puissance=130;
         $this->vitesse=0;
      }
      public function __destruct(){ // est appelé automatiquement suite à un événement -> l'événement est quand il n'y aura plus aucune référence à l'objet ou l'instance ou l'instance de classe
        // c-a-d, quand je ne fais plus allusion à l'objet $polo (je n'apelle plus aucun attribut, méthodes ou membre de cet objet) -> c'est à ce moment la que le destructeur sera appelé automatiquement
        echo '<br>'."La couleur de la voiture est: ".$this->couleur; // est affiché à la fin du code -> il a pour mission de nettoyer l'objet (ex : écraser variable de session, etc.)
      }
      public function affiche(){ // a besoin que la fonction soit appelé pour s'afficher
         echo "Couleur de la voiture: ".$this->couleur; 
      }
    //   public function accelerer(){
    //      echo "Appel de la méthode accelerer()";
    //   }
    //   public function ralentir(){
    //      echo "Appel de la méthode ralentir()";
    //   }
   }

?>