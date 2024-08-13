<?php
$data = fgets(STDIN);
$partes = explode('-', $data);
echo "Dia: $partes[0]\nMês: $partes[1]\nAno: $partes[2]";
?>