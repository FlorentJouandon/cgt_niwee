
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo($msg_title);?></h5>
      </div>
      <div class="modal-body">
        <?php echo($msg_comment);?>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-outline-warning bg-white" data-bs-dismiss="modal">Retour</button>
      </div>
    </div>
  </div>
</div>

