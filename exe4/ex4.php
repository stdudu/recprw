<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$preco = $_POST['preco'];

//calculo do preco a vista, com 10% de desconto
$avista = $preco - ($preco * 0.1);
// calculo do preco a prazo 5x s/ juros
$parcela_5x = $preco/5;
// calculo do preco a prazo 20x c/ juros 20%/mes
$parcela_juros = ($preco * 1.2)/10;

echo "<p>Preco a pagar (À vista 10% off): $avista</p><br>";

echo "<p>Preco a pagar (Á prazo 5x s/ juros): $parcela_5x</p><br>";

echo "<p>Preco a pagar (Á prazo 10x c/ juros de 20%/mes): $parcela_juros</p><br>";

?>
</body>
</html>