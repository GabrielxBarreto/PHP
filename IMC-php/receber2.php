
<?php
    $altura  = $_GET["altura"] ?? 1.6;
    $peso  = $_GET["peso"] ?? 60;
    $idade  = $_GET["idade"] ?? 16;
    $sexo = $_GET["sexo"] ?? "nb";
    //p/a^2
   // echo $altura + $idade * $peso - $idade / $altura;
    $imc  = $peso / $altura **2;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>CALCULADORA IMC</h1>
        <h3>"SEUS DADOS SÃO: ALTURA:<?=$altura?> | PESO: <?=$peso?>Kg</h3>
        <h3>IMC = <?=$imc?></h3>

    </div>
</body>
</html>