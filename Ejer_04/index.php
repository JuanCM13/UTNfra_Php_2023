<?php

/*
    Aplicación No 4 (Calculadora)
    Escribir un programa que use la variable $operador que pueda almacenar los símbolos
    matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
    símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
    resultado por pantalla.
*/
    $operador = "*";
    $op1 = 10;
    $op2 = 3;
    $caracteresValidos = array("+","-","*","/");
    $resultado;
    $seP = true;

    if(is_numeric($op1) && is_numeric($op1) && in_array($operador,$caracteresValidos))
    {
        switch($operador)
        {
            case "+": 
                $resultado = $op1 + $op2;
                break;
            case "-": 
                $resultado = $op1 - $op2;
                break;
            case "*": 
                $resultado = $op1 * $op2;
                break;
            case "/":
                if($op2 == 0)
                {
                    $seP = false;
                }          
                else
                {
                    $resultado = $op1 / $op2;
                }   
                break;
        }

        if(!$seP)
        {
            echo "No se puede dividir por cero...";
        }
        else
        {
            echo "El resultado de ",$op1;
            echo " ",$operador;
            echo " ",$op2;
            echo " es: ",$resultado;
        }
    }
    else
    {        
        echo "Error, controlar que los operandos sean numeros y que el operador sea +,-,* o / ...";
    }
?>