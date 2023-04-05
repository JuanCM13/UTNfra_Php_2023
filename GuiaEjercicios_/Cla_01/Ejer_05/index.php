<?php

/*
    Aplicación No 5 (Números en letras)
    Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
    por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
    entre el 20 y el 60.
    Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.
*/


    $num = 59;
    $primeraParte = "";  
    $segundaParte = array("Uno","Dos","Tres","Cuatro","Cinco","Seis","Siete","Ocho","Nueve");  
    $indexArr;
    $numAstring;
    $auxInt;
    $booleanEsCero = false;

    //20

    if($num > 19 && $num < 61)
    {
        $numAstring = strval($num);
        $auxInt = (integer)$numAstring[1];
        //echo $auxInt;

        //echo $numAstring; 

        if($numAstring[1] == 0)
        {
            $booleanEsCero = true;    
        }

        if($num > 19 && $num < 30)
        {
            $primeraParte = "Veint";            
            $primeraParte = $booleanEsCero?$primeraParte.="e":$primeraParte.="i ";
        }
        else
        {
            if($num > 29 && $num < 40)
            {
                $primeraParte = "Treinta";
                $primeraParte = $booleanEsCero?$primeraParte:$primeraParte.=" y ";
            }
            else
            {
                if($num > 39 && $num < 50)
                {
                    $primeraParte = "Cuarenta";
                    $primeraParte = $booleanEsCero?$primeraParte:$primeraParte.=" y ";
                }
                else
                {
                    if($num > 49 && $num < 60)
                    {
                        $primeraParte = "Cincuenta";
                        $primeraParte = $booleanEsCero?$primeraParte:$primeraParte.=" y ";
                    }
                    else
                    {
                        if($num > 59)
                        {
                            $primeraParte = "Sesenta";
                            //$primeraParte = $booleanEsCero?$primeraParte:$primeraParte.=" y ";
                        }
                    }
                }            
            }
        }  
        //-------
        //$stringAux = $primeraParte + $segundaParte[$auxInt-1];
        
        echo $primeraParte;
        if(!$booleanEsCero)
        {
            echo strtolower($segundaParte[$auxInt-1]);
        }
        //echo "El resultado es: "
    }    
    else
    {
        echo "Error,solo se admiten numeros del 20 al 60";
    }
?>