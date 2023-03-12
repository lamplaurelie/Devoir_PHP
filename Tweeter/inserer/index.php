<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inserer.php" method="POST">
        <label for="title">Titre : </label>
        <input type="text" name="title" id="title">

        <label for="content">Contenu : </label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>