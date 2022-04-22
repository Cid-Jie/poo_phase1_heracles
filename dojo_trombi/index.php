<?php

    $members = [
        [
            "firstname" => "Kathleen",
            "lastname" => "Morton",
            "email" => "vitae.nibh@icloud.net",
            "age" => "67",
            "gender" => "man",
            "pictureNumber" => "38"
        ],
        [
            "firstname" => "Arthur",
            "lastname" => "House",
            "email" => "ac.eleifend@hotmail.net",
            "age" => "69",
            "gender" => "man",
            "pictureNumber" => "53"
        ],
        [
            "firstname" => "Zahir",
            "lastname" => "Ray",
            "email" => "rutrum@google.edu",
            "age" => "39",
            "gender" => "woman",
            "pictureNumber" => "47"
        ],
        [
            "firstname" => "Wylie",
            "lastname" => "Cain",
            "email" => "consequat.dolor.vitae@hotmail.edu",
            "age" => "60",
            "gender" => "woman",
            "pictureNumber" => "35"
        ],
        [
            "firstname" => "Hop",
            "lastname" => "Howard",
            "email" => "eu.eleifend@yahoo.ca",
            "age" => "21",
            "gender" => "woman",
            "pictureNumber" => "18"
        ],
        [
            "firstname" => "Fritz",
            "lastname" => "Fernandez",
            "email" => "varius.orci.in@aol.edu",
            "age" => "46",
            "gender" => "woman",
            "pictureNumber" => "65"
        ],
        [
            "firstname" => "Emmanuel",
            "lastname" => "Savage",
            "email" => "tristique.aliquet@icloud.edu",
            "age" => "60",
            "gender" => "woman",
            "pictureNumber" => "13"
        ],
        [
            "firstname" => "Sierra",
            "lastname" => "Bolton",
            "email" => "aliquam.adipiscing@aol.net",
            "age" => "39",
            "gender" => "man",
            "pictureNumber" => "45"
        ],
        [
            "firstname" => "Leandra",
            "lastname" => "Hoover",
            "email" => "tristique@icloud.couk",
            "age" => "34",
            "gender" => "woman",
            "pictureNumber" => "27"
        ],
        [
            "firstname" => "Noelani",
            "lastname" => "Scott",
            "email" => "adipiscing.mauris.molestie@hotmail.org",
            "age" => "44",
            "gender" => "man",
            "pictureNumber" => "40"
        ],
        [
            "firstname" => "Ginger",
            "lastname" => "Ayala",
            "email" => "magna@icloud.edu",
            "age" => "50",
            "gender" => "woman",
            "pictureNumber" => "70"
        ],
        [
            "firstname" => "Grady",
            "lastname" => "Owens",
            "email" => "feugiat.lorem.ipsum@outlook.ca",
            "age" => "68",
            "gender" => "woman",
            "pictureNumber" => "69"
        ],
        [
            "firstname" => "Galena",
            "lastname" => "Riddle",
            "email" => "cursus@icloud.org",
            "age" => "29",
            "gender" => "woman",
            "pictureNumber" => "65"
        ],
        [
            "firstname" => "Maisie",
            "lastname" => "Solomon",
            "email" => "ut.tincidunt.orci@icloud.net",
            "age" => "52",
            "gender" => "woman",
            "pictureNumber" => "51"
        ],
        [
            "firstname" => "Sigourney",
            "lastname" => "Dale",
            "email" => "malesuada@google.couk",
            "age" => "36",
            "gender" => "woman",
            "pictureNumber" => "42"
        ],
    ];


    $filter = 'all';
    if(isset($_GET['filter'])) {
        $filter = $_GET['filter'];
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trombinoscope</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Trombinoscope</h1>

    <form>
        <h2>Filtres</h2>
        <input type="radio" name="filter" id="all_filter" value="all"><label for="all_filter">Tous</label>
        <input type="radio" name="filter" id="women_filter" value="women"><label for="women_filter">Femmes</label>
        <input type="radio" name="filter" id="men_filter" value="men"><label for="men_filter">Hommes</label>
        <input type="submit" value="Filter">
    </form>

    <main class="container">

        <?php

        foreach($members as $member) { 

            if($filter != 'all') {
                if($filter == 'men' && $member['gender'] == 'woman')
                    continue;

                if($filter == 'women' && $member['gender'] == 'man')
                    continue;
            }

        ?>

        <div class="card">
            <h3><?= $member['firstname'] . ' ' . $member['lastname'] ?></h3>
            <p>
                <img src="https://i.pravatar.cc/150?img=<?= $member['pictureNumber'] ?>">
            </p>
            <ul>
                <li>Age : <?= $member['age'] ?></li>
                <li>Email :  <?= $member['email'] ?></li>
            </ul>
        </div>

        <?php
        }
        ?>

    </main>
    
</body>
</html>