<?php
// spl_autoload_register et fonction requireClass

spl_autoload_register('requireClass'); 
//on créé une pile d'autoload avec le spl_autoload_register = enregistre un nombre quelconque de chargeurs automatiques, ce qui permet aux classes et aux interfaces d'être automatiquement chargées si elles ne sont pas définies actuellement. Si vous devez utiliser plusieurs fonctions d'autochargement, la fonction spl_autoload_register() est faite pour cela. Elle crée une file d'attente de fonctions d'autochargement, et les exécute les unes après les autres, dans l'ordre où elles ont été définies. 

function requireClass($classe){
    require $classe .'.class'.'.php';
}

include ('resultat.php'); // on inclut les usages

/* tout ce qu'il y a au-dessus est =
* include_once ('personnage.class.php'); // on utilise la classe
* include_once ('voiture.class.php'); // on utilise la classe
* require_once ('resultat.php'); // on inclut les usages
*/

?>  