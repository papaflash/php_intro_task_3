<?php
$varType = null;
$variable = 3.14;
//$variable = 3;
// $variable = 'one';
//$variable = true;
//$variable = null;
//$variable = [];
//===================================if else==============================
if (is_bool($variable))
{
    $varType = 'bool';
}elseif (is_int($variable))
{
    $varType = 'int';
}elseif (is_float($variable))
{
    $varType = 'float';
}elseif (is_string($variable))
{
    $varType = 'string';
}elseif (is_null($variable))
{
    $varType = 'null';
}else
{
    $varType = 'other';
}
echo 'type:' . $varType . '<br/>';

//==================================Switch case=============================
switch (get_debug_type($variable))
{
    case 'bool':
        $varType = 'bool';
        break;
    case 'int':
        $varType = 'int';
        break;
    case 'float':
        $varType = 'float';
        break;
    case 'string':
        $varType = 'string';
        break;
    case 'null':
        $varType = 'null';
        break;
    default:
        $varType = 'other';
        break;
}
echo 'type:' . $varType;