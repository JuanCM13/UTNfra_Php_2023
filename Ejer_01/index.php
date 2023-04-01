<?php

    $suma = 0;
    $finBucle = 1000;
    $contSumas = 0;
    $num = 1;

    while($suma < $finBucle+1)
    {
        if(($suma + $num) >= $finBucle)
        {            
            break;
        }

        if($num % 2 == 0)
        {
            echo "Se sumo el numero: ",$num;
            echo "<br>";
            $suma += $num;
            $contSumas++;
        }
        $num++;
    }

    echo "<br>La cantidad de numeros sumados fue: ",$contSumas;
    echo "<br>Se sumo hasta el numero: ",$suma;

?>