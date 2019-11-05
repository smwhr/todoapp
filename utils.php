<?php

function get_status($task){
  return $task["done"];
}

function display_task($task){
  $accompli = get_status($task);
  if($accompli){
    $class = "done";
  }else{
    $class = "";
  }
  return "<span class='$class'>".$task["title"]."</span>";
}