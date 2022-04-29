<?php

 if(isset($_POST['pnombre']) && isset($_POST['snombre']
 ) && isset($_POST['papellido']) && isset($_POST['sapellido']) && isset($_POST['genero']) && isset($_POST['pais']) && isset($_POST['estado']) && isset($_POST['ciudad']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['contrasena'])){

        $pnombre = ucwords($_POST['pnombre']);
        $snombre = ucwords($_POST['snombre']);
        $papellido = ucwords($_POST['papellido']);
        $sapellido = ucwords($_POST['sapellido']);
        $genero = $_POST['genero'];
        $pais = ucwords($_POST['pais']);
        $estado = ucwords($_POST['estado']);
        $ciudad = ucwords($_POST['ciudad']);
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT, ['cost' => 10]);

        require_once "../Connection/Connection.php";

        $consulta = $pdo -> prepare("INSERT INTO `tblusuario`(`US_Id`, `Us_PNombre`, `Us_SNombre`, `Us_PApellido`, `Us_SApellido`, `Us_Genero`, `Us_Pais`, `Us_Estado`, `Us_Ciudad`, `Us_Telefono`, `Us_Email`, `US_Contraseña`) VALUES ('', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $consulta -> bindParam(1, $pnombre);
        $consulta -> bindParam(2, $snombre);
        $consulta -> bindParam(3, $papellido);
        $consulta -> bindParam(4, $sapellido);
        $consulta -> bindParam(5, $genero);
        $consulta -> bindParam(6, $pais);
        $consulta -> bindParam(7, $estado);
        $consulta -> bindParam(8, $ciudad);
        $consulta -> bindParam(9, $telefono);
        $consulta -> bindParam(10, $email);
        $consulta -> bindParam(11, $contrasena);

        if($consulta -> execute()){
        	include "registrado.php";
        }else{
        	include "registrado2.php";
        }
}
