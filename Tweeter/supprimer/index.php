<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'connexion.php';

        $requete = $database->prepare('SELECT * FROM article ORDER BY date DESC');
        $requete->execute();

        $articles = $requete->fetchALL(PDO::FETCH_ASSOC);

        foreach($articles as $article) { ?>
            <div>
                <h2><?php echo $article['title'];?></h2>
                <p><?php echo $article['content'];?></p>
                <span><?php echo $article['date'];?></span>
                <a href="supprimer.php?id=<?php echo $article['id']; ?>">Supprimer</a>
            </div>

        <?php
        }
    ?>
</body>
</html>