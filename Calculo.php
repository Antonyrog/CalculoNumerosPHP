<?php
    require "index.php";
    require_once "claseCalculo.php";
    require_once "funciones.php";

    $calcular = new calculadora();

    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $opcion = $_POST['opcion'];

    $res = $calcular->calcularDatos($val1, $val2, $opcion);

       
?>

<div class="row justify-content-center text-center mt-4">
    <div class="alert alert-light col-8 col-md-6" id="resultado" role="alert">
        <?php
            echo "El resultado de la {$opcion} es: {$res}"; 
        ?>
    </div>
</div>