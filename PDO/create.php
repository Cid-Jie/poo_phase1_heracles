<?php
/*function checkField(){
    return isset($_POST['title']) && !empty($_POST[$field]);
}*/

if(
    isset($_POST['title']) && 
    isset($_POST['content']) && 
    isset($_POST['author'])
){
    $data = array_map('trim', $_POST);

    $title = $data['title'];
    $content = $data['content'];
    $author = $data['author'];


    require_once 'connec.php';
    $pdo = new \PDO(DSN, USER, PASS);

    /*$data = array_map('trim', $_POST);

    $query = "INSERT INTO story (title, content, author) VALUES (:title, :content, :author)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $data['title'], \PDO::PARAM_STR);
    $statement->bindValue(':content', $data['content'], \PDO::PARAM_STR);
    $statement->bindValue(':author', $data['author'], \PDO::PARAM_STR);
    $statement->execute();*/

    $query = "INSERT INTO story (title, content, author) VALUES (:title, :content, :author)";
    $statement = $pdo->prepare($query);

    $statement->bindValue(':title', $title, \PDO::PARAM_STR);
    $statement->bindValue(':content', $content, \PDO::PARAM_STR);
    $statement->bindValue(':author', $author, \PDO::PARAM_STR);

    $statement->execute();

    header('Location: /');
    
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Workshop PDO</title>
</head>
<body>
    <h1 class="text-center">Connexion</h1>

        <form action="" method="POST" class="container bg-light">
            <p>
                <label for="title" class="form-label">Title : </label>
                <input type="text" name="title" id="title" class="form-control">
            </p>
            <p>
                <label for="content" class="form-label">Content : </label>
                <input type="text" name="content" id="content" class="form-control">
            </p>
            <p>
                <label for="author" class="form-label">Author : </label>
                <input type="text" name="author" id="author" class="form-control">
            </p>
            <p>
            <input type="submit" value="Créer" class="btn btn-primary btn-lg">
            </p>
        </form>

</body>
</html>
