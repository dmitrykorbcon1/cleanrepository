<?php
function conj($a, $b)//конъюнкция бинарных значений
{
return (int)((bool) $a && (bool) $b);
}
function dizj($a, $b)//дизъюнкция бинарных значений
{
    return (int)((bool) $a || (bool) $b);
}
function summod2($a, $b)//исключающее или для бинарных значений
{
    return (int)((bool) $a xor (bool) $b);
}
function discriminant($a, $b, $c)//дискриминант квадратного уравнения
{
    return $b*$b-4*$a*$c;

}//
