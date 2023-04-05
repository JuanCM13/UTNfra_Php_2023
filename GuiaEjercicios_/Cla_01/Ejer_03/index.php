<?php

/*
    Aplicación No 3 (Obtener el valor del medio)
    Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
    el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
    variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido. Ejemplo 1: $a
    = 6; $b = 9; $c = 8; => se muestra 8.
    Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”
*/

/*
1   5   3     el 3 es del medio
5   1   5   no hay numero del medio
3  5   1     el 3 es del medio
3   1   5    el 3 es del medio
5   3   1    el 3 es del medio
1  5  1    no hay numero del medio
*/
    $a = 1;
    $b = 5;
    $c = 1;

    if(($a > $b && $a < $c) || ($a > $c && $a < $b))
    {
        echo "El valor intermedio es el numero: ",$a;
    }
    else
    {
        if(($b > $a && $b < $c) || ($b > $c && $b < $a))
        {
            echo "El valor intermedio es el numero: ",$b;
        }
        else
        {
            if(($c > $a && $c < $b) || ($c > $b && $c < $a))
            {
                echo "El valor intermedio es el numero: ",$c;
            }
            else
            {
                echo "No hay valor del medio.";
            }
        }
    }
?>