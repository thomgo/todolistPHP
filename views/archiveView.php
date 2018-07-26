<?php
  include("template/header.php")
 ?>

  <h2>Archived projects</h2>

<!-- Display projects inside a loop -->
<div class="row mt-5">
  <?php
    foreach ($projects as $project) {
   ?>
   <div class="col-sm-4">
     <article class="project secondColor my-3 py-2 px-2">
       <h3><?php echo $project["title"]; ?></h3>
       <p><?php echo $project["description"]; ?></p>
       <div class="actions flex">
         <?php
            require "forms/deleteProjectForm.php";
            require "forms/activeProjectForm.php";
          ?>
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
