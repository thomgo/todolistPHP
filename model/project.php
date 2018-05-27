<?php

//Store a new project in database
function addProject(Array $project, $bdd) {
  $requete = $bdd->prepare("INSERT INTO project(title, description) VALUES(:title, :description)");
  $requete->execute([
    ":title" => $project["title"],
    ":description" => $project["description"]
  ]);
}

//Get all projects in database to display them on index view
function getProjects($bdd) {
  $requete = $bdd->query("SELECT * FROM project");
  $projects = $requete->fetchAll(PDO::FETCH_ASSOC);
  return $projects;
}

//Delete a specific project in database
function deleteProject(Array $project, $bdd){
  $requete = $bdd->prepare("DELETE FROM project WHERE p_id = " . $project['p_id']);
  $requete->execute();
 }

 ?>
