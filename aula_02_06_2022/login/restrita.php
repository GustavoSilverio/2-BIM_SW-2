<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
session_start();
if($_SESSION['logado'] != 1){

    header('location:index.html');
}

    echo 'Pagina restrita ! <br><br>';
    echo "<a href='logout.php'>SAIR</a>";
?>
</body>

</html>