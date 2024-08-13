<?php
$month = $_POST['month'];

if($month == "1"){
    echo "Janeiro\n";
}
else if($month == "2"){
    echo "Fevereiro\n";
}
else if($month == "3"){
    echo "Março\n";
}
else if($month == "4"){
    echo "Abril\n";
}
else if($month == "5"){
    echo "Maio\n";
}
else if($month == "6"){
    echo "Junho\n";
}
else if($month == "7"){
    echo "Julho\n";
}
else if($month == "8"){
    echo "Agosto\n";
}
else if($month == "9"){
    echo "Setembro\n";
}
else if($month == "10"){
    echo "Outubro\n";
}
else if($month == "11"){
    echo "Novembro\n";
}
else if($month == "12") echo "Dezembro\n";

while($month < 1 or $month > 12){
    echo "o numero digitado nao corresponde a um mês\nDigite o numero novamente:\n";
    if($month == ($month / 10)){
    echo "obs: 'o numero precisa ser natural igual ou superior a um e menor que doze'\n";
}
    $month = $_POST['month'];
    
    if($month == "1"){
    echo "Janeiro\n";
}
else if($month == "2"){
    echo "Fevereiro\n";
}
else if($month == "3"){
    echo "Março\n";
}
else if($month == "4"){
    echo "Abril\n";
}
else if($month == "5"){
    echo "Maio\n";
}
else if($month == "6"){
    echo "Junho\n";
}
else if($month == "7"){
    echo "Julho\n";
}
else if($month == "8"){
    echo "Agosto\n";
}
else if($month == "9"){
    echo "Setembro\n";
}
else if($month == "10"){
    echo "Outubro\n";
}
else if($month == "11"){
    echo "Novembro\n";
}
else if($month == "12") echo "Dezembro\n";  
}
?>