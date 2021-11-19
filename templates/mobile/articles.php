<div id="articles" class="container-fluid col-10 p-3 mb-3">
    <div class="mt-2"></div>
<?php 
    $article = $_SESSION['articles'];
    for($i=0; $i<=4; $i+=2):
        if(isset($article[$i])):
?>
    <form action="article" method="POST">
        <div id="article" class="my-0">
            <div class="bg-article bg-white px-1">
                <div class="article p-5 pt-3">
                    <h1><?php echo($article[$i]['title']) ;?></h1>
                    <h6 class="text-warning"><?php echo($article[$i]['date']) ;?><span class="text-black"> | </span><?php echo($article[$i]['category']) ;?></h6>
                    <p><?php echo(substr($article[$i]['text'],0,100)) ;?>...</p>
                    <?php $_SESSION['article'] = $article[$i];
                        // var_dump($_SESSION['article'])
                    ;?>
                    <button type="submit" name="article" class="p col-12">Lire l'article</button>
                </div>
            </div>
        </div>
    </form>
<?php 
        endif;
        if(isset($article[$i+1])):
?>
    <form action="article" method="POST">
        <div id="article-2" class="my-0">
            <div class="bg-article-2 bg-white px-1">
                <div class="article-2 p-5 pt-3">
                    <h1><?php echo($article[$i+1]['title']) ;?></h1>
                    <h6 class="text-warning"><?php echo($article[$i+1]['date']) ;?><span class="text-black"> | </span><?php echo($article[$i+1]['category']) ;?></h6>
                    <p><?php echo(substr($article[$i+1]['text'],0,100)) ;?>...</p>
                    <?php $_SESSION['article'] = $article[$i];?>
                    <button type="submit" name="article" class="p col-12">Lire l'article</button>
                </div>
            </div>
        </div>
    </form>
    <?php   
        endif;
    endfor;
?>
</div>