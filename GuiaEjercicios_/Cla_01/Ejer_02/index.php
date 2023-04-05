<?php

    //Ejer 02
    /*
    Aplicación No 2 (Mostrar fecha y estación)
    Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
    distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
    año es. Utilizar una estructura selectiva múltiple.*/

    date_default_timezone_set("UTC");
    $verano = (new DateTime("December 21"))->format("Y-m-d");
    $otoño = (new DateTime("March 21"))->format("Y-m-d");
    $invierno = (new DateTime("June 21"))->format("Y-m-d");
    $primavera = (new DateTime("September 21"))->format("Y-m-d");
    $date = date("Y-m-d");
    $temporada;

    if($date >= $verano && $date <= $otoño)
    {
        $temporada = "Verano";
    }
    else
    {
        if($date >= $otoño && $date <= $invierno)
        {
            $temporada = "Otoño";
        }
        else
        {
            if($date >= $invierno && $date <= $primavera)
            {
                $temporada = "Invierno";
            }
            else
            {
                $temporada = "Primavera";
            }
        }
    }

    echo "Fecha actual: <br>";
    echo date("l jS \of F Y h:i:s A");
    echo "<br><br>";
    echo "La temporada actual es: ",$temporada;

?>