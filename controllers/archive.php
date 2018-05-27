<?php
require_once "../services/global.php";
require_once "../model/project.php";

if(isset($_POST["deleteProject"])) {
  deleteProject($_POST, $bdd);
}
if(isset($_POST["activeProject"])) {
  activeProject($_POST, $bdd);
}

$projects = getArchive($bdd);

include "../views/archiveView.php";
 ?>
