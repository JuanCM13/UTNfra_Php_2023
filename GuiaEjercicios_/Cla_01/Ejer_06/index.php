<?php

/*
    Aplicación No 6 (Carga aleatoria)
    Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
    función rand). Mediante una estructura condicional, determinar si el promedio de los números
    son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
    resultado.
*/

    $tamArr = 5;
    $arr = array();
    $acum = 0;
    $prom;
    $stringResult = "El promedio de los numeros fue: ";

    for($i=0; $i<$tamArr; $i++)
    {
        $arr[$i] = rand(1,10);
        $acum += $arr[$i];
    }

    $prom = $acum/$tamArr;
    $stringResult .= ($prom>6?"Mayor":($prom < 6?"Menor":"Igual"));

    echo "Data del array: ";
    var_dump($arr);
    echo "<br><br>";
    echo ($stringResult .= " a 6..");
?>