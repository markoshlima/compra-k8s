<?php

    header("Content-Type:application/json");
    include_once "./controllers/CompraController.php";
    
    $controller = new CompraController();
    
    if(!empty($_GET['compraID'])){
    	$result = $controller->getCompra($_GET['compraID']);
    	echo $result;
    }
    else if(!empty($_GET['clienteID'])){
        $result = $controller->getCompraByCliente($_GET['clienteID']);
    	echo $result;
    }else{
        $result = $controller->getCompras();
    	echo $result;
    }
    
?>

