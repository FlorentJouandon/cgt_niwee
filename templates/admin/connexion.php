<div id="connect" class="container-fluid p-5">
    <form class="connect bg-white text-left mt-5 p-4" method="POST">
        <div>
            <h2>Connexion</h2>
        <hr class="bg-danger">
        </div>

        <?php
        if(!isset($_POST['connect'])):?>

        <label for="id" class="my-2 ">Nom d'utilisateur : </label></br>
        <input type="text" name="login" class="bg-light container-fluid"></br>
        <label for="pwd" class="my-2">Mot de passe : </label></br>
        <input type="password" name="pwd" class="bg-light container-fluid">
        <div class="text-center mt-4">
            <button type="submit" name="connect" class="container-fluid mt-3">Se Connecter</button>
        </div>
        
        <?php else : ?>

        <div class="text-center">
            <div><?php echo $_SESSION['msg'];?></div>
            <a href="/admin"><button type="submit" name="return" class="mt-3">Retour</button></a>

        </div>

        <?php endif;?>
    </form>
</div>