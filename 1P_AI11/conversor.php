<a href="../index.php">Regresar al inicio </a>
<br><br>
<?php   

#ENTRADA
#DETECTAR OPERACION
#EJECUTAR OPERACION Y OBTENER RESULTADO
#IMPRESION


include("Controllers/ConversorController.php");
$conversor = new ConversorController();
$conversor->parametros();
$conversor->operaciones();
?> <br><br>

<form method="post">
<label>Conversor de unidades</label> <br>
<input type="number"   name="entrada" value="<?php echo $conversor->entrada ?>">
<select name="unidades1">
<option value="1">kg</option>
<option value="2">gr</option>
<option value="3">oz</option>
<option value="4">cm</option>
<option value="5">m</option>
<option value="6">in</option>
<option value="7">yd</option>
<option value="8">lt</option>
<option value="9">ml</option>
<option value="10">m<sup>3</sup></option>
<br>
<input type="text" name="resultado"value="<?php echo $conversor->resultado."".$conversor->unidad ?>">
<select name="unidades2">
<option value="1">kg</option>
<option value="2">gr</option>
<option value="3">oz</option>
<option value="4">cm</option>
<option value="5">m</option>
<option value="6">in</option>
<option value="7">yd</option>
<option value="8">lt</option>
<option value="9">ml</option>
<option value="10">m<sup>3</sup></option>
<br><br>

<input type="submit" name="Submit" value="Convertir" >


</form>





