<?php
  include("template/header.php")
 ?>

  <h2>Current projects</h2>

<?php require("forms/addProjectForm.php"); ?>

<!-- Display projects inside a loop -->
<div class="row mt-5">
  <?php
    foreach ($projects as $project) {
   ?>
   <div class="col-sm-4">
     <article class="project secondColor my-3 py-2 px-2">
       <!-- Tag with color and number of left days -->
        <?php if ($project["endDate"]): ?>
          <p class="date <?php echo "bg-" . $project["priority"] ?>">
            <span><?php echo " J -" . $project["leftDays"]; ?></span>
          </p>
        <?php endif; ?>
       <h3><?php echo $project["title"]; ?></h3>
       <p><?php echo $project["description"]; ?></p>
       <div class="actions flex">
         <a class="mt-2 mr-2" href="project.php?p_id=<?php echo $project['p_id']; ?>"><i class="fas fa-search-plus"></i></a>
         <?php
           require "forms/deleteProjectForm.php";
           require "forms/archiveProjectForm.php";
           if ($project["endDate"]): ?>
             <button class="btn secondColor"><i class="fas fa-calendar-alt"></i><?php echo " " . $project["endDate"]; ?></button>
         <?php endif; ?>
       </div>
     </article>
   </div>

    <?php
      }
   ?>
</div>

 <?php
   include("template/footer.php")
  ?>
