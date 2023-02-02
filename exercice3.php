<?php

if (!empty($_GET)) {

    $celsius = $_GET["celsius"];
    function celsiusToFahrenheit($celsius)
    {
        return $celsius * 9 / 5 + 32;
    }

    function celsiusToKelvin($celsius)
    {
        return $celsius + 273.15;
    }

   

    $fahrenheit = celsiusToFahrenheit($celsius);
    $kelvin = celsiusToKelvin($celsius);

    echo $celsius°C = $fahrenheit . "°F <br>";
    echo $celsius°C = $kelvin . " K";

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
      <form>
        <label for="">Entrer celsius</label><br>
        <input type="number" name="celsius" >
        <input type="submit">
      </form>
    </body>
</html>
