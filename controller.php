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
    var_dump("I WANT TO MARK A TASK AS DONE");
   }

  if(
       isset($_POST['action']) 
    && $_POST['action'] == "move_to_recycle")
  {
          //TODO
    var_dump("I WANT TO MOVE A TASK TO RECYCLE");
    $enleves = array_splice($todo, 0, 1); // IL SE PASSE UN TRUC BIZARRE ICI
    $toRecycle = $enleves[0];


  }
