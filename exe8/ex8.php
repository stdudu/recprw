<?php
$word = $_POST['palavra'];
$vogais = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
echo "Palavra original: $word<br>Palavra sem vogais: ".str_replace($vogais,'',$word);
?>