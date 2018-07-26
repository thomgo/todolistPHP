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
        <input type="hidden" name="project_id" value="<?php echo $project["p_id"]; ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" name="addStep" class="btn secondColor">Add step</button>
      </div>
    </form>
  </div>
</div>
</div>
