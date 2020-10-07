<a href="index.php">Inicio</a> <br><br>

<?php

//

$hoyDia = 4;
$hoyMes = 9;
$hoyAnho = 2020;

$fechaNDia = 4;
$fechaNMes = 10;
$fechaNAnio = 2019;

$edad = 0;

//Condición para saber si cumple o no cumple años -> Que la fecha de hoy sea mayor o igual que la de nacimiento 

$yaPasoFecha = false;

if($hoyMes > $fechaNMes){ //si el mes de nacimiento ya pasó
    $yaPasoFecha = true;

}

if($hoyMes == $fechaNMes){//si estamos en el mes del cumpleaños
    if($hoyDia >= $fechaNDia){//si el día de cumpleaños es hoy o ya pasó
        $yaPasoFecha = true;
    }
}

if($yaPasoFecha){//si ya pasó el cumpleaños
    $edad = $hoyAnho - $fechaNAnio;
}else{//si no ha pasado el cumpleaños
    $edad = $hoyAnho - $fechaNAnio - 1 ;

}
echo "tienes " . $edad . " años";


//-----------------------------------------------------

if($fechaNDia >=32 || $fechaNMes>=13){
    echo "fecha incorrecta";
    
    }else{if( $hoyMes>= $fechaNMes && $hoyDia >= $fechaNDia){
        $edad = $hoyAnho - $fechaNAnio;
           
    }else{
        
        $edad = ($hoyAnho - $fechaNAnio) -1;
    }
    }
