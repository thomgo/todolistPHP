<?php
  include("template/header.php")
 ?>

  <h2>Project : <?php echo $project["title"]; ?></h2>
  <h3 class="my-4">Steps of the project</h3>

  <?php require "forms/addStepForm.php" ?>

<!-- Display steps inside a loop -->
<div class="row mt-5">
  <?php
    //If the project has steps
    if(!empty($project["steps"])) {
      foreach ($project["steps"] as $step) {
   ?>
       <!-- Square for each step -->
       <div class="col-sm-4">
         <article class="project projectView secondColor my-3 py-2 px-2">
           <h3><?php echo $step[0]["name"]; ?></h3>
           <div class="actions flex">
             <!-- Delete step form -->
            <?php require "forms/deleteStepForm.php"; ?>
           </div>
           <!-- Display of the tasks related to a step -->
           <div class="tasks mb-5">
             <ul class="list-group text-left">
               <?php if (isset($step[0]["t_name"])): ?>
                 <?php foreach ($step as $task): ?>
                   <?php if ($task["t_status"]): ?>
                          <li class="list-group-item list-group-item-success">
                          <?php
                            echo $task["t_name"];
                            require "forms/activeTaskForm.php";
                         else: ?>
                           <li class="list-group-item">
                           <?php
                             echo $task["t_name"];
                             require "forms/completeTaskForm.php";
                         endif;
                         require "forms/deleteTaskForm.php";
                         ?>
                         </li>
                 <?php endforeach; ?>
               <?php endif; ?>
             </ul>
           </div>
           <!-- Form to add a task -->
           <?php require "forms/addTaskForm.php"; ?>
         </article>
       </div>

    <?php
      }
    }
   ?>
</div>

 <?php
   include("template/footer.php")
  ?>
