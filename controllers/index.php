<?php
require_once "../services/global.php";
require_once "../model/project.php";

//Handle the form submissions
if(isset($_POST["deleteProject"])) {
  deleteProject($_POST, $bdd);
}
if(isset($_POST["archiveProject"])) {
  archiveProject($_POST, $bdd);
}
if(isset($_POST["addProject"])) {
  addProject($_POST, $bdd);
}

//Get the necessary data
$projects = getProjects($bdd);

include "../views/indexView.php";
 ?>
