<?php

    require_once 'connexion.php';

    if ($_POST['title']!= '' && $_POST['content'] != '') 
    {
        $data = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'date' => date('Y-m-d H:i:s')
        ];

        $requete = $database->prepare('INSERT INTO articles (title, content, date) VALUES (:title, :content, :date)');
        $requete->execute($data);

    if ($requete) {
            header('Location: ../tweeter.php');
        
        } else {
            echo 'tu casses les corones appliques toi';
        }

    } else {
        echo 'remplissez tous les trous... CHAMPS';
    }

?>