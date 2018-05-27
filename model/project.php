<?php

// Enregistre un projet en base de données
function addProject(Array $project, $bdd) {
  $requete = $bdd->prepare("INSERT INTO project(title, description) VALUES(:title, :description)");
  $requete->execute([
    ":title" => $project["title"],
    ":description" => $project["description"]
  ]);
}

//Récupère tous les projets pour affichage en paghe d'accueil
function getProjects($bdd) {
  $requete = $bdd->query("SELECT * FROM project");
  $projects = $requete->fetchAll(PDO::FETCH_ASSOC);
  return $projects;
}

 ?>
