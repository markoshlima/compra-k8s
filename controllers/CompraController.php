<?php

    include_once "./services/CompraService.php";

    class CompraController{
        
        var $service;
        
        function __construct(){
            $this->service = new CompraService();
        }
        
        function getCompras(){
            return json_encode($this->service->getCompras());
        }
        
        function getCompra($compraID){
            return json_encode($this->service->getCompra($compraID));
        }
        
        function getCompraByCliente($clienteID){
            return json_encode($this->service->getCompraByCliente($clienteID));
        }
        
    }

?>