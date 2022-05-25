<?php
    require_once "funciones.php";

    class calculadora {
        public function calcularDatos ($val1, $val2, $opcion){
            switch ($opcion) {
                case 'suma':
                    return sumar($val1, $val2);
                    break;
                case 'resta':
                    return restar($val1, $val2);
                    break;
                case 'multiplicacion':
                    return multiplicar($val1, $val2);
                    break;
                case 'division':
                    return dividir($val1, $val2);
                    break;
            }
        }
    }
?>