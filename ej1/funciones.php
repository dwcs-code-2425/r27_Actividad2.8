<?php
const TIPO_SUMA = "suma";
const TIPO_PRODUCTO = "producto";

function calcular(string $tipo, float $op1, float $op2): float
{
    $resultado = 0;
    if ($tipo === TIPO_SUMA) {
        $resultado = sumar($op1, $op2);
    } else if ($tipo === TIPO_PRODUCTO) {
        $resultado = multiplicar($op1, $op2);
    }
    

    // switch ($tipo) {
    //     case TIPO_SUMA:
    //          $resultado = sumar($op1, $op2);
    //         break;
    //      case TIPO_PRODUCTO:
    //          $resultado = multiplicar($op1, $op2);
    //         break;
    //     default:
    //        $resultado=0;
    //         break;
    // }
    return $resultado;
}
function sumar(float $op1, float $op2): float
{
    return $op1 + $op2;
}
function multiplicar(float $op1, float $op2): float
{
    return $op1 * $op2;
}
