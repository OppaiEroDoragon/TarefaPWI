<?php
// Verificação da variável setada
if(isset($_GET['ordem'])) {
    $ordem = $_GET['ordem'];
}

$tipo = "nome";

if(isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
}

$musicas["Ai Se Eu Te Pego - Michel Teló"] = 1;
$musicas["Parabéns a Você - Bertha Celeste"] = 2; 
$musicas["Get Lucky - Daft Punk feat. Pharrell Williams & Nile Rodgers"] = 3;
$musicas["Jenifer - Gabriel Diniz"] = 4;
$musicas["Camaro Amarelo - Munhoz & Mariano"] = 5;
$musicas["Lê Lê Lê - João Neto & Frederico"] =6;
$musicas["Timber - Pitbull feat. Kesha"] = 7;
$musicas["Gatinha Assanhada -Gusttavo Lima"] = 8;
$musicas["Mandou Bem - Jota Quest feat. Nile Rodgers"] =9;
$musicas["Sugar - Maroon 5"] = 10;
$musicas["Medo Bobo - Maiara & Maraisa"] = 11;
$musicas["Maus Bocados - Cristiano Araújo"] =12;
$musicas["Humilde Residência - Michel Teló"] = 13;
$musicas["Amar não é Pecado -  Luan Santana"] =14;
$musicas["Pescador de Ilusões- O Rappa"] = 15;
$musicas["Regime Fechado - Simone & Simaria"] =16;
$musicas["Notificação Preferida-  Zé Neto & Cristiano"] =17;
$musicas["Dança Kuduro -  Latino & Daddy Kall"] = 18;
$musicas["Shape of You -  Ed Sheeran"] =19;
$musicas["Propaganda -Jorge & Mateus"] = 20;



// arsort, asort, ksort, krsort
if($tipo == 'nome' && $ordem == 'desc') {
    krsort($musicas);

}
elseif ($tipo == 'sigla' && $ordem == "desc") {
    arsort($musicas);

}
elseif ($tipo == 'nome' && $ordem == "asc") {
    ksort($musicas);

}
else  { 
    asort($musicas);

}
?>