<?php

class ManagerArticle{
    public function getOne(int $articleId){
        require('Assets/Data/ArticlesArray.php');
        $articleTitre = $Articles[$articleId]['titre'];
        $articleDateDePublication = $Articles[$articleId]['date de publication'];
        $articleDateDeModification= $Articles[$articleId]['date de modification'];
        $articleAuteur = $Articles[$articleId]['auteur'];
        $articleStatus = $Articles[$articleId]['status'];
        $articlePartages = $Articles[$articleId]['partages'];
        require('Model/Article.php');
        $article = new Article($articleTitre,$articleDateDePublication,$articleDateDeModification,$articleAuteur,$articleStatus,$articlePartages);
        return  $article;
    }
    public function getAll(){
        $articlesList = [];
        require('Assets/Data/ArticlesArray.php');
        require('Model/Article.php');
        foreach ($Articles as $articleId => $article) {
            $articlesList[$articleId] = new Article($article['titre'],$article['date de publication'],$article['date de modification'],$article['auteur'],$article['status'],$article['partages']);
        } return $articlesList;
        
    }

}