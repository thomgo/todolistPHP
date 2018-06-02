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
  if(strlen($_POST["endDate"]) === 0){
    $_POST["endDate"] = null;
  }
  addProject($_POST, $bdd);
}

//Get the necessary data
$projects = getProjects($bdd);
$currentDate = new DateTime();

foreach ($projects as $key => $project) {
  if($project["endDate"]) {
    $endDate = new DateTime($project["endDate"]);
    $diff = date_diff($currentDate, $endDate);
    $diff = $diff->format("%r%a");
    if($diff > 0) {
      $projects[$key]["leftDays"] = $diff;
    }
    else {
      $projects[$key]["leftDays"] = 0;
    }

    if ($diff <= 14) {
      $projects[$key]["priority"] = "danger";
    }
    else if ($diff <= 30) {
      $projects[$key]["priority"] = "warning";
    }
    else {
      $projects[$key]["priority"] = "success";
    }
  }
}

include "../views/indexView.php";
 ?>
