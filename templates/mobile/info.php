<nav class="container-fluid text-center">
  <div class="col">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#infoModal">
        <img id="info"  src="public/img/icons/info.svg" alt="Menu">
    </button>
  </div>

<!-- Modal Info-->
  <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-margin-y-sm-up">
      <div class="modal-content animate-bottom">
        <div class="modal-header justify-content-center red">
            <h5 class="modal-title text-white" id="exampleModalLabel">Informations</h5>
        </div>
        <div class="modal-body text-center">
                   
<!-- Accordion -->
            <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Calendrier
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- elements à placer ici. -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Newsletter
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" method="POST">
                                <input type="email" name="newsletter" placeholder="E-mail" class="container-fluid p-1">
                                <button type="submit" name="newsletter" class="container-fluid mt-2"> Je m'abonne ! </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Recherche
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <input type="text" name="search" placeholder="Recherche" class="container-fluid p-1">
                            <button type="submit" name="search" class="container-fluid mt-2"> Rechercher </button>
                        </div>
                    </div>
                </div>
            </div>
<!-- end accordion -->
        </div>
      </div>
    </div>
  </div>
</nav>