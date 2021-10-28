<?php
 include 'accesoPDO.php';
 include 'conexion.php';
 include 'config.php';

 $servidor="locahost";
 $usuario="root";
 $clave="";
 $bD="colegio";

 $link=mysqli_connect($servidor,$usuario,$clave,$bD);
 

 if(!$link){
     echo "Error en la conexión con la BD";
 }


if(isset($_GET(['formulario']))) {
    
    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $password=$_GET['password'];
    $telefono=$_GET['telefono'];
    $email=$_GET['email'];
    $sexo=$_GET['sexo'];
    $fecha_nacimiento=$_GET['fecha_nacimiento'];

    $modificarBD = "UPDATE alumno SET $GET WHERE ('$id,
                                                $nombre,
                                                $apellido,
                                                $password,
                                                $telefono,
                                                $email,
                                                $sexo,
                                                $fecha_nacimiento')";

    $ejecutarInsert= mysqli_query($link,$modificarBD);
