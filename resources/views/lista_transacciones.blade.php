<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <H1>Listado Transacciones</H1>
        
        <?php
        if ($transacciones!="") {
            echo "<table>";
            echo "<tr><td>Id Transacción</td><td>Concepto</td><td>Estado solicitud</td><td>Estado transacción</td><td>Mensaje</td></tr>";
            foreach ($transacciones as $val) {
                
                echo "<tr><td>".$val["estado"]["transactionID"]."</td><td>".$val["estado"]["reference"]."</td><td>".$val["estado"]["returnCode"]."</td><td>".$val["estado"]["transactionState"]."</td><td>".$val["estado"]["responseReasonText"]."</td></tr>";
                
            }
            echo"</table>";
        }
        ?>
        <ul>
            <li><a href="/transaccion/listar">Actualizar<a></li>
            <li><a href="/inicio">Volver<a></li>
        </ul>
    </body>
</html>
