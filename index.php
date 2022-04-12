<?php
declare(strict_types=1);

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'articles') {
        include('Controller/ControllerArticles.php');
    }else{
        include('View/View404.php');
    }
}
else {
    include('Controller/ControllerAccueil.php');
}
   ?> 
