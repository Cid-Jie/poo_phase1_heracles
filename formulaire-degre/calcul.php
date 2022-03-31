<?php

$data = array_map("trim", $_POST);

$temperature = $data['user_temp'];

if(filter_var($temperature, FILTER_VALIDATE_INT) == false) {
    echo "Warning the temperature must be a number ! ";
    die();
}

if($temperature < 0){
    echo "Warning the temperature must be sup to  !  ";
    die();
}

$celsius = $temperature - 273.15;









/*if ($_POST['user_temp_kel'])
{
    $celsius = ($_POST['user_temp'] - 273.1);
}
if ($_POST['user_temp_far'])
{
    $celsius = ($_POST['user_temp'] - 32 * 5/9 );
}
    

echo 'The temperature in celsius is '.$celsius. '°.';*/

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <cite> de Kelvin en Celsius</cite>
        <h2> <?= $celsius; ?> °C</h2>

    </div>

</body>
</html>
