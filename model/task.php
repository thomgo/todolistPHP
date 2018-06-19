<?php

//Store a new task related to a step in data base
function addTask(Array $task, $bdd) {
    $requete = $bdd->prepare("INSERT INTO task(t_name, t_status, stepId) VALUES(:t_name, :t_status, :stepId)");
    $requete->execute([
      ":t_name" => $task["t_name"],
      ":t_status" => 0,
      ":stepId" => $task["stepId"]
    ]);
  }

//Delete a specific step in the database
function deleteStep(Array $step, $bdd) {
    $requete = $bdd->prepare("DELETE FROM step WHERE s_id = " . $step['s_id']);
    $requete->execute();
}

?>