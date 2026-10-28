<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A2.8-Calculadora</title>
</head>

<body>
    <h1>Calculadora</h1>
    <form method="post">
        <div style="margin-bottom: 12px;">
            <label for="operacion" style="display: inline-block; width: 150px;">Operación:</label>
            <select id="operacion" required style="padding: 5px;" name="tipo">
                <option value="suma">Suma</option>
                <option value="producto">Producto</option>
            </select>
        </div>

        <div style="margin-bottom: 12px;">
            <label for="numero1" style="display: inline-block; width: 150px;">Primer número:</label>
            <input type="number" id="numero1" step="any" required style="padding: 5px;" name="op1">
        </div>

        <div style="margin-bottom: 12px;">
            <label for="numero2" style="display: inline-block; width: 150px;">Segundo número:</label>
            <input type="number" id="numero2" step="any" required style="padding: 5px;" name="op2">
        </div>

        <button type="submit" style="padding: 7px 16px; cursor: pointer;">Calcular</button>
    </form>

    <?php

  
    if (isset($_POST["tipo"], $_POST["op1"], $_POST["op2"])) {
        require_once 'funciones.php';

        $tipo = $_POST["tipo"];
       
        $op1 = (float) $_POST["op1"];
        $op2 = (float) $_POST["op2"];
        echo "<p>El resultado es: " . calcular($tipo, $op1, $op2) . "</p>";
    }

    ?>
</body>

</html>
