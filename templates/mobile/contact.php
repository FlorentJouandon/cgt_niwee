
<div id="contact" class="my-5">
    <div class="container-fluid mt-3">
        <div class="text-white red">
            <p class="p-3">
                      Union Départementale<br>
<span class="fw-bold">CGT Puy-de-Dôme</span><br>
                      Place de la Liberté<br>
                      63000 Clermont-Ferrand<br>
<span class="fw-bold">04 26 07 78 60</span>
            </p>
        </div>
    </div>

    <div class="container-fluid text-center">
        <div class="bg-white">
            <div class="contact">

                <?php
                if(empty($_POST)):
                    if($_SESSION['error'] = true):?>

                        <form action="" method="POST" id="formContact">
                            <div>
                                <p class="text-muted text-center pt-2">Tous les champs marqué d'un * sont obligatoires</p>
                            </div>
                            <div>
                                <input class="contact-name col-10 mt-1"type="text" name="name" placeholder="Nom*">
                            </div>
                            <div>
                                <input class="contact-firstname col-10 mt-1" type="text" name="firstname" placeholder="Prénom*">
                            </div>
                            <div>
                                <input class="contact-email col-10 mt-1" type="email" name="email" placeholder="Email*">
                            </div>
                            <div>
                                <input class="contact-object col-10 mt-1" type="text" name="object" placeholder="Objet*">
                            </div>
                            <div>
                                <textarea name="message" class="col-10 mt-1" id="contact-message" cols="29" rows="10" placeholder="Tapez votre message ici*"></textarea>
                            </div>
                            <div class="my-2">
                                <input type="checkbox" id="newsletter" name="checkletter" value="newsletter" class="mx-1">
                                <label for="checkletter">Je souhaite m'inscrire à la Newsletter.</label>
                            </div>
                            <button type="submit" name="contact" class="mb-4 mx-0 container-fluid">Envoyer</button>

                    <?php endif;
                else : ?>

                            <div id="validerContact" class="align-content-center mx-5">
                                <div id="msg"><?php echo $_SESSION['msg'];?></div>
                                <div id="return">
                                    <a href=""><button type="submit" name="return" class="mt-3">Retour</button></a>
                                </div>
                            </div>

                <?php endif;?>
                        </form>
            </div>
        </div>
    </div>
</div>