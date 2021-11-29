<?php 
namespace Views;
    use Traits\Router;


$route = Router::parseURL();
$entrer = false;

if($route !== 'Admin'):
    if(!isset($_SESSION['entrer'])):
    ;?>
        <div class="container-fluid text-center p-5">
            <h1>Bienvenue sur le site de la CGT</h1>
            <form action="Accueil" method="POST">
                <input type="submit" value="Entrez" name="entrer" id="entrer">
            </form>
        </div>
    <?php 
        $entrer === true;
        $_SESSION['entrer'] = $entrer;
    else:
        Router::template(DESK,'index');

    endif ;
else:
    Router::index('admin');
endif;
?>