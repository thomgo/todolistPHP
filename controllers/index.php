<?php
require_once "../services/global.php";
require_once "../model/dataBase.php";
require_once "../model/project.php";

if(!empty($_POST)) {
  addProject($_POST, $bdd);
}

include "../views/indexVue.php";
 ?>
