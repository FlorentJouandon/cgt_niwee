
<div id="article" class="container-fluid col-8">
<?php 
    $article = $_SESSION['articles'];
    for($i=0; $i<=4; $i+=2):
        if(isset($article[$i])):
?>
    <div class="article my-5">
        <div class="bg-article bg-white">
            <div class="text py-5">
                <h1><?php echo($article[$i]['title']) ;?></h1>
                <p class="text-warning"><?php echo($article[$i]['date']) ;?><span class="text-black"> | </span><?php echo($article[$i]['category']) ;?></p>
                <div class="row">
                    <p class="col-6">
                    <?php echo(substr($article[$i]['text'],0,400)) ;?>... 
                    </p>
                    <img class="img-article col-6 w-50 h-50" src="" alt="">
                </div>
                
                <button type="submit" name="article" class="col-12 mt-5">Lire l'article</button>
            </div>
        </div>
    </div>
<?php 
        endif;
        if(isset($article[$i+1])):
?>
    <div class="article">
        <div class="bg-article bg-article2 bg-white">
            <div class="text py-5 text2">
                <h1><?php echo($article[$i+1]['title']) ;?></h1>
                <p class="text-warning"><?php echo($article[$i+1]['date']) ;?><span class="text-black"> | </span><?php echo($article[$i+1]['category']) ;?></p>
                <div class="row">
                    <img class="img-article col-6 w-50 h-50"src="" alt="">
                    <p class="col-6">
                        <?php echo(substr($article[$i+1]['text'],0,400)) ;?>...    
                    </p>
                </div>
                <button type="submit" name="article" class="col-12 mt-5">Lire l'article</button>
            </div>
        </div>
    </div>
<?php   
        endif;
    endfor;
?>
</div>
