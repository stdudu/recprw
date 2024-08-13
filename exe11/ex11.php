<?php
// Função para obter o dia da semana a partir de uma data
function obterDiaDaSemana($data) {
    // Converte a data para o formato timestamp
    $timestamp = strtotime($data);//yyyy-mm-dd hh:ii:ss

    // Verifica se a conversão foi bem-sucedida
    if ($timestamp === false) {
        return "Data inválida";
    }

    // Formata o dia da semana
    $diaDaSemana = date("l", $timestamp);
    return $diaDaSemana;
}
// Exemplo de uso
$data = $_POST['data']; // Formato YYYY-MM-DD
echo "O dia da semana para a data $data é: " . obterDiaDaSemana($data);
?>
