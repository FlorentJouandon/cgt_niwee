<div class="container-fluid text-center mb-5">
    <div class="container-fluid col-6 py-5">
        <h1>Tous les articles</h1>
    </div>
    <hr class="mb-5">
    <div id="table " class="container col-10 bg-white p-5 shadow">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Texte</th>
                    <th>Image</th>
                    <th>Document</th>
                    <th>Categorie</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php $articles = $_SESSION['articles'];
                    foreach($articles as $i=>$article):?>
                <tr>
                    <td><?php echo($article['id']) ;?></td>
                    <td><?php echo($article['title']) ;?></td>
                    <td><?php echo(substr($article['text'],0,50)) ;?></td>
                    <td><?php echo($article['idImg']) ;?></td>
                    <td><?php echo($article['idFiles']) ;?></td>
                    <td><?php echo($article['category']) ;?></td>   
                    <td><?php echo($article['date']) ;?></td> 
                    <?php $_SESSION['article'] = $article ;?>
                    <td><input class="container-fluid bg-white text-primary" type="submit" value="Modifier" id="update" name="article[]"></td> 
                    <td><input class="container-fluid bg-white" type="submit" value="Supprimer" id="delete"></td>  
                </tr>
                <?php endforeach ;?>
            </tbody>
        </table>
    </div>
</div>
