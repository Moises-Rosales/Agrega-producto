<?php
$con = conecta();

$id_producto = $_REQUEST['id producto'];
$cantidad = $_REQUEST['cantidad'];
$id_usuario = $_SESSION['id_usuario'];

///Obtener pedido

$sql = "SELECT * FROM pedidos WHERE id_usuario = $id_usuario AND status = 0";
$num = $res->num_rows;

if($num ==0){
    $fecha = date('Y-m-d h:i:s');
    $sql = "INSERT INTO pedidos(fecha,id_usuario) VALUES ('$fecha',$id_usuario)";

    $id_pedido = $con->insert_id;
} else {
    $id_pedido = $row['id'];
}

///Obtener costo

$sql = "SELECT costo FROM productos WHERE id = $id_producto";

$costo = $row['costo'];

$sql = "INSERT INTO pedidos_productos (id pedido, id producto,cantidad,precio)VALUES($id_pedido,$id_producto;$cantidad,$costo)";



?>