<?php
//ici notre PHP
session_start();
include "utils.php";

$todo = $_SESSION["todo"] ?? [];
$recycle = $_SESSION["recycle"] ?? [];

if(
       isset($_POST['action']) 
    && $_POST['action'] == "add_task")
  {

    $title = $_POST['title'];
    $accompli = false;
    $newTask = ["title" => $title, "done" => $accompli];

    $todo[] = $newTask;
    $_SESSION["todo"] = $todo;
  }

  if(
       isset($_POST['action']) 
    && $_POST['action'] == "mark_done")
  {
          //TODO
    $task_number = $_POST["task_number"];
    $todo[$task_number]["done"] = true;

    //on sauvegarde
    $_SESSION["todo"] = $todo;
    
   }

  if(
       isset($_POST['action']) 
    && $_POST['action'] == "move_to_recycle")
  {
          //TODO
    $task_number = $_POST["task_number"];

    list($toRecycle) = array_splice($todo, $task_number, 1); // IL SE PASSE UN TRUC BIZARRE ICI
    $recycle[] = $toRecycle;

    //on sauvegarde
    $_SESSION["todo"] = $todo;
    $_SESSION["recycle"] = $recycle;

  }




