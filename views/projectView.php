<?php
  include("template/header.php")
 ?>

  <h2>Project : <?php echo $project[0]["title"]; ?></h2>
  <h3 class="my-4">Steps of the project</h3>

  <!-- Button trigger modal -->
<button type="button" class="btn secondColor" data-toggle="modal" data-target="#addProject">
  <i class="far fa-plus-square fa-2x"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un projet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="" method="post">
          <p>Step's name</p>
          <input type="text" name="name" value="">
          <input type="hidden" name="project_id" value="<?php echo $project[0]["p_id"]; ?>">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="submit" name="addStep" class="btn secondColor">Add step</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Display steps inside a loop -->
<div class="row mt-5">
  <?php
    if($project[0]["name"] !== null) {
    foreach ($project as $step) {
   ?>
   <div class="col-sm-4">
     <article class="project secondColor my-3 py-2 px-2">
       <h3><?php echo $step["name"]; ?></h3>
       <div class="actions flex">
         <form class="form" action="" method="post">
           <input type="hidden" name="s_id" value="<?php echo $step['s_id']; ?>">
           <button type="submit" name="deleteStep" class="btn secondColor"><i class="fas fa-trash-alt"></i></button>
         </form>
       </div>
       <form class="form" action="" method="post">
           <input type="hidden" name="stepId" value="<?php echo $step['s_id']; ?>">
           <input type="text" name="t_name">
           <button type="submit" name="addTask" class="btn mainColor">Add task</button>
       </form>
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
