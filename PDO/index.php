<?php

require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);

require_once 'create.php';
$query = "SELECT * FROM story;";
$statement = $pdo->query($query);//envoi la requete en base de données
$stories = $statement->fetchAll();//recuperer un tableau avec toutes les histoires de la table

/*foreach($stories as $story){
    echo '<li>'.$story['title'].' . Ecrit par : '.$story['author'].'. Voici un résumé :'.$story['content'].'.</li></br>';
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histoires</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

    <main class="container">
        <h1 class="text-center">Les histoires</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Auteur</th>
                    <th>Lien</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($stories as $story) {
                ?>
                <tr>
                    <td><?= $story['title'] ?></td>
                    <td class="text-truncate"><?= substr($story['content'], 0, 50) ?>...</td>
                    <td><?= $story['author'] ?></td>
                    <td><a href="edit.php?id=<?= $story['id'] ?>">Modifier</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </main>
    
</body>
</html>
