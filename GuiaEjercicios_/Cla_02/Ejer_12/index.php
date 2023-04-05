
<?php
/*MENDEZ JUAN CRUZ, 3C
    Aplicación No 12 (Invertir palabra)
    Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
    de las letras del Array.
    Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
*/

$arrayArevertir = array('H','O','L','A');
//$ret = RevertirPalabra(null);
//$ret = RevertirPalabra(array());
if(is_string($ret))
{
    echo $ret;
}
else
{
    if(!is_null($ret))
    {
        foreach($ret as $char)
        {
            echo $char;
        }
        echo "<br><br>Fin del bucle";
    }
    else
    {
        echo "Rompi todo";
    }
}

function RevertirPalabra($arrLetras)
{
    $newArr;
    $ret = "El array vino nullo";
    if(!is_null($arrLetras))
    {
        $ret = "Parece que el array vino vacio..";
        if(count($arrLetras) > 0)
        {
            $newArr = array();
            $newArr = array_reverse($arrLetras);
            return $newArr;
        }
    }
    return $ret;
}

?>