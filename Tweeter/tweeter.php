<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="hash/index.php">Inscprition</a>
        <a href="inserer/index.php">Comment allez vous aujourd'hui?</a>
        <form action="recherche/rechercher.php" method="GET">
        <input type="text" name="recherche" id="recherche">
        <input type="submit" value="Rechercher...">
        </form>
    </nav>
    <?php
        require "hash/connexion.php";
        $requete=$database->prepare('SELECT * FROM articles ORDER BY date DESC');
            $requete->execute();
        $articles=$requete -> fetchAll(PDO::FETCH_ASSOC);
        $requete2=$database->prepare('SELECT * FROM users LIMIT 1');
            $requete2->execute();
        $users=$requete2 -> fetchAll(PDO::FETCH_ASSOC);
        foreach ($articles as $article) {
            ?>
            <div>
                <h2> <?php echo $users[0]['pseudo']; ?> </h2>
                <img src="<?php echo $users[0]['image']; ?>" alt="Soraka">
                <h2> <?php echo $article['title']; ?> </h2>
                <p> <?php echo $article ['content']; ?> </p>
                <span> <?php echo $article ['date']; ?> </span>
                <button><a href="supprimer/supprimer.php?id=<?php echo $article['id']; ?>">Supprimer</a></button>
            </div>
        <?php }
        ?>
</body>
</html>