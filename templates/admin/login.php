<div id="admin" class="container-fluid bg-white text-center px-5 pt-5 pb-2 mt-5">
    <form action="" method="POST">

    <?php
        if(!isset($_POST['connect'])&& $_SESSION['login']===false):?>

        <h2 class="text-center">Connexion</h2>
        <hr class="my-5">
        <div class="my-2">
            <input type="text" placeholder="Entrer le nom de l'utilisateur" class="red text-white" name="login">
        </div>
        <div class="my-2">
            <input type="password" placeholder="Entre votre mot de passe" class="red text-white" name="pwd">
        </div>
        <div class="my-5">
            <button name="connect" type="submit">Se Connecter</button>
        </div>

    <?php else: ?>
               <p class="text-center"><?php echo $_SESSION['msg'] ;?></p>
               <a href=""><button type="submit" name="return" class="my-3">Retour</button></a>
    <?php endif;?>
    </form>
</div>