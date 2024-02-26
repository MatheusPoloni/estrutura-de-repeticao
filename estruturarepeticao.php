<?php
//while
/**/
$i = 1;
while($i < 10){
    echo "Imprimindo no while \n";
    echo "Valor de i: $i \n";
    $i++;
}

echo "\n\n";

//do-while
$j = 1;
do{
    echo "Imprimindo no do/while \n";
    echo "Valor de j: $j \n";
    $j++;
}while($j < 1);

die;
/**/

/**/
//for
for($cont = 0; $cont < 10; $cont++){
    echo "$cont \n";
}
/**/
//for com array
$arrayfrutas = Array("Laranja", "Maça"
, "Limão");
for($i=0; $i<count($arrayFrutas); $i
++){
    echo "Frutas: " . $arrayFrutas[$i]
    . "\n"
}

//foreach com array (é um for simplificado)
foreach($arrayFrutas as $fruta){
    echo "Fruta: " . $fruta . "\n";
}
/**/