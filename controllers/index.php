<?php
require_once "../services/global.php";
require_once "../model/project.php";

if(isset($_POST["deleteProject"])) {
  deleteProject($_POST, $bdd);
}

if(isset($_POST["addProject"])) {
  addProject($_POST, $bdd);
}

$projects = getProjects($bdd);

include "../views/indexVue.php";
 ?>
