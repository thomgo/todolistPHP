<?php
  include("template/header.php")
 ?>

  <h2><?php echo $project["title"]; ?></h2>

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

</div>

 <?php
   include("template/footer.php")
  ?>
