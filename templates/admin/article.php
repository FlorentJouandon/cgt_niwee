
<div id="createArticle" class="container-fluid justify-content-center">
    <div class="container-fluid col-6 text-center py-5">
        <h1>Création d'article</h1>
    </div>
    <hr class="mb-5">

    <?php
    if(empty($_POST)):
        if($_SESSION['error'] = true):?>

        <form class="createArticle container col-8 bg-white text-center mb-5" action="" method="POST">
            <div class="py-3 pt-5" id="category">

                <label for="category">Choisissez la catégorie de votre article :</label>
                <select type="select" name="category" class="px-3 mx-2 py-1">
                    
                    <?php foreach ($_SESSION['category'] as $cat): ?>

                        <option value="<?php echo($cat['id']) ;?>" ><?php echo($cat['name']);?></option>

                    <?php endforeach ?>
                </select>
            </div>

            <div class="py-2">
                <label for="title">Saisir le nom de votre article :</label>
                <input type="text" name="title" class="title bg-light mx-1 py-1">
            </div>

            <div class="py-2">
                <textarea name="text" class="col-6" id="contact-message" cols="29" rows="10" placeholder="Tapez votre texte ici"></textarea>
            </div>

            <div class="py-3">
                <label for="img">Ajouter image :</label>
                <input type="file" name="img" class="file">
            </div>
            <div class="py-2">
                <label for="pdf">Ajouter ficher :</label>
                <input type="file" name="pdf" class="file">
            </div>
            <div class="py-5">
                <input type="submit" name="article" class="btn text-white col-6">
            </div>

        <?php endif;
    else : ?>

        <div id="validerArticle" class="createArticle container col-8 bg-white text-center mb-5 p-5">
            <div id="msg"><?php echo $_SESSION['msg'];?></div>
            <div id="return">
                <a href=""><button type="submit" name="return" class="mt-3">Retour</button></a>
            </div>
        </div>

    <?php endif;?>
        </form>
</div>