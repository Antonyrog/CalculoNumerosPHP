<?php
    
    require_once "Calculo.php";
    
    function sumar($val1, $val2){
        $res = $val1 + $val2;
        return $res;
    }

    function restar($val1, $val2){
        $res = $val1 - $val2;
        return $res;
    }

    function dividir($val1, $val2){
        $res = $val1 / $val2;
        return $res;
    }

    function multiplicar($val1, $val2){
        $res = $val1 * $val2;
        return $res;
    }
?>