<?php

//Loop trough an array of projects and calculate the number of days that are left
//Add a class for the priority of the project in the view with the addPriority function
function calculateLeftDays($projects) {
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

      $projects[$key] = addPriority($projects[$key]);
    }
  }
  return $projects;
}

//Function to add class name based on the priority of the project
//Priority is based on the number of left days
//Classes are from Bootstrap 4
function addPriority($project) {
  if ($project["leftDays"] <= 14) {
    $project["priority"] = "danger";
  }
  else if ($project["leftDays"] <= 30) {
    $project["priority"] = "warning";
  }
  else {
    $project["priority"] = "success";
  }
  return $project;
}

 ?>
