<?php

//Confirmar conexión
//include_once('1P_AI9_BDConnection.php');
//$conexion = new BDConnection();
//$conexion->cierraConexion();

include_once('1P_AI9_Usuario.php');


// $mUsuario = new Usuario();
// $mUsuario->nombre = "Melendez";
// $mUsuario->edad = 27;
// $mUsuario->save();

// Consultar Usuario
// $mUsuario = Usuario::find(3);

// Actualizar
// $mUsuario = Usuario::find(1);
// if(isset($mUsuario)){
//     $mUsuario->nombre = "Yo no era";
//     $mUsuario->edad = 25;
//     $mUsuario->save();
// }

// // Eliminación
// $mUsuario = Usuario::find(1);
// if (isset($mUsuario)){
//     $mUsuario->delete();
// }

//Consulta multiple
$mUsuarios = Usuario::all();

