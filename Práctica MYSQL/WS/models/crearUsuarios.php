<?php
//IMPORTANTE incluir
include 'interfaces/ItoJson.php';
include 'models/User.php';
if(!$_POST){
    echo "Rellene el formulario"
}
else{
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $contrasena=$_POST['contrasena'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $sexo=$_POST['sexomf'];

$user=new User($nombre, $apellido, $contrasena, $telefono, $email, $sexo);

file_put_contents('datos.txt',$user->toJson(),FILE_APPEND);//esto escribe un txt los datos del nuevo usuario

/*$file_nombre="datos.txt";
$file_modo="a+";
 


$file=fopen($file_nombre, $file_modo);

fwrite($file, $user->toString());

fclose($file);*/

echo $user->toJson();/*para enseñar el json


//echo json_decode($user);

}
