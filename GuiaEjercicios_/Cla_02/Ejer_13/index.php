<?php

/* MENDEZ JUAN CRUZ - 3C
    Aplicación No 13 (Invertir palabra)
    Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). La
    función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
    deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
    “Recuperatorio”, “Parcial” y “Programacion”. Los valores de retorno serán: 1 si la palabra
    pertenece a algún elemento del listado.
    0 en caso contrario.
*/

    $palabra = "Recuperatorio";
    //$palabra = "Parcial";
    //$palabra = "Programacion";
    //$palabra = "progrAmaCioN";
    //$palabra = "sarasa";
    
    $ret = InvertirPalabraMejorada($palabra,15);
    //$ret = InvertirPalabraMejorada($palabra,11);
    //$ret = InvertirPalabraMejorada($palabra,"pepe");
    //$ret = InvertirPalabraMejorada(4,15);

    if(is_string($ret))
    {
        echo $ret;
    }
    else
    {
        echo ($ret == 1?("La palabra: ".$palabra." esta en el listado"):("La palabra: ".$palabra." NO esta en el listado"));
    }

    function InvertirPalabraMejorada($stringPalabra,$max)
    {
        $ret = "Error algun parametro vino nullo..";
        $arrPalabrasValidas;
        if(!is_null($stringPalabra) && !is_null($max))        
        {
            $arrPalabrasValidas = array("recuperatorio","parcial","programacion");
            $ret = "Error se esperaba un string y un entero..";
            if(is_string($stringPalabra) && is_int($max))
            {
                $ret = "Parece que el string supera el limite de: ".$max." caracteres..";
                if(strlen($stringPalabra) < ($max+1))
                {
                    return in_array(strtolower($stringPalabra),$arrPalabrasValidas)?1:0;
                }
            }
        }
        return $ret;
    }
?>