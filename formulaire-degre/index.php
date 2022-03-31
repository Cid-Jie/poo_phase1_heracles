<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire degré</title>
</head>
<body>

<form action="calcul.php" method="POST">
    <p>
        <label for="temp"> Choose a temperature :</label>
        <input type="number" step="any" id="temp" name="user_temp" min="0" max="900" required>
    </p>
    <p> 
        <input type="radio" id="kelvin" name="user_temp_kel">
        <label for="kelvin">kelvin</label>

        <input type="radio" id="fahrenheit" name="user_temp_far">
        <label for="fahrenheit">fahrenheit</label>
    </p>
    
    <p>
        <button type="submit">Send </button>
    </p>

</form>
    
</body>
</html>