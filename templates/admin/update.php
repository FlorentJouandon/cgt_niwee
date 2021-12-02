
<div class="container-fluid justify-content-center">
    <div class="container-fluid col-6 text-center py-5">
        <h1>Modifier votre article</h1>
    </div>
    <hr class="mb-5">

    <?php if(isset($_SESSION['article'])):
        $article = $_SESSION['article'];?>

        <form class="form container col-8 bg-white text-center mb-5" action="" method="POST">
            <div class="py-3 pt-5" id="category">

                <label for="category">Choisissez la catégorie de votre article :</label>
                <select type="select" name="category" class="px-3 mx-2 py-1">
                    
                    <?php  $menu = MENU;
                        for($i = 1; $i <5 ; $i++):?>

                        <option value="<?php echo($menu[$i]['url']) ;?>" ><?php echo($menu[$i]['url']);?></option>

                    <?php endfor ;?>
                </select>
            </div>

            <div class="py-2">
                <label for="title">Modifier le nom de votre article :</label>
                <input type="text" name="title" class="title bg-light mx-1 py-1" value="<?php echo $article['title'];?>">
            </div>

            <div class="py-2">
                <textarea name="text" class="col-6" id="contact-message" cols="29" rows="10" placeholder="Tapez votre texte ici"><?php echo $article['text'];?></textarea>
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
                <input type="submit" name="update" class="btn text-white col-6">
            </div>

        <?php 
    else : 
    ?>

        <div class="container col-8 bg-white text-center mb-5 p-5">
            <div id="msg"><?php echo $_SESSION['msg'];?></div>
            <div id="return">
                <a href=""><button type="submit" name="return" class="mt-3">Retour</button></a>
            </div>
        </div>

    <?php endif ;?>
        </form>
</div>