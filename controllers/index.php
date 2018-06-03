<?php
require_once "../services/global.php";
require_once "../model/project.php";
require_once "../services/dateManipulator.php";

//Handle the form submissions
if(isset($_POST["deleteProject"])) {
  deleteProject($_POST, $bdd);
}
if(isset($_POST["archiveProject"])) {
  archiveProject($_POST, $bdd);
}
if(isset($_POST["addProject"])) {
  //If no date is choosen for the project then turn it into null for the database
  if(strlen($_POST["endDate"]) === 0){
    $_POST["endDate"] = null;
  }
  addProject($_POST, $bdd);
}

//Get the necessary data
$projects = getProjects($bdd);
//Calculate the due date of the projects in left days
$projects = calculateLeftDays($projects);

include "../views/indexView.php";
 ?>
