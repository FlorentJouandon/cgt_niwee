<div class="container-fluid align-items-center">
<div class="container-fluid col-6 text-center py-5">
        <h1>Tous les articles</h1>
    </div>
    <hr class="mb-5">
    <table>
        <thead>
            <tr class="container-fluid">
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
                foreach($articles as $article):?>
            <tr>
                <td><?php echo($article['title']) ;?></td>
                <td><?php echo(substr($article['text'],0,50)) ;?></td>
                <td><?php echo($article['idImg']) ;?></td>
                <td><?php echo($article['idFiles']) ;?></td>
                <td><?php echo($article['category']) ;?></td>   
                <td><?php echo($article['date']) ;?></td>   
            </tr>
            <?php endforeach ;?>
        </tbody>
    </table>
</div>