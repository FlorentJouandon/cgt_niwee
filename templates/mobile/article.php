<?php $article = $_SESSION['article'] ;;?>
<div class="py-5">
    <div class="bg-white">
        <div class="text-center py-4">
            <h1><?php echo $article['title'] ;?></h1>
            <h6 class="text-warning"><?php echo($article['date']) ;?><span class="text-black"> | </span><?php echo($article['category']) ;?></h6>
            <div class="row">
                <p class="col-12 px-5">
                <?php echo $article['text'] ;?> 
                </p>
                <img class="img-article col-6 w-50 h-50"src="public\img\fouleCGT.jpg" alt="">
            </div>
        </div>
    </div>
</div>