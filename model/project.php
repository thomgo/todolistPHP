<?php

function addProject(Array $project, $bdd) {
  $requete = $bdd->prepare("INSERT INTO project(title, description) VALUES(:title, :description)");
  $requete->execute([
    ":title" => $project["title"],
    ":description" => $project["description"]
  ]);
}

 ?>
