<?php
$data = $_POST['data'];
$partes = explode('-', $data);
    echo "Dia: $partes[2]<br>Mês: $partes[1]<br>Ano: $partes[0]";
?>