<?php

 class User implements IToJson{
     public $nombre;
     public $apellido;
     public $email;
     public $contrasena;
     public $telefono;


 
  function __construct($nombre=null,$apellido=null,$email=null,$contrasena=null,$telefono=null,$sexo=null){
       $this->setNombre($nombre);
       $this->setApellido($apellido);
       $this->setContraseña($contraseña);
       $this->setTelefono($telefono);
       $this->setEmail($email);
       $this->setSexo($sexo);
}
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setApellido($apellido){
        $this->apellido=$apellido;
    }
    function getApellido(){
        return $this->apellido;
    }
    }
    function setEmail($email){
        $this->email=$email;
    }
    function getEmail(){
        return $this->email;
    }
    function setContrasena($contrasena){
        $this->contrasena=$contrasena;
    }
    function getContrasena(){
        return $this->contrasena;
    }
    function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    function getTelefono(){
        return $this->telefono;
    }
    
    function setSexo($sexo){
        $this->sexo=$sexo;
    }
    function getSexo(){
        return $this->sexo;
    }
    public function toString()
    {
       return "Nombre: ".$this->getNombre().", Apellido: ".$this->getApellido().", Telefono: ".$this->getTelefono()
       .", Email: ".$this->getEmail().", Sexo: ".$this->getSexo();
    }
 
    public function toJson()
    {
       return json_encode([
          "nombre" => $this->getNombre(),
          'apellido'=>$this->getApellido(),
          'telefono'=>$this->getTelefono(),
          'email'=>$this->getEmail(),
          'sexo'=>$this->getSexo()
       ]);
    }
 }