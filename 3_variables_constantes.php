<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Variables y Consntantes en PHP</title>
</head>
<body>
    <h1>Variables y constantes en Php</h1>
    <?
    //Las variables se representan enteponiendo el simbolo $ a la palabra que use como variable.
    //PHP es sensitive case.
    //Las variables no pueden empezar con un numero. 
    //No es necesario en PHP especificar el tipo de variable, pero si se debe saber cuando utilizar las comillas,para el caso de variables de tipo cadena o string.

    //Asignamos a la variable a el valor 5
    $a= 5;

    //Asignamos a la variable b el valor de 7 como cadena.
    $b="7";

    echo"<h2>Variable</h2>";

    //Mostrar el valor de la variable a 
    echo($a);

    echo"<br>";

    //Mostrar el valor de la variable b
    echo($b);

    echo"<br>";

    echo"<h2>Constantes</h2>";

    /*El valor de una constante no cambia o se mantiene fijo durante la ejecucion de una pagina.*/
    /*La forma de deifinir las constantes en PHP, es mediante el uso de la instruccion define.*/

    ?>

</body>
</html>