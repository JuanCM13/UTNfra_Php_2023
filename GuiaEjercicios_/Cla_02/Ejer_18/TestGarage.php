<?php
include_once "Garage.php";

    $garage = new Garage("Garagecito",140);
    $autoA = new Auto("Rojo","VW");
    $autoC = new Auto("Rojo","Audi",15000.5);
    $autoE = new Auto("Rojo","Audi",13000.2,new DateTime("2020-10-05"));

    if($garage->_Add($autoA))
    {
        echo "El auto A se agrego al garage<br>";
    }
    else
    {
        echo "El auto A NO se agrego al garage<br>";
    }

    if($garage->_Add($autoC))
    {
        echo "El auto C se agrego al garage<br>";
    }
    else
    {
        echo "El auto C NO se agrego al garage<br>";
    }

    if($garage->_Add($autoE))
    {
        echo "El auto E se agrego al garage<br>";
    }
    else
    {
        echo "El auto E NO se agrego al garage<br>";
    }

    echo "<br><br>Vehiculos del garage: ".$garage->_MostrarGarage();
    echo "<br><br><br>";
?>