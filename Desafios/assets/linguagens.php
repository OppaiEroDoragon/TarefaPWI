<?php
// Verificação da variável setada
if(isset($_GET['ordem'])) {
    $ordem = $_GET['ordem'];
}

$tipo = "nome";

if(isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
}

$linguagens["Python"] = 1;
$linguagens["C"] =2; 
$linguagens["Java"] =3;
$linguagens["C++"] = 4;
$linguagens["C#"] =5;
$linguagens["Visual Basic"] = 6;
$linguagens["JavaScript"] = 7;
$linguagens["Assembly language"] =8;
$linguagens["SQL"] = 9;
$linguagens["PHP"] = 10;
$linguagens["Delphi/Object Pascal"] = 11;
$linguagens["Swift"] =12;
$linguagens["R"] = 13;
$linguagens["GO"] = 14;
$linguagens["Classic Visual Basic"] = 15;
$linguagens["Objective-C"] = 16;
$linguagens["Pearl"] = 17;
$linguagens["Lua"] = 18;
$linguagens["Ruby"] = 19;
$linguagens["MATLAB"] = 20;



// arsort, asort, ksort, krsort

if($tipo == 'nome' && $ordem == 'desc') {
    krsort($linguagens);

}
elseif ($tipo == 'sigla' && $ordem == "desc") {
    arsort($linguagens);

}
elseif ($tipo == 'nome' && $ordem == "asc") {
    ksort($linguagens);

}
else  { 
    asort($linguagens);

}
?>