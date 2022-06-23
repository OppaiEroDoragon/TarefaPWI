<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios em PHP</title>
</head>
<body bgcolor="grey">

    <center>

    <h1>Tarefa De PW-I</h1>

</center>

<h3>Nome: Guilherme Dias Ferreira  2º Etim Informática para internet.</h3>

<br>



  <h2>Exercício 4</h2>

    <?php

$A = 6;
$B = 3;

if($A > $B){

   echo "Seus números na ordem crescente: " .$B."," .$A;

}
else
{

   echo "Seus números na ordem crescente: " .$A."," .$B;
}

?>







<h2>Exercício 5</h2>

<?php

  $Nota = [10, 10, 8, 8 ];

  $Total = 0;



for($i = 0; $i < count($Nota); $i++){

    $Total += $Nota[$i];

  }

$resultado = $Total / count($Nota);

if($resultado >= 7){

   echo "Você foi aprovado, sua média final: {$resultado}";

  }

  else{

   echo "Você foi reprovado, sua média final: {$resultado}";
 }



?>








<h2>Exercício 7</h2>

<?php

$salario = 500;

$reajustado;

if ($salario <= 300) {

    $reajustado = ($salario * 1.5);

    echo "O seu salário foi reajustado à 50%, o seu salário novo será ", $reajustado;

} else {

    $reajustado = ($salario * 1.3);
    
    echo "O seu salário foi reajustado à 30%, o seu novo salário será ", $reajustado;

}

?>









<h2>Exercício 8</h2>
  
    <?php

    $valor = 12;
        
  echo "Esses são seus valores em ordem crescente: ";

  for($i=0; $i<=$valor; $i++){

  echo $i.",";
        }
    ?>











<h2>Exercício 9</h2>


<?php

$num = 7;

if ($num > 1){


$valor = $num;


for ($i = ($valor - 2); $i > 0; $i--)

{


$valor = $valor * $i;

  }

}
else
{



$valor = 0;

}

echo "{$num} = {$valor}";



?>









<h2>Exercício 11<h2>

<?php

  $valor1 = 7;

  $valor2 = 10;

        $resultado = $valor1 * $valor2;
        
        for($valor2; $valor2 > 0; $valor2--){

        echo $valor1;

        if($valor2 != 1) echo " + ";

        }

        echo " = ".$resultado;
    ?>



</body>
</html>


