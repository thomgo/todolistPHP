<?php
require_once "../services/global.php";
require_once "../model/project.php";

//If the parameter in the url is not valide send the user to the home page
if(empty($_GET["p_id"]) || !$_GET["p_id"] > 0) {
  header('Location: index.php');
}

if(isset($_POST["addStep"])) {
  addStep($_POST, $bdd);
}

$project = getProject($bdd, $_GET["p_id"]);
include "../views/projectView.php";
 ?>
