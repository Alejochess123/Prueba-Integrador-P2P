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
        <H1>Formulario Transacción</H1>
        
        <?php
        if ($errors->any()) {
            echo "Error de Validación<ul>";
            foreach ($errors->all() as $error){
                echo "<li>".$error."</li>";
            }
            echo "</ul>";
        }
        ?>
        
        <form method="POST" action="{{url('/transaccion/form')}}">
            {{csrf_field()}}
            
            <br/><label><b>PERSONA</b> </label>
            <br/><label>Documento Identidad: </label>
            <input type="text" name="document" size="12" maxlength="12">
            
            <br/><label>Tipo Documento: </label>
            <select name="documentType">
                <option value="0">Seleccione el Tipo de Documento</option>
                <option value="CC">CC = Cédula de ciudanía colombiana</option>
                <option value="CE">CE = Cédula de extranjería</option>
                <option value="TI">TI = Tarjeta de identidad</option>
                <option value="PPN">PPN = Pasaporte</option>
                <option value="NIT">NIT = Número de identificación tributaria</option>
                <option value="SSN">SSN = Social Security Number</option>
            </select>
            
            <br/><label>Nombre: </label>
            <input type="text" name="firstName" size="60" maxlength="60">
            
            <br/><label>Apellidos: </label>
            <input type="text" name="lastName" size="60" maxlength="60">
            
            <br/><label>Compañía: </label>
            <input type="text" name="company" size="60" maxlength="60">
            
            <br/><label>Correo electrónico: </label>
            <input type="text" name="emailAddress" size="80" maxlength="80">
            
            <br/><label>Dirección postal: </label>
            <input type="text" name="address" size="100" maxlength="100">
            
            <br/><label>Ciudad: </label>
            <input type="text" name="city" size="50" maxlength="50">
            
            <br/><label>Provincia/Departamento: </label>
            <input type="text" name="province" size="50" maxlength="50">
            
            <br/><label>País: </label>
            <select name="country">
                <option value="0">Seleccione el País</option>
                <option value="ES">España</option>
                <option value="CO">Colombia</option>
            </select>
            
            <br/><label>Teléfono fijo: </label>
            <input type="text" name="phone" size="30" maxlength="30">
            
            <br/><label>Telefono móvil: </label>
            <input type="text" name="mobile" size="30" maxlength="30">
            
            <br/><label>Código postal: </label>
            <input type="text" name="postalCode" size="10" maxlength="10">
            
            <br/><hr/>
            <br/><label><b>BANCO</b> </label>
            
            <br/><label>Tipo: </label>
            <select name="bankInterface">
                <option value="0">Seleccione el Tipo</option>
                <option value="PERSONAS">PERSONAS</option>
                <option value="EMPRESAS">EMPRESAS</option>
            </select>
            
            <br/><label>Banco: </label>
            <select name="bankCode">
                <?php 
                if ($bancos!="") {
                    foreach ($bancos as $val){
                        echo '<option value="'.$val['bankCode'].'">'.$val['bankName'].'</option>';
                    }
                }
                ?>
            </select> <?php if ($bancos=="") { echo "No se pudo obtener la lista de Entidades Financieras, por favor intente más tarde"; } ?>
            
            <br/><hr/>
            <br/><label><b>TRANSACCIÓN</b> </label>
            
            <br/><label>Concepto: </label>
            <input type="text" name="reference" size="32" maxlength="32">
            
            <br/><label>Descripción: </label>
            <textarea name="description" rows="4" cols="50">
            </textarea>
            
            <br/><label>Moneda: </label>
            <select name="currency">
                <option value="0">Seleccione la moneda</option>
                <option value="COP">Peso Colombiano</option>
                <option value="EUR">Euro</option>
                <option value="USD">Dólar Americano</option>
            </select>
            
            <br/><label>Valor Total: </label>
            <input type="text" name="totalAmount" size="20" maxlength="20">
            
            <br/><hr/>
            <br/><button type="submit">Enviar</button>
        </form>
    </body>
</html>
