<?php
if(!$_POST) {
    echo "Rellene el formulario"
}

else
{
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $contrasena=$_POST['contrasena'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $sexo=$_POST['sexomf'];

$user=new User($nombre, $apellido, $contrasena, $telefono, $email, $sexo);


$file_nombre="datos.txt";
$file_modo="a+";


$file=fopen($file_nombre, $file_modo);

fwrite($file, $user->toString());

fclose($file);



echo json_decode($user);

}