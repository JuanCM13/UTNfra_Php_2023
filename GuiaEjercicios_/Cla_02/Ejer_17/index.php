<?php

/* MENDEZ JUAN CRUZ - 3C
    Aplicación No 17 (Auto)
    Realizar una clase llamada “Auto” que posea los siguientes atributos

    privados: _color (String)
    _precio (Double)
    _marca (String).
    _fecha (DateTime)

    Realizar un constructor capaz de poder instanciar objetos pasándole como

    parámetros: i. La marca y el color.
    ii. La marca, color y el precio.
    iii. La marca, color, precio y fecha.

    Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble
    por parámetro y que se sumará al precio del objeto.
    Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
    por parámetro y que mostrará todos los atributos de dicho objeto.
    Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
    devolverá TRUE si ambos “Autos” son de la misma marca.
    Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
    de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
    la suma de los precios o cero si no se pudo realizar la operación.
    Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
*/

include "Auto.php";

/*
En testAuto.php:
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.

● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,
5)
*/

$autoA = new Auto("Rojo","VW");
$autoB = new Auto("Azul","VW");
$autoC = new Auto("Rojo","Audi",15000.5);
$autoD = new Auto("Rojo","Audi",13000.3);
$autoE = new Auto("Rojo","Audi",13000.2,new DateTime("2020-10-05"));

if($autoC->_AgregarImpuestos(1500))
{
    echo "Auto A ahora tiene: ".$autoC->_GetPrecio()."<br>";
}
else
{
    echo "No pudo sumarse al auto A<br>";
}

if($autoD->_AgregarImpuestos(1500))
{
    echo "Auto D ahora tiene: ".$autoD->_GetPrecio()."<br>";
}
else
{
    echo "No pudo sumarse al auto D<br>";
}

if($autoE->_AgregarImpuestos(1500))
{
    echo "Auto E ahora tiene: ".$autoE->_GetPrecio()."<br>";
}
else
{
    echo "No pudo sumarse al auto E<br>";
}

$ret = Auto::_Add($autoC,$autoD);
echo "El resultado del auto C: ".$autoC->_GetPrecio()." y el auto D: ".$autoD->_GetPrecio()." da: ".$ret;

if($autoA->_Equals($autoB))
{
    echo "<br>Los autos a y b son iguales";
}
else
{
    echo "<br>Los autos a y b son distintos";
}

if($autoA->_Equals($autoE))
{
    echo "<br>Los autos A y E son iguales";
}
else
{
    echo "<br>Los autos A y E son distintos";
}

/*
echo Auto::_MostrarAuto($autoA);
if($autoA->_Equals($autoB))
{
    echo "<br>Los autos a y b son iguales";
}
else
{
    echo "<br>Los autos a y b son distintos";
}

if($autoC->_Equals($autoD))
{
    echo "<br>Los autos C y D son iguales";
}
else
{
    echo "<br>Los autos C y D son distintos";
}

$ret = Auto::_Add($autoA,$autoB); 
echo "<br>El resultado de la suma de A y B fue: ".$ret;

$ret = Auto::_Add($autoC,$autoD); 
echo "<br>El resultado de la suma de C y D fue: ".$ret;*/

?>