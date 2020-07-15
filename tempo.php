<?php
/*
Função de cálculo de horas.
Pega duas datas e duas horas e calcula o quanto tempo em horas tem de uma a outra.
Sempre arredonda para o inteiro mais alto.

Sintaxe: int tempo(str $data1, str $hora1, srt $data2, str $hora2);
Exemplo: tempo("1981-03-20","06:00:00",date("Y-m-d"),date("H:i:s");
Retorna o valor em horas, desde a data do meu nascimento até hoje (!!)
By Bluverts - bluverts@gmail.com (= Marcus Marçal - marcus.marcal@gmail.com)

*/

$tempo = 0;

function tempo($data1,$hora1,$data2,$hora2){
  $i = split(":",$hora1);
  $j = split("-",$data1);
  $k = split(":",$hora2);
  $l = split("-",$data2);

$tempo1 = mktime($i[0],$i[1],$i[2],$j[1],$j[2],$j[0]);
$tempo2 = mktime($k[0],$k[1],$k[2],$l[1],$l[2],$l[0]);

$GLOBALS['tempo'] = ceil((($tempo2 - $tempo1)/60)/60);

//return $GLOBALS['tempo'];

}

tempo ("2006-09-11", "21:00:00", date ("Y-m-d"), date ("H").":00:00");
 ?>
