<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Área do Círculo</h1>";

    $pi = 3.141592653;
    $raio = $_POST['raio'];

    $area = $pi * ($raio^2);

    echo "Area do Circulo:".number_format($area, 9, ".", "");
    ?>
</body>
</html>