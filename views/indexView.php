<?php
  include("template/header.php")
 ?>

  <h2>Current projects</h2>

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
          <p>Titre</p>
          <input type="text" name="title" value="">
          <p>Description</p>
          <textarea name="description" rows="4" cols="50">Votre contenu</textarea>
          <p>Date de fin (jj/mm/aaaa)</p>
          <input type="date" name="endDate" value="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="submit" name="addProject" class="btn secondColor">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Display projects inside a loop -->
<div class="row mt-5">
  <?php
    foreach ($projects as $project) {
   ?>
   <div class="col-sm-4">
     <article class="project secondColor my-3 py-2 px-2">
       <p class="date">
         <span><i class="fas fa-calendar-alt"></i><?php echo " J -" . $project["leftDays"]; ?></span>
         <span><?php echo "(" . $project["endDate"] . ")"; ?></span>
       </p>
       <h3><?php echo $project["title"]; ?></h3>
       <p><?php echo $project["description"]; ?></p>
       <div class="actions flex">
         <form class="form" action="" method="post">
           <input type="hidden" name="p_id" value="<?php echo $project['p_id']; ?>">
           <button type="submit" name="deleteProject" class="btn secondColor"><i class="fas fa-trash-alt"></i></button>
         </form>
         <form class="form" action="" method="post">
           <input type="hidden" name="p_id" value="<?php echo $project['p_id']; ?>">
           <button type="submit" name="archiveProject" class="btn secondColor"><i class="fas fa-archive"></i></i></button>
         </form>
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
