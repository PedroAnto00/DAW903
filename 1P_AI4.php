<a href="index.php">Inicio</a> <br><br> <?php

//----------------------------------------------
echo "<br><strong>For</strong><br>";

for($i = 0; $i <5 ; $i++){
    echo  $i    ;
    echo "<br>";
}

//----------------------------------------------
echo "<br><strong>While</strong><br>";

$ciclo = 0;
while($ciclo > 5){
    $ciclo++;
    echo "$ciclo <br>";
}


//----------------------------------------------
echo "<br><strong>While</strong><br>";

$ciclo = 0;
do{
    $ciclo++;
    echo "$ciclo <br>";
}
while($ciclo > 5);

//----------------------------------------------
echo "<br><strong>While</strong><br>";
$arrNuevo = [1,2,3,4,5,6];
$arrNuevo = array (1,false,3.1416,"asadasd",5,6);

echo var_dump($arrNuevo);

//------------------------------------
echo "<br><strong>Funciones del arreglo</strong><br>";
$arrNuevo = [];
array_push($arrNuevo, 1);
array_push($arrNuevo, 2);
echo var_dump($arrNuevo) . "<br>" ;

//------------------------------------
echo "<br><strong>Funciones del arreglo (agragar al final)</strong><br>";

array_unshift($arrNuevo, 3);
echo var_dump($arrNuevo) . "<br>" ;

//------------------------------------
echo "<br><strong>Eliminar un elemento</strong><br>";

unset($arrNuevo[1]);
echo var_dump($arrNuevo) . "<br>" ;

//------------------------------------
echo "<br><strong>Conteo de elementos</strong><br>";

unset($arrNuevo[1]);
echo count($arrNuevo) . "<br>" ;

//------------------------------------
echo "<br><strong>Merge de arrays</strong><br>";
$arr1 = [1,2,3];
$arr2 = [2,3,5,4];
$arrMerge = array_merge($arr1,$arr2);
echo var_dump($arrMerge) . "<br>";

//------------------------------------
echo "<br><strong>Voltear el arreglo</strong><br>";
$arrMerge = array_reverse($arrMerge);
echo var_dump($arrMerge) . "<br>";

//------------------------------------
echo "<br><strong>Merge sin repetidos</strong><br>";

$arrMerge = array_replace($arr1,$arr2);
echo var_dump($arrMerge) . "<br>";


//------------------------------------
echo "<br><strong>Ordenar de manera ascendente</strong><br>";
sort($arrMerge);
echo var_dump($arrMerge) . "<br>";

//------------------------------------
echo "<br><strong>Ordenar de manera descendente</strong><br>";
rsort($arrMerge);
echo var_dump($arrMerge) . "<br>";

//------------------------------------
echo "<br><strong>Foreach</strong><br>";
$numeros = [1,2,3,4];
foreach($numeros as $item){

    echo "$item <br>";
}

//------------------------------------
echo "<br><strong>Foreach</strong><br>";
$numeros = [13,2,"Pedro", [1,2,3,4]];
foreach($numeros as $item){

    if(is_array($item)){

        foreach($item as $subitem){
            echo "--$subitem <br>";

        }
    }else{
    echo "$item <br>";
    }
}

//------------------------------------
echo "<br><strong>Arreglo simple</strong><br>";
echo "$numeros[2] <br>";

//------------------------------------
echo "<br><strong>Arreglos asociativos</strong><br>";
$asociativo = ["primero" => "1°","segundo" => "2°"];
echo $asociativo["primero"] . "<br>";

//------------------------------------
echo "<br><strong>Arreglos asociativos foreach</strong><br>";

foreach($asociativo as $key => $valor){

    echo "$key - $valor <br>";
}


