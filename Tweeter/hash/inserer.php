<?php
    require_once 'connexion.php';

    if ($_POST['pseudo'] != '' && $_POST['password'] != '' && $_POST['image'] != ''){
        $data = [
            'pseudo' => $_POST['pseudo'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'image' => $_POST['image']
        ];

        $requete = $database->prepare('INSERT INTO users (pseudo, password, image) VALUES (:pseudo, :password, :image)');
        $requete->execute($data);

        if($requete) {
            header('Location: ../tweeter.php');
        } else {
            echo 'Une erreur est survenue' ;
        }


        var_dump($data);
    } else {
        echo 'Veuillez remplir tous les champs';
    }
?>