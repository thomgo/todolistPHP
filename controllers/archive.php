<?php
require_once "../services/global.php";
require_once "../model/project.php";

//Handle the form submissions
if(isset($_POST["deleteProject"])) {
  deleteProject($_POST, $bdd);
}
if(isset($_POST["activeProject"])) {
  activeProject($_POST, $bdd);
}

//Get the necessary data
$projects = getArchive($bdd);

include "../views/archiveView.php";
 ?>
