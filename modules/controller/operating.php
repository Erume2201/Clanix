<?php
    //valido el contenido de la variable GET
    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['tipo'])){
        //tomo los valores ingresados por el usuario
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $tipo = $_GET['tipo'];
        if ($tipo == "+") {
            $resultado = $num1 + $num2;
        }else if ($tipo == "-") {
            $resultado = $num1 - $num2;
        }elseif ($tipo == "*") {
            $resultado = $num1 * $num2;
        }else if($tipo == "/"){
            $resultado = $num1 / $num2;
        }
        if($resultado > -1){
            ?>
            <h3 class ="alert alert-warning"> Resultado de la operacion: <?php echo $resultado; ?>
            </h3>
            <?php
        }
    }
    