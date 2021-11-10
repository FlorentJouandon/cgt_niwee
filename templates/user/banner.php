
<div id="banner" class="container-fluid row">
    <div id="band-contact" class="col-6">
        <a href=<?php DOC_ROOT ;?>"contact">
            <div class="bg">
                <p class="left h6">Des question ? Envie de nous parler ?!</p>
                <div class="p-left h5 text-white">Contactez-Nous !</div>
            </div>
        </a>
    </div>

    <div id="band-newsletter" class="col-6">
        <div class="bg2">
            <p class="right h6">Des infos ?! Recevoir nos actus ?</p>
            
            <div class="band-newsletter pt-2">
                
                <?php if(!isset($_COOKIE['newsletter'])): ;?>
                    <form action="" method="POST" id="formNewsletter">
                        <div class="row">   
                            <input type="email" name="email" placeholder="E-mail" class="col-6 mt-2">
                            <input class="btn btn-outline-warning col-6 mt-2 p-2" type="submit" name="newsletter" value="Je m'abonne " class="pt-1">
                        </div>
                <?php else: ?>
                        <div id="valider" class="row text-white ">
                            <img src="public/img/icons/hand-thumbs-up-fill.svg" alt="hands_thumbs_icon" class="valider col-2">
                            <p class="d-block col-10">Vous êtes déjà inscrit à notre Newsletter.</p>
                        </div>
                    </form>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
