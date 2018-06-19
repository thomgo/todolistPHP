<?php

//Store a new step related to a project in data base
function addStep(Array $step, $bdd) {
    $requete = $bdd->prepare("INSERT INTO step(name, project_id) VALUES(:name, :project_id)");
    $requete->execute([
      ":name" => $step["name"],
      ":project_id" => $step["project_id"]
    ]);
  }

//Delete a specific step in the database
function deleteTask(Array $step, $bdd) {
    $requete = $bdd->prepare("DELETE FROM step WHERE s_id = " . $step['s_id']);
    $requete->execute();
}

?>