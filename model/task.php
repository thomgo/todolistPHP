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
function deleteTask(Array $task, $bdd) {
    $requete = $bdd->prepare("DELETE FROM task WHERE t_id = ?");
    $requete->execute([
      $task['t_id']
    ]);
}

?>
