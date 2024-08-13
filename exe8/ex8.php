<?php
$word = fgets(STDIN);
$vogais = ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
echo "Palavra original: $word\nPalavra sem vogais: ".str_replace($vogais,'',$word);
?>