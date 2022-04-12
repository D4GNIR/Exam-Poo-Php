<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tous les articles - Articles.com</title>
</head>
<body class="container">
    <div class="d-flex justify-content-between mt-2 ">
        <h1>Tous les articles</h1>
        <a href="index.php" class="btn btn-dark">Retour à l'accueil</a>
    </div>
    <h3><?php Article::getCount()?></h3>
    <div>
        <!-- J'affiche toutes les musiques dans une liste -->
        <?php foreach ($myArticles as $id => $ArticleObject) : ?>
         
            <?php
            if($ArticleObject->getStatus() == 'Article Inactif'){

            }else{
                ?>
                <div>
                    <a class="btn btn-success m-2" href="?action=articles&id=<?=$id?>"><i class="fa-brands fa-readme"></i> <?=$ArticleObject->getTitre()?></a>
                </div> 
            <?php
            }
            ?>
        <?php endforeach; ?>
        </div>

    
</body>
</html>