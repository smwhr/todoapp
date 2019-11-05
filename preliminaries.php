<?php
session_start();

// Ex 1 : Mettre le titre d'une tache dans une variable $title
$title  = "Ouvrir les rideaux";

// Ex 2 : Mettre [l'état d'accomplissement d'une tache] dans une variable $done
$accompli = false;

// Ex 3 : Mettre dans une variable $task un tableau dont les clés sont "title" et "done", les variables précédentes correspondantes
//=> On appelera ce genre de tableau des "task"s dans la suite
$task = ["title" => $title , "done" => $accompli];

// Ex 4 : Créer une fonction `get_status` qui prend en argument une "task" et renvoie l'état d'accomplissement

function get_status($task){
  
  return $task["done"];

}

// Ex 5 : Créer un tableau vide dans une variable $todo
$todo = [];

// Ex 6 : Ajouter la tache $task de l'ex 3 à la fin du tableau $todo
//$todo = [$task];

$todo[] = $task;

// Ex 7 : stocker $todo dans la session (clé "todo")
$_SESSION["todo"] = $todo;
echo "<h2>Ex 8</h2>";
// Ex 8 : écrire une boucle foreach pour faire un var_dump des éléments de $todo

foreach($todo as $t){
  var_dump($t);
}

// Ex 9 : Rajouter d'autres éléments du même type que $task à $todo
$task2 = ["title" => "Lire un livre", "done" => false];
$task3 = ["title" => "Manger une pomme", "done" => true];

$todo[] = $task2;
$todo[] = $task3;

// OU
//$todo = [$task, $task2, $task3];

echo "<h2>Ex 8bis</h2>";
// Ex 8bis : vérifier que la boucle de l'exercice 8 fonctionne toujours
foreach($todo as $t){
  var_dump($t);
}

// Ex 10 : Afficher, dans des <li> les titres des éléments de todo
?>
<h2>Ex 10</h2>
<ul>
  <?php foreach ($todo as $t): ?>
    <li>
      <?php echo $t["title"]; ?>
    </li>
  <?php endforeach; ?>
</ul>

<?php
//Ex 11 : 
/*
    * [créer une fonction display_task] 
    * [prenant en paramètre une $task] 
    * [et renvoyant le titre dans une balise span], 
    * [possédant une class]
    * ["done"]
     si la tâche est faite.
*/

echo "<h2>Ex 11 Test</h2>";
$name = "Jojo Lapin";
echo "Mon nom est $name <br>";
echo 'Mon nom est $name <br>';

echo "<h2>Ex 11</h2>";

function display_task($task){
  $accompli = get_status($task);
  if($accompli){
    $class = "done";
  }else{
    $class = "";
  }
  return "<span class='$class'>".$task["title"]."</span>";
}

echo display_task($task);
echo display_task($task3);



// Ex 10 bis : remplacer l'affichage du titre par l'appel à la fonction display_task
?>
<h2>Ex 10bis</h2>
<ul>
  <?php foreach ($todo as $t): ?>
    <li>
      <?php echo display_task($t); ?>
    </li>
  <?php endforeach; ?>
</ul>

<style>
  span.done{text-decoration: line-through;}
</style>

<?php

// Ex 12 : 
/*
  *  Créer un tableau $recycle vide. 
  * À l'aide de la fonction array_splice, 
   * enlever un élément de votre choix de la variable $todo, 
  * placez le dans $recycle. 
  Affichez $recycle à l'aide d'une boucle.
*/

echo "<h2>Ex 12</h2>";
$recycle = [];

$enleves = array_splice($todo, 0, 1);
$toRecycle = $enleves[0];

$recycle[] = $toRecycle;
?>

<h3>Ma corbeille</h3>
<ul>
  <?php foreach ($recycle as $t): ?>
    <li>
      <?php echo display_task($t); ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php
$_SESSION["todo"] = $todo;
$_SESSION["recycle"] = $recycle;

echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";