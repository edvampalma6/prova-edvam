<?php

//Calculos do INSS e IRPF conforme a tabela dada na prova
//INSS
$imp_1 = 1399,12;
$imp_2 = 2331,88;
$imp_3 = 4663,75;

//IRPF
$imp_4 = 1903,98;
$imp_5 = 2826,65;
$imp_6 = 3751,05;
$imp_7 = 4664,68;
$imp_8 = $Salario > 4664,68;
    
//Porcentagens do INSS e IRPF conforme a tabela dada na prova

//INSS
$poc_1 = 0.08;
$poc_2 = 0.09;
$poc_3 = 0.11;

//IRPF
$poc_4 = 0.0;
$poc_5 = 7,5;
$poc_6 = 0.15;
$poc_7 = 22,5;
$poc_8 = 27,5;

$VlrFixo = 0.0;

Busca valor do Salário informado
$Salario = $_POST["Salario"];


if ($Salario <= $imp_1) {
                                                                     $calculo = $Salario * ($poc_1 / 100)*100;
                                                                     echo (double) "$calculo";
                     }
elseif ($Salario >= $imp_1 and $Salario <= $imp_2) {

                                                                     $calculo = $Salario * ($poc_2 / 100)*100;
                                                                     echo (double) "$calculo";
                                                               }

elseif ($Salario >= $imp_2 and $Salario <= $imp_3) {
                                                                     $calculo = $Salario * ($poc_3 / 100)*100;
                                                                     echo (double) "$calculo  ";
                                                               }

else ($Salario > $imp_3) {
                       echo (double) "$VlrFixo";
                                                               }
?>