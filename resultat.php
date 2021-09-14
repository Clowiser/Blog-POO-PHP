<?php

$merlin = new Personnage('Merlin', 120, 60, 80, 1);

// $merlin->regenerer(); // 2 - affiche 150 - dans cette méthode, le $merlin->regenerer sera le seul à avoir le 150
// var_dump($merlin->vie); // 1 - affiche 120

$merlin->vie = 0; // 2-A : retournera true car la vie de Merlin est = 0 

var_dump($merlin->mort()); // 1-A : retournera false si le personnage est vivant et true s'il est mort - dans ce cas, la vie de Merlin = 120 alors ça retourne false car il est vivant

/* var_dump($merlin->experience); : en ajoutant ->experience ou degat/force/localisation, ça récupère uniquement les données correspondantes = ici ce sera 120
* $merlin->crier() pour la fonction
*/



$arthur = new Personnage('Arthur', 100, 80, 50, 2); // on peut passer ses valeurs en tableau associatif

var_dump($arthur->nom);

$arthur->regenerer(5); // affiche 150

var_dump($arthur->vie); // affiche 100

$arthur->vie = 0; // arthur est mort var vie = 0

var_dump($arthur->mort()); // retournera true car vie arthur = 0





$perceval = new Personnage('Perceval', 80, 60, 70, 3);

$perceval->regenerer();

$perceval->vie = -20;

var_dump($perceval->mort()); // retournera false car on a mis dans la méthodes $this->vie == 0 ; si l'on veut que le -20 retourne true, il faudra modifier dans la méthode return $this->vie <= 0


 
$polo = new Voiture;

$polo->affiche();
// var_dump($polo);

/*
* Lorsque l'on instancie notre classe (que l'on créé un objet) => on fait appel à un constructeur -> cela appelle une fonction __construct.
*/
?>