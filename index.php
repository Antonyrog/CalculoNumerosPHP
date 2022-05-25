<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body>
    <div clas="container">
        <form action="Calculo.php" method="post">
            <h1 class="text-center mt-5">Cálculo de dos números</h1>
            <div class="row justify-content-center mt-5">
                <label class="col-2 col-form-label">Primer número:</label>
                <div class="col-8 col-md-3">
                    <input type="number" class="form-control" name="val1">
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <label class="col-2 col-form-label">Segundo número:</label>
                <div class="col-8 col-md-3">
                    <input type="number" class="form-control" name="val2">
                </div>
            </div>
            <!--Este input toma el evento del boton asignandole 
                el valor de (sum, res, mult, div) segun sea.
            -->
            <input id="opcion" type="hidden" name="opcion">

            <div class="align-items-center row justify-content-center mt-4">
                <div class="col-8 col-md-5 text-center">
                    <button type="submit" class="btn btn-warning" value="suma"
                    onclick = "(document.getElementById('opcion').value = 'suma')">Sumar</button>
                    <button type="submit" class="btn btn-warning" value="resta"
                    onclick = "(document.getElementById('opcion').value = 'resta')">Restar</button>
                    <button type="submit" class="btn btn-warning" value="multiplicacion"
                    onclick = "(document.getElementById('opcion').value = 'multiplicacion')">Multiplicar</button>
                    <button type="submit" class="btn btn-warning" value="division"
                    onclick = "(document.getElementById('opcion').value = 'division')">Dividir</button>
                </div>
            </div>
        </form>      
    </div>
</body>
</html>
