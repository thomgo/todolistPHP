<?php
  include("template/header.php")
 ?>
<section class="container">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
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
       <h3><?php echo $project["title"]; ?></h3>
       <p><?php echo $project["description"]; ?></p>
     </article>
   </div>

    <?php
      }
   ?>
</div>

</section>

 <?php
   include("template/footer.php")
  ?>
