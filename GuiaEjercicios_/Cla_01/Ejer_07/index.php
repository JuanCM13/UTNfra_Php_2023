<?php

/*
    Aplicación No 7 (Mostrar impares)
    Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
    Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
    salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
    utilizando las estructuras while y foreach.
*/
    //el nombre entre comillas, pero despues para referenciarlo dentro del codigo va sin $ ni comillas
    define("TamArr",10);

    $arr = array();
    $c = 1;
    $guia = 0;

    while(Count($arr) < TamArr)
    {
        if($c % 2 != 0)
        {
            array_push($arr,$c);
        }
        $c++;
    }

    echo "Impresion var_dump: <br>";
    var_dump($arr);

    echo "<br><br>";

    echo "Impresion for: <br>";
    for($i=0;$i<TamArr;$i++)
    {
        echo $arr[$i];
        echo "<br>";
    }

    echo "<br><br>";

    echo "Impresion foreach: <br>";
    foreach($arr as $data)
    {
        echo $data;
        echo "<br>";
    }

    echo "<br><br>";

    echo "Impresion while: <br>";
    while($guia < count($arr))
    {
        echo $arr[$guia];
        echo "<br>";
        $guia++;
    }
?>