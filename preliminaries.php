<?php

// Ex 1 : Mettre le titre d'une tache dans une variable $title
$title  = "Ouvrir les rideaux";

// Ex 2 : Mettre [l'état d'accomplissement d'une tache] dans une variable $done
$done = false;

// Ex 3 : Mettre dans une variable $task un tableau dont les clés sont "title" et "done", les variables précédentes correspondantes
//=> On appelera ce genre de tableau des "task"s dans la suite
$task = ["title" => $title , "done" => $done];

var_dump($task);

// Ex 4 : Créer une fonction `get_status` qui prend en argument une "task" et renvoie l'état d'accomplissement


// Ex 5 : Créer un tableau vide dans une variable $todo


// Ex 6 : Ajouter la tache $task de l'ex 3 à la fin du tableau $todo


// Ex 7 : stocker $todo dans la session (clé "todo")


// Ex 8 : écrire une boucle foreach pour faire un var_dump des éléments de $todo


// Ex 9 : Rajouter d'autres éléments du même type que $task à $todo

// Ex 8bis : véridier que la boucle de l'exercice 8 fonctionne toujours

// Ex 10 : Afficher, dans des <li> les titres des éléments de todo

//Ex 11 : créer une fonction display_task prenant en paramètre une $task et renvoyant le titre dans une balise span, possédant une class "done" si la classe est faite.

// Ex 10 bis : remplacer l'affichage du titre par l'appel à la fonction display_task


