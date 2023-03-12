<?php
    try {
        $database = new PDO('mysql:host=localhost;dbname=coursphp','root','');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

?>