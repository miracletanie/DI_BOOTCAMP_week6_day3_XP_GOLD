<?php
if (!empty($_GET)) {
    $number = $_GET["number"];
    function sum_of_digits($number)
    {
       
        $sum = 0;
        while ($number > 0) {
            $sum += $number % 10;
            $number = (int) ($number / 10);
        }
        return $sum;
    }


    echo "La somme des chiffres de $number est : " . sum_of_digits($number);
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
        <label for="">Entrer un nombre</label>
        <input type="number" name="number">
        <input type="submit">
    </form>
    </body>
</html>