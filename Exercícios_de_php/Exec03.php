<?php
$vetor = [];

for($i = 1;$i <= 10; $i++ ){
    $vetor[$i] = rand(1,10);
    echo "$vetor[$i] ";
    $total = $total + $vetor[$i];
}

$qtde = count($vetor);
$media = $total/$qtde;
echo $media;

?>