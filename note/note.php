Créer une classe : les bons usages
Les 3 règles fondamentales
• Bien nommer ses variables et ses fonctions.
• Bien indenter le programme. (l'indentation consiste en l'ajout de tabulations ou d'espaces dans un fichier texte)
• Bien commenter le programme.

Elément de notation PEAR :
• nom des classes commence par une majuscule
• underscore précédant les noms d'éléments privés
• Constantes en majuscules avec des _ pour séparer les parties du nom.
• double underscore précédent les noms d’éléments magiques (constructeur, etc.)
• pas d’underscore pour les élément protected.


Attribut et méthodes définit DANS une classe - -> et THIS:
Nous avons vu précédemment que les attributs et méthodes définis dans une classe appartiennent en fait à l'objet qui sera l'instance de cette classe. On s'est donc servi de l'opérateur -> pour désigner un membre à partir de l'objet créé.





Attritbut et fonction de classe - STATIC, :: et SELF : -> la méthode nbObjects est une méthode static, c'est à dire que l'on peut l'appeler sans instancier la class (donc sans créer de nouvel objet)

-> il n'appartient pas à l'objet ou à l'instance de class mais à toute la class
Un attribut de classe, ou attribut static, est un attribut qui ne concerne pas un objet en particulier mais toute la classe.
Une fonction de classe, ou fonction static est une fonction qui ne concerne pas un objet en particulier mais toute la classe.
=/= d'un attribut et fonction d'instance qui appartient à l'objet

-> Dans le cas de l'attribut de classe, il n'y a qu'un seul objet auquel il est fait référence. Dans l'instance-attribut-ensemble-à-instanciation, il peut y avoir plusieurs objets référencés.
-> La différence est que l'attribut de la classe est partagé par toutes les instances. L'attribut sur une instance est unique à cette instance.
-> Le fait de déclarer des propriétés ou des méthodes comme statiques vous permet d'y accéder sans avoir besoin d'instancier la classe - omme les méthodes statiques peuvent être appelées sans qu'une instance d'objet n'ait été créée, la pseudo-variable $this n'est pas disponible dans les méthodes déclarées comme statiques.