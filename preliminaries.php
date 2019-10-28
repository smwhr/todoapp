<?php

// Ex 1 : Mettre le titre d'une tache dans une variable $title
$title  = "Ouvrir les rideaux";

// Ex 2 : Mettre [l'état d'accomplissement d'une tache] dans une variable $done
$accompli = false;

// Ex 3 : Mettre dans une variable $task un tableau dont les clés sont "title" et "done", les variables précédentes correspondantes
//=> On appelera ce genre de tableau des "task"s dans la suite
$task = ["title" => $title , "done" => $accompli];

var_dump($task);

// Ex 4 : Créer une fonction `get_status` qui prend en argument une "task" et renvoie l'état d'accomplissement

function get_status($task){
  
  return $task["done"];

}

var_dump( get_status($task) );

// Ex 5 : Créer un tableau vide dans une variable $todo
$todo = [];

// Ex 6 : Ajouter la tache $task de l'ex 3 à la fin du tableau $todo
$todo = [$task];

var_dump($todo);
// Ex 7 : stocker $todo dans la session (clé "todo")


// Ex 8 : écrire une boucle foreach pour faire un var_dump des éléments de $todo

// Ex 9 : Rajouter d'autres éléments du même type que $task à $todo
$task2 = ["title" => "Lire un livre", "done" => false];
$task3 = ["title" => "Manger une pomme", "done" => true];

$todo[] = $task2;
$todo[] = $task3;

// OU
//$todo = [$task, $task2, $task3];

var_dump($todo);

// Ex 8bis : vérifier que la boucle de l'exercice 8 fonctionne toujours

// Ex 10 : Afficher, dans des <li> les titres des éléments de todo

//Ex 11 : créer une fonction display_task prenant en paramètre une $task et renvoyant le titre dans une balise span, possédant une class "done" si la classe est faite.

// Ex 10 bis : remplacer l'affichage du titre par l'appel à la fonction display_task


// Ex 12 : Créer un tableau $recycle vide. À l'aide de la fonction array_splice, enlever un élément de votre choix de la variable $todo, placez le dans $recycle. Affichez $recylce à l'aide d'une boucle.


