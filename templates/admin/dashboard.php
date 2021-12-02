<?php 
namespace Views;
    use Traits\Router; 

$folder = "admin";
?>

<div id="dashboard" class="container-fluid text-center">
    <div class="dashboard">
        <h2 class="my-3">Bienvenue</h2>
        <img id="person" class="p-1 mt-2" src="public/img/icons/person.svg" alt="personne">
        <p class="mt-3 mb-2">Florent</p>
        <p>Jouandon</p>
        <hr>
    </div>
    <form action="" method="POST">
        <input type="button" id="select" class="container-fluid py-2" value="Voir tous les articles">
        <input type="button" id="create" class="container-fluid py-2" value="Ajouter un article">
    </form>
</div>

<div class="select">
    <?php Router::template($folder, 'select'); ?>   
</div>

<div class="create">
    <?php Router::template($folder, 'create'); ?>   
</div>

<div class="update">
    <?php Router::template($folder, 'update'); ?>   
</div>
