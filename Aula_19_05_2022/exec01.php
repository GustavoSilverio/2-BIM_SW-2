<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Teste</title>
</head>

<body>
<?php
//Trabalhando com vetores 

//$numeros = array(1,12,50,1.2)
//$numeros = [1,12,50,1.2];
//Da pra fazer um vetor das duas formas

$numeros = [1,12,50,1.2];
//echo $numeros[2];
$qtde = count($numeros);
//echo $qtde.
echo "<br> Meu vetor tem $qtde posições <br> <hr> ";

for($i = 0;$i <4; $i++){

    //echo " Posição = $i <br> <br>";
    //echo "$numeros[$i] <br> <hr>";
    echo "<br> Indice ==> $i ==> $numeros[$i] <br> <br> <hr>";

}

?>
</body>

</html>