<div id="admin" class="container-fluid bg-white text-center px-5 pt-5 pb-2 mt-5">
    <form action="" method="POST">

    <?php
        if(!isset($_POST['connect'])&& !isset($_COOKIE['login'])):?>

        <h2 class="text-center">Connexion</h2>
        <hr class="my-5">
        <div class="my-2">
            <input type="text" placeholder="Entrer le nom de l'utilisateur" class="red text-white" name="login">
        </div>
        <div class="my-2">
            <input type="password" placeholder="Entre votre mot de passe" class="red text-white" name="pwd">
        </div>
        <div class="my-5">
            <button name="connect">Se Connecter</button>
        </div>

    <?php endif;?>
    </form>
</div>