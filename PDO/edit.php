<?php

if(!isset($_GET['id'])) die('Un id est nécessaire à l\'édition.');
    $id = $_GET['id'];

require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);

    if(
        isset($_POST['title']) && 
        isset($_POST['content']) && 
        isset($_POST['author'])
    ){
        $data = array_map('trim', $_POST);
    
        $title = $data['title'];
        $content = $data['content'];
        $author = $data['author'];
    
    $query = "UPDATE story SET title = :title, content = :content, author = :author WHERE id = :id";
    $statement = $pdo->prepare($query);
    
    $statement->bindValue(':title', $title, PDO::PARAM_STR);
    $statement->bindValue(':content', $content, PDO::PARAM_STR);
    $statement->bindValue(':author', $author, PDO::PARAM_STR);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);

    $statement->execute();

    header('Location: /');
    die();
    }

    $query = "SELECT * FROM story WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $story = $statement->fetchAll()[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'une histoire</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

    <main class="container">
        <h1 class="text-center">Nouvelle histoire</h1>

        <form method="POST" class="bg-light rounded border border-4 mt-5 p-3">
            <p>
                <label for="title" class="form-label fs-4" >Titre : </label>
                <input type="text" name="title" id="title" class="form-control" value="<?= $story['title'] ?>">
            </p>

            <p>
                <label for="content" class="form-label fs-4">Histoire : </label>
                <textarea name="content" id="content" class="form-control"><?= $story['content'] ?></textarea>
            </p>

            <p>
                <label for="author" class="form-label fs-4">Auteur : </label>
                <input type="text" name="author" id="author" class="form-control" value="<?= $story['author'] ?>">
            </p>

            <p class="text-center">
                <input type="submit" value="Créer" class="btn btn-primary btn-lg">
            </p>
        </form>

    </main>  
</body>
</html>

