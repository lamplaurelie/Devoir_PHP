<?php
REQUIRE_once 'connexion.php';

if ($_GET['recherche']) {
    $data = [
        'recherche' => $_GET['recherche']
    ];
    $requete = $database->prepare("SELECT * FROM articles WHERE content LIKE CONCAT('%', :recherche, '%')");
    $requete->execute($data);

    $articles = $requete->fetchAll(PDO::FETCH_ASSOC);

    foreach($articles as $article) { ?>
        <div>
            <h2><?php echo $article['title']; ?></h2>
            <p><?php echo $article['content']; ?></p>
            <p><?php echo $article['date']; ?></p>
        </div>
        <hr>
    <?php
    }
}
    ?>
