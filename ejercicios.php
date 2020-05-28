<?php

echo '<h1> Ejercicios Arreglos Platzi </h1>';
echo '<h3> https://platzi.com/clases/1338-php/12921-ejercicios-arreglos/ </h3>';


echo '<div><h2> Ejercicio 1 </h2></div>';

$arreglo = [

    'keystr1' => 'lado',
    0 => 'ledo',

    'keystr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'
];
$reverse = array_reverse($arreglo);
//var_dump($arreglo);
//Lado, ledo, lido, lodo, ludo,
//decirlo al revés lo dudo.
//Ludo, lodo, lido, ledo, lado,
//¡Qué trabajo me ha costado!
echo '<br>';
foreach ($arreglo as $key => $value){
    echo $arreglo[$key] . ', ';
}
echo '<br> decirlo al revés lo dudo. <br>';
foreach ($reverse as $key => $value){
    echo $reverse[$key] . ', ';
}
echo '<br> ¡Qué trabajo me ha costado!';



echo '<div><h2> Ejercicio 2 </h2></div>';

$paises = [
    'Argentina' => ['Buenos Aires','Posadas','Rosario'],
    'Brasil' => ['Brasilia','Rio de Janeiro','Porto Alegre'],
    'Paraguay' => ['Asuncion','Encarnacion','Ciudad del Este']
];

foreach ($paises as $key => $value) {
    echo "<h4> $key </h4>";
    foreach($value as $city){
        echo "<li> $city </li>";
    };
    echo '<br>';
};

echo '<div><h2> Ejercicio 3 </h2></div>';
//Escribe el código necesario para encontrar los 3 números más grandes 
//y los 3 números más bajos de la siguiente lista:

$array = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

for($i=1; $i<count($array); $i++){

    for($j=0; $j<count($array)-$i; $j++){

        if($array[$j] > $array[$j+1]){
            $k=$array[$j+1];
            $array[$j+1]=$array[$j];
            $array[$j]=$k;
        }
    }
}

$aux=count($array);
echo "<li> Mayores </li>";
for($i=$aux; $i>$aux-3; $i--){
    echo $array[$i-1] . '<br>';
}

echo "<li> Menores </li>";
for($i=0;$i<3;$i++){
    echo $array[$i] . '<br>';
}


?>