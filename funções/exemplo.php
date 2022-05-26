<?php

//!<----Funções ciradas por usuários---->!

/*
1-Função sem retorno e sem parametro
2-Função sem retorno e com parametro
3-Função com retorno e sem parametro
4-Função com retorno e com parametro
*/

//Site para busca em php ex:w3school.com   ------>php.net<-----

//EXEMPLO:

//Função sem retorno e sem parametro
echo "1-Função sem retorno e sem parametro";
echo "<br>";
echo "<br>";
function teste(){
    echo "Gustavo Silvério";
}

//Chamando função:

teste();
echo "<hr>";

//Função sem retorno e com parametro
echo"2-Função sem retorno e com parametro";
echo "<br>";
echo "<br>";
function teste2 ($a){
    echo $a;
}

//A variável $a tem um escopo local, ou seja, só pode ver o valor dessa variável dentro da function

teste2('Bom dia');
echo "<br>";
teste2('Oi galera');
echo "<hr>";

//Atribui valor para a variavel $a


//Função com retorno e sem parametro
echo"3-Função com retorno e sem parametro";
echo "<br>";
echo "<br>";

//ela tem que ser armazenada em uma variável para poder der chamada 

function teste3(){
    $b = 'Gustavo';
    return $b;
}

$resultado = teste3();

echo "$resultado";

echo "<hr>";
//Função com retorno e com parametro
echo"4-Função com retorno e com parametro";
echo "<br>";
echo "<br>";

function teste4 ($x, $y){
    $soma = $x + $y;
    return $soma;
}

$num1 = 10;
$num2 = 20;

$result = teste4($num1,$num2);

//Tem que atribuir os valores de $num1 e $num2 para os parametros locais de $x e $y
echo "$result";
echo "<hr>";

//TEM TODOS EXEMPLO NO GITHUB DO ANDERSON 
?>