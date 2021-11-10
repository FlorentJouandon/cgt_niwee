
<div id="article" class="container-fluid col-8">
<?php foreach($_SESSION['articles'] as $article):?>
    <div class="article my-5">
        <div class="bg-article bg-white">
            <div class="text py-5">
                <h1><?php echo($article['title']) ;?></h1>
                <p><?php echo($article['date']) ;?> | <?php echo($article['category']) ;?></p>
                <div class="row">
                    <p class="col-6">
                        <?php echo($article['text']) ;?>
                    </p>
                    <!-- <img class="img-article col-6 w-50 h-50"src="public\img\fouleCGT.jpg" alt=""> -->
                </div>
                
                <button class="col-12 mt-5">Lire l'article</button>
            </div>
        </div>
    </div>
    
    <div class="article">
        <div class="bg-article bg-article2 bg-white">
            <div class="text py-5 text2">
                <h1><?php echo($article['title']) ;?></h1>
                <p><?php echo($article['date']) ;?> | <?php echo($article['category']) ;?></p>
                <div class="row">
                    <img class="img-article col-6 w-50 h-50"src="public\img\fouleCGT.jpg" alt="">
                    <p class="col-6">
                        <?php echo($article['text']) ;?>    
                    </p>
                </div>
                <button class="col-12 mt-5">Lire l'article</button>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>
