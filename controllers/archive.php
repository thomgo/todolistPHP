<?php
require_once "../services/global.php";
require_once "../model/project.php";

$projects = getArchive($bdd);

include "../views/archiveView.php";
 ?>
