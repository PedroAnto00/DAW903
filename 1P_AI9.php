<a href="index.php">Inicio</a> <br><?php

include_once('1P_AI9_Controlador.php');
?>
<table border="1">

    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
        
        </tr>
    
    </thead>
    <tbody> <?php
            foreach( $mUsuarios as $row){

             echo  " <tr>
                      <th>$row->id</th>
                      <th>$row->nombre</th>
                      <th>$row->edad</th>
        
                    </tr>";
            }
            ?>
    </tbody>
</table>

<?php


