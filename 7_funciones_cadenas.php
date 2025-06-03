<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuinciones para manipular cadenas</title>
</head>
<body>
    <h1>funciones para manipular cadenas</h1>

    <h2>función substr()</h2>
    
    <?php
        $texto = "Hola Mundo";

        $subcadena = substr($texto, 5, 5); // Extrae desde posición 5, 5 caracteres

        echo $subcadena; // Resultado: Mundo
    ?>


    <h2>función ord()</h2>

    <?php
        $letra = "A";
        $ascii = ord($letra);
        echo $ascii; // Resultado: 65
    ?>


    <h2>función printf()</h2>

    <?php
        $nombre = "Ana";
        $edad = 25;
        printf("Hola, mi nombre es %s y tengo %d años.", $nombre, $edad);
    ?>


    <h2>función strtolower()</h2>

    <?php
        $texto = "HOLA MUNDO";
        echo strtolower($texto); // Resultado: hola mundo
    ?>


    <h2>función strtoupper()</h2>

    <?php
        $texto = "hola mundo";
        echo strtoupper($texto); // Resultado: HOLA MUNDO
    ?>


    <h2>función ereg()</h2>

    <h2>función eregi()</h2>
</body>
</html>