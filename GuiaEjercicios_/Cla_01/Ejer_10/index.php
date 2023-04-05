<?php

/*
    Aplicación No 10 (Arrays de Arrays)
    Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
    contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
    Arrays de Arrays.
*/
    //Si ya se, este lo copypaste del anterior, pero le reemplace la logica para mostrar
        // pasa que lo habia planteado asi de una, despues lei el 10 y vi que era esto..

    $lapiceras = array(
        "Lapicera 1" => $el1 = array("color"=>"Rojo","marca"=>"Bic","trazo"=>"Fino","precio"=>150),
        "Lapicera 2" => $el1 = array("color"=>"Verde","marca"=>"Pepe","trazo"=>"Grueso","precio"=>500),
        "Lapicera 3" => $el1 = array("color"=>"Azul","marca"=>"Pepito","trazo"=>"Medio","precio"=>600)
    );

    echo "Array asociativo: <br><br>";
    foreach($lapiceras as $key=>$itemLapicera)
    {
        echo "---------------------------------------------------------------<br>";
        echo "Lapicera: ".$key."<br>";
        mostrarLapicera($itemLapicera);
        echo "---------------------------------------------------------------<br>";
        echo "<br>";
    }


    //Array indexado:
    $lapicerasIndexadas = array(
        $lapiceras["Lapicera 1"],
        $lapiceras["Lapicera 2"],
        $lapiceras["Lapicera 3"]
    );

    echo "Array indexado: <br><br>";
    for($i=0;$i<count($lapicerasIndexadas);$i++)
    {
        echo "---------------------------------------------------------------<br>";
        echo "Lapicera numero: ".($i+1)."<br>";
        mostrarLapicera($lapicerasIndexadas[$i]);
        echo "---------------------------------------------------------------<br>";
        echo "<br>";
    }


    function mostrarLapicera($lapicera)
    {
        foreach($lapicera as $key=>$data)
        {
            echo $key.": ".$data."<br>";
        }
    }
?>