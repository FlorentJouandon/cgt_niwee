<?php 
namespace Views;
    use Traits\Router;


$route = Router::parseURL();
$entrer = false;

if($route !== 'admin'):
    if(!isset($_SESSION['entrer'])):
    ;?>
        <div class="container-fluid text-center p-5">
            <h1>Bienvenue sur le site de</h1>
            <img src="public\img\logo\logo-confederation-cgt-france.svg" alt="logo de la CGT">
            <form action="Accueil" method="POST">
                <input type="submit" value="Entrez" name="entrer" id="entrer">
            </form>
        </div>
       
    <?php 
        $entrer === true;
        $_SESSION['entrer'] = $entrer;

    elseif(isset($_COOKIE['media'])&& $_COOKIE['media'] === 'mobile'):  
        Router::index(MOB);

    else:
        Router::index(DESK);

    endif ;
endif;
?>