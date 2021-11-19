<nav class="container-fluid text-center">
  <div class="col">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#menuModal">
      <img id="burger"  src="public/img/icons/list.svg" alt="Menu">
    </button>
  </div>

<!-- Modal Menu-->
  <div class="modal fade in" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-margin-y-sm-up">
      <div class="modal-content animate-bottom">
        <div class="modal-header justify-content-center red">
          <h4 class="modal-title text-white" id="exampleModalLabel">Menu</h4>
        </div>
        <div class="modal-body text-center">
          <?php 
              $menu = MENU;
              foreach ($menu as $tab):
          ?>
                <a href=<?php echo($tab['url']);?>><h4><?php echo($tab['name']);?></h4></a>
          <?php
              endforeach;
          ?>
        </div>
      </div>
    </div>
  </div>
</nav>