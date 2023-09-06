<?php

require_once ("_db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'eliminar_producto':
            eliminar_producto();

        break;        
        case 'editar_producto':
        editar_producto();

        break;

        case 'insertar_productos':
        insertar_productos();

        break;    
    }

}

function insertar_productos(){

    global $conexion;
    extract($_POST);

    $consulta="INSERT INTO productos (Ejecutivo, Serie, Estado, Cantidad, Modelo, Recepción, Entrega, Venta, Progreso)
    VALUES ('$Ejecutivo', '$Serie', '$Estado', $Cantidad , '$Modelo', '$Recepción', '$Entrega', '$Venta', '$Progreso');"; 

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/usuarios/");

}
function editar_producto(){

    global $conexion;
    extract($_POST);
                
    $consulta="UPDATE productos SET Ejecutivo = '$Ejecutivo', Serie = '$Serie', Estado = '$Estado',  Cantidad = '$Cantidad', Modelo = '$Modelo', Recepción = '$Recepción', Entrega = '$Entrega', Venta = '$Venta', Progreso = '$Progreso' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}
function eliminar_producto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM productos WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}
?>