<?php

/*
    Aplicación No 9 (Arrays asociativos)
    Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
    contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
    lapiceras.
*/


    $lapiceras = array(
        "Lapicera 1" => $el1 = array("color"=>"Rojo","marca"=>"Bic","trazo"=>"Fino","precio"=>150),
        "Lapicera 2" => $el1 = array("color"=>"Verde","marca"=>"Pepe","trazo"=>"Grueso","precio"=>500),
        "Lapicera 3" => $el1 = array("color"=>"Azul","marca"=>"Pepito","trazo"=>"Medio","precio"=>600)
    );

    foreach($lapiceras as $key=>$lapicera)
    {
        echo "---------------------------------------------------------------<br>";
        echo "Lapicera: ".$key."<br>";
        foreach($lapicera as $key=>$data)
        {
            echo $key.": ".$data."<br>";
        }
        echo "---------------------------------------------------------------<br>";
        echo "<br>";
    }
?>