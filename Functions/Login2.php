<?php
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $consulta = $pdo -> prepare("SELECT * FROM tblusuario WHERE US_Email = :email");

    $consulta -> bindParam(":email", $email);
    $consulta -> execute();

    $fila = $consulta -> fetch();

   if(password_verify($contrasena, $fila['Us_Contraseña'])){
    	session_start();
    	$_SESSION['Us_Id'] = $fila['Us_Id'];
    	$_SESSION['Us_PNombre'] = $fila['Us_PNombre'];
        $_SESSION['Us_SNombre'] = $fila['Us_SNombre'];
    	$_SESSION['Us_PApellido'] = $fila['Us_PApellido'];
        $_SESSION['Us_SApellido'] = $fila['Us_SApellido'];
        $_SESSION['Us_Genero'] = $fila['Us_Genero'];
        $_SESSION['Us_Pais'] = $fila['Us_Pais'];
        $_SESSION['Us_Estado'] = $fila['Us_Estado'];
        $_SESSION['Us_Ciudad'] = $fila['Us_Ciudad'];
        $_SESSION['Us_Telefono'] = $fila['Us_Telefono'];
    	$_SESSION['Us_Email'] = $fila['Us_Email'];
    	$_SESSION['token'] = password_hash(uniqid(mt_rand(), true), PASSWORD_DEFAULT, ['cost' => 10]);
    	header("Location: Inicio.php");
    }else{
    	echo "<center><p class='h2' style='color: #FFF;'>¡Usuario no registrado!</p></center>";
    }
?>