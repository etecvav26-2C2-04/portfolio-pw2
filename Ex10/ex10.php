<?php

$ano = $_POST["txtano"];

if (($ano % 400 == 0) || ($ano % 4 == 0 && $ano % 100 != 0))
{
    echo "seu ano é bissexto";
}
else 
{
    echo "seu ano não é bissexto";
}


?>