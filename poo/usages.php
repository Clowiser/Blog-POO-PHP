<?php
/* usages.php permet de créer les objets et de les utiliser
* new permet de créer un nouvel objet -> c'est la méthode _construct() qui est appelée à cette ocassion
*/

// création de l'objet perso1 -> instancier la classe Personnage avec un nouvel objet = perso1
$perso1 = new Personnage(50, 0);
// $perso1->print_rObject('$perso1'); // Affiche des informations lisibles pour une variable
// $perso1->parler('Bonjour, je m\'appelle perso_1');

echo '<br>Expérience de perso_1 après gain d\'expérience :';
$perso1->gagnerXp(); // on gagne de l'xp
// $perso1->afficherxp(); // on affiche la nouvelle xp (nouvelle valeur de l'attribut)

// création de l'objet perso2 -> instancier la classe Personnage avec un nouvel objet = perso2
$perso2 = new Personnage(60, 0);
// $perso2->print_rObject('$perso2'); // c'est une méthode 
// $perso2->parler('Hello, my name is perso_2');

//perso1 frappe perso2
// $perso1->frappe($perso2);
// echo 'Dégats de perso_2 après le coup :'.$perso2->degats().'<br>';


?>