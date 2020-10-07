<?php 
$metodo = $_SERVER["REQUEST_METHOD"];
if ($metodo!= "POST") {
    echo "Método no permitido";
    http_response_code(405);
    die();
    //exit;
    
}

if(isset($_POST["id"])){
    echo $_POST["id"];
}

echo var_dump($_POST);

