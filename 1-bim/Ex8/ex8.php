<?php



function soma($num)
{
    $total = 0;

    for($contador = 0; $contador <= $num; $contador++)
        {
            $total = $total + $contador;
        }

        return $total;
}

$num = $_POST["txtnum"];
$resultado = soma($num);

echo "A soma de 0 ate " . $num . " e: " . $resultado;



?>