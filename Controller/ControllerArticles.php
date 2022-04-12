<?php
declare(strict_types=1);

require('Assets/Data/ArticlesArray.php');
$countArray = count($Articles);

if($_GET['action'] == 'articles'){
    if (!empty($_GET['id']) && $_GET['id'] > 0 && $_GET['id'] <= $countArray){
        $id = intval($_GET['id']);
    //J'utilise le fichier du manager
        require('Model/ManagerArticle.php');
        //J'instancie un nouveau Manager
        $myManager = new ManagerArticle();
        //Je stocke la valeur de ma musique et je vais chercher le nom de ma musique grace a la methode get
        $myAticle = $myManager->getOne($id);
        include('View/ViewOneArticle.php');
    } elseif(empty($_GET)){
        include('View/View404.php');
    }else {
        require('Model/ManagerArticle.php');
        //J'instancie un nouveau Manager
        $myManager = new ManagerArticle();
        $myArticles = $myManager->getAll();
        require('View/ViewAllArticles.php');
    }
}