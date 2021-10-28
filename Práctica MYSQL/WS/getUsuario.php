<?php
public function modificarAlumno(){
        if(!empty($_GET['id'])){
            $id=$_GET['id'];
            $producto=new Producto();
            $producto->setId($id);
            $product=$producto->getOne();
            
        }else{
            echo "ERROR - No has pasado el GET";
        }
    }