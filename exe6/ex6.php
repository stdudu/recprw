<?php
// Função para verificar se um número é primo
function isPrime($num) {
    if ($num <= 1) {
        return false; // Números menores ou iguais a 1 não são primos
    }
    if ($num == 2) {
        return true; // 2 é o único número par que é primo
    }
    if ($num % 2 == 0) {
        return false; // Números pares maiores que 2 não são primos
    }
    // Verifica se o número é divisível por algum número ímpar até a raiz quadrada do número
    for ($i = 3; $i * $i <= $num; $i += 2) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Verifica números entre 0 e 200
for ($i = 0; $i <= 200; $i++) {
    if (isPrime($i)) {
        echo "$i é um número primo.\n";
    } else {
        echo "$i não é um número primo.\n";
    }
}
?>
