<?php

//Store a new project in database
function addProject(Array $project, $bdd) {
  $requete = $bdd->prepare("INSERT INTO project(title, description, endDate) VALUES(:title, :description, :endDate)");
  $requete->execute([
    ":title" => $project["title"],
    ":description" => $project["description"],
    ":endDate" => $project["endDate"]
  ]);
}

//Get all projects in database to display them on index view
function getProjects($bdd) {
  $requete = $bdd->query("SELECT * , DATE_FORMAT(endDate, '%d-%m-%Y') AS endDate FROM project WHERE status = 1 ORDER BY DATE(endDate) ASC");
  $projects = $requete->fetchAll(PDO::FETCH_ASSOC);
  return $projects;
}

//Get a single project in the data base
function getProject($bdd, $id) {
  $requete = $bdd->prepare(
  "SELECT title, description, p_id, status, endDate, s_id, name, project_id, t_id, t_name, t_status, stepId,
  DATE_FORMAT(endDate, '%d-%m-%Y') AS endDate
  FROM project
  LEFT JOIN step
  ON project.p_id = step.project_id
  LEFT JOIN task
  ON step.s_id = task.stepId
  WHERE p_id = :p_id"
  );
  $requete->execute([
    ":p_id" => $id
  ]);
  $project = $requete->fetchAll(PDO::FETCH_ASSOC);
  //Group the result in sub arrays by step
  $result = [
    "title" => $project[0]["title"],
    "description" => $project[0]["description"],
    "p_id" => $project[0]["p_id"],
    "status" => $project[0]["status"],
    "endDate" => $project[0]["endDate"],
    "steps" => []
  ];
  //If the project has steps then feed the steps array
  if(isset($project[0]["name"])) {
    foreach ($project as $step) {
        $result["steps"][$step['s_id']][] = $step;
    }
  }
  return $result;
}

//Get all archived projects in database to display them on index view
function getArchive($bdd) {
  $requete = $bdd->query("SELECT * FROM project WHERE status = 0");
  $projects = $requete->fetchAll(PDO::FETCH_ASSOC);
  return $projects;
}

//Delete a specific project in database
function deleteProject(Array $project, $bdd){
  $requete = $bdd->prepare("DELETE FROM project WHERE p_id = " . $project['p_id']);
  $requete->execute();
 }

 //Archive a specific project in database
 function archiveProject(Array $project, $bdd){
   $requete = $bdd->prepare("UPDATE project SET status = 0 WHERE p_id = " . $project['p_id'] );
   $requete->execute();
  }

  //Active a specific project in database
  function activeProject(Array $project, $bdd){
    $requete = $bdd->prepare("UPDATE project SET status = 1 WHERE p_id = " . $project['p_id'] );
    $requete->execute();
   }

 ?>
