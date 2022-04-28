<?php

require_once('src/Fighter.php');

// First Labour : Heracles vs Nemean Lion
// use your Figher class here

$heracles = new Fighter('😀Héraclès', 20, 13);
$lion = new Fighter('🦁Lion de Néméé', 20, 13);

var_dump($heracles);
var_dump($lion);

while($heracles->isAlive() && $lion->isAlive())
{
    $damage = $heracles->fight($lion);
    echo $heracles->getName() . " attaque " . $lion->getName() . " et lui fais perdre $damage points de vie. </br>";
    echo "Point de vie : " .$lion->getName() ." ". $lion->getLife() ."</br>";
        
            if($lion->isAlive())
            break;

    $damage = $lion->fight($heracles);
    echo $lion->getName() . " attaque " . $heracles->getName() . " et lui fais perdre $damage points de vie. </br>";
    echo "Point de vie : " .$heracles->getName() ." ". $heracles->getLife()."</br>";
}

if($lion->isAlive())
{
    echo $lion->getname() . " a gagné!";
}else{
    echo $heracles->getName() . " a gagné!";
}


