<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> <?=$myAticle->getTitre()?> </title>
</head>
<body class="container">
    <div class="mt-2 ">
        <a href="index.php" class="btn btn-dark">Retour à l'accueil</a>
        <a href="?action=articles" class="btn btn-dark">Retour aux articles</a>
    </div>
<?php
    if($myAticle->getStatus() == 'Article Inactif'){
        echo 'Article Inactif';
    }else {
        echo '<br>';
        echo 'Titre : ';
        echo $myAticle->getTitre()?:'Pas de titre';
        echo '<br>';
        echo 'Date de publication : ';
        echo $myAticle->getDateDePublication()?:'Pas de date de publication';
        echo '<br>';
        echo 'Date de modification : ';
        echo $myAticle->getDateDeModification()?:'Pas de date de modification';
        echo '<br>';
        echo 'Auteur : ';
        echo $myAticle->getAuteur()?:'Pas de date d\'auteur';
        echo '<br>';
        if($myAticle->getPartages()>1){
            echo $myAticle->getPartages().' partages';
        } elseif($myAticle->getPartages()<1){
            echo $myAticle->getPartages().' partage';
        }else{
            echo 'Pas de date de partage';
        }
    }


    

    
    ?>
    
</body>
</html>