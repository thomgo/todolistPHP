<?php
require_once "../services/global.php";
require_once "../model/project.php";
require_once "../model/step.php";
require_once "../model/task.php";

//If the parameter in the url is not valide send the user to the home page
if(empty($_GET["p_id"]) || !$_GET["p_id"] > 0) {
  header('Location: index.php');
}

//Handle the form submissions
if(isset($_POST["addStep"])) {
  addStep($_POST, $bdd);
}

if(isset($_POST["deleteStep"])) {
  deleteStep($_POST, $bdd);
}

if(isset($_POST["addTask"])) {
  addTask($_POST, $bdd);
}

if(isset($_POST["deleteTask"])) {
  deleteTask($_POST, $bdd);
}

//Get the current project with associated steps
$project = getProject($bdd, $_GET["p_id"]);

include "../views/projectView.php";
 ?>
