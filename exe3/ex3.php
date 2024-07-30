<?php
    echo "<h1>Calculo da multa</h1>";
    // velocidade maxima permitida na pista
    $vemax = $_POST['vemax'];
    // velocidade do motorista
    $vemotorista = $_POST['vemotorista'];

    if($vemotorista < $vemax)
    {
    echo "sem multa por excesso de velocidade\n";
    }
    else if($vemotorista <= ($vemax*1.1)){
    echo "multa de R$50,00 por excesso de velocidade\n";
    }
    else if($vemotorista >= ($vemax*1.1) && $vemotorista < ($vemax*1.2)){
    echo "multa de R$100,00 por excesso de velocidade\n";
    }
    else if($vemotorista >= ($vemax*1.2)){
    echo "multa de R$200,00 por excesso de velociade\n";
    }
?>