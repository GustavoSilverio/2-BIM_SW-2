<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        * {
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-size: 30px;
}

body {
    margin-top: 400px;
    background-color: rgba(20, 180, 145, 0.76);
}

h1 {
    font-size: 45px;
}
    </style>
<?php

$user = $_POST['user'];
$key = $_POST['key'];

$user1 = 'Gustavo';
$pass = '1234';

if(($user1 == $user) && ($key == $pass)){

    //echo 'PARABENS VOCÊ SABE ESCREVER SEU VERME';
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['logado'] = 1;    
    header("location:restrita.php");

}else{
    echo 'Erro, algo esta errado ! <br><br>';
    echo "<a href='logout.php'>SAIR</a>";
}
?>
</body>

</html>