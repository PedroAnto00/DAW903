
<a href="index.php">Inicio</a> <br><br> <?php

$array = [];
echo "<br><strong>Descendente</strong><br>";
for($i = 1; $i <=5 ; $i++){
    array_push($array, $i);

    foreach($array as $item)
    echo  $item . "," ;
    echo "<br>";
    
}

echo "<br><strong>Ascendente</strong><br>";

$array = array_reverse($array);

foreach($array as $item){
    echo "$item <br>";
}




echo "<br><strong>Calendario</strong><br>";

$meses = [
    "Enero" => 31, "febrero " => 28, "Marzo"=> 31, "Abril" => 31,
    "Mayo" => 31, "Junio" => 31, "Julio"=> 30, "Agostro" => 31, 
    "Septiembre" => 30,"Octubre"=> 31, "Noviembre"=> 30, "Diciembre" => 31];

    foreach($meses as $mesNombre => $mesDias){
        echo "$mesNombre :";
        for($i = 1; $i <= $mesDias; $i++){
            echo "$i,";
        }
        echo "<br>";
    }
#-----------------------------------------------
echo "<strong>Piramide Dinamica</strong><br>";

$num =10;
$nums = [];
$progresivo = [];

for($i=1; $i<$num; $i++){

    array_push($progresivo, $i);
  if($i > 1){
    array_unshift($progresivo, $i); 
  }
    array_push($nums, $progresivo);
}


foreach($nums as $item){

    $espacio = (count($progresivo) - count($item)) / 2;

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }

    foreach($item as $valor){
        echo "$valor";
    }

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }

    echo "<br>";
}

#-----------------------------------------------
echo "<strong>Piramide en Rombo </strong><br>";

$num =10;
$nums = [];
$progresivo = [];

for($i=1; $i<$num; $i++){

    array_push($progresivo, $i);
  if($i > 1){
    array_unshift($progresivo, $i); 
  }
    array_push($nums, $progresivo);
}


foreach($nums as $item){

    $espacio = (count($progresivo) - count($item)) / 2;

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }

    foreach($item as $valor){
        echo "$valor";
    }

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }
    
    echo "<br>";
}

$nums = array_reverse($nums);

foreach($nums as $item){
    

    $espacio = (count($progresivo) - count($item)) / 2;

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }

    foreach($item as $valor){
        echo "$valor";
    }

    for($e =0; $e <= $espacio; $e++){
        echo"=";
    }
    
    echo "<br>";
}