<?php
    session_start();
    if(!isset($_SESSION['Us_Id']) && !isset($_SESSION['Us_PNombre']) && !isset($_SESSION['Us_PApellido'])){
    	header("Location: Inicio.php");
    }
?>