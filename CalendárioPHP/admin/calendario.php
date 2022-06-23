<?php
    //Configurando o fuso horário
    date_default_timezone_set('America/Sao_Paulo');

    //Obtendo os meses anteriores e posteriores
    if(isset($_GET['mes'])) {
        $mes = $_GET['mes'];
    }
    else {
        //Este mês
        $mes = date('Y - m');
    }

//Checando o formato da hora
$timestamp = strtotime($mes . '-01');
if($timestamp === false){
    $mes = date('Y-m-d');
}

// Setando o dia atual 
$hoje = date('Y-m-j', time());

// Setando o título da tag <h3>
$titulo = date('Y/m', $timestamp);

// Criamdp os links dos meses anteriores e posteriores 
// mktime(hour, minute , seconde, month, day, year)
$anterior = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$proximo = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

// Contagem dos dias do mês
$cont_dias = date('t', $timestamp);

//Definindo os dias da semana

$dias =date('w', mktime(0,0,0, date('m', $timestamp), 1, date('Y', $timestamp)));

//criando o calendário
$semanas = [];
$semana = '';

//adiciona as células vazias
$semana .= str_repeat('<td></td>', $dias);
$dia = 0;

for($dia = 1; $dia <= $cont_dias; $dia ++, $dias++){
    $data = $mes . '-'. $dia;

    if($hoje == $data){
        $semana .= '<td class="today">' .$dia;
    }else{
        $semana .= '<td>' .$dia;
    }
    $semana .= '</td>';

    //Verificando o final de semana
    if($dias % 7 == 6 || $dia == $cont_dias){
        // Adiciona células vazias
        $semana .= str_repeat('<td></td>', 6 - ($dias % 7));

    

    $semanas[] = '<tr>' . $semana . '</tr>';

    //Preparar nova semana
    $semana = '';
    }
}

?>