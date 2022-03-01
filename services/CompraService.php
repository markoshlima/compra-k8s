<?php

    include_once "./model/Compra.php";

    class CompraService{
        
        var $compras = array();

        function __construct(){
            $this->loadCompras();
        }
        
        function getCompras(){
            return $this->compras;
        }
        
        function getCompra($compraID){
            $results = array();
            for ($i = 0; $i < count($this->compras); $i++) {
                if($this->compras[$i]->compraID == $compraID){
                    $results[] = $this->compras[$i];
                }
            }
            return $results;
        }
        
        function getCompraByCliente($clienteID){
            $results = array();
            for ($i = 0; $i < count($this->compras); $i++) {
                if($this->compras[$i]->clienteID == $clienteID){
                    $results[] = $this->compras[$i];
                }
            }
            return $results;
        }
        
        function loadCompras(){
            $date = new DateTime();
            $this->compras[] = new Compra(1, 1, 2, [2,3,4], 2000, 0, 2000, '', $date->getTimestamp(), 'Boleto');
            $this->compras[] = new Compra(2, 3, 1, [3,4], 1500, 10, 1490, 'Cupom Natal', $date->getTimestamp(), 'Cartão');
            $this->compras[] = new Compra(3, 3, 1, [1,9,5,2,3,4], 6000, 200, 5800, 'Cupom Dia das Maes', $date->getTimestamp(), 'Pix');
            $this->compras[] = new Compra(4, 1, 2, [8], 2000, 0, 2000, '', $date->getTimestamp(), 'Boleto');
            $this->compras[] = new Compra(5, 1, 2, [1,2,3,5,9], 3500, 500, 3000, 'Cupom Carnaval', $date->getTimestamp(), 'Boleto');
            $this->compras[] = new Compra(6, 1, 3, [2], 100, 0, 100, '', $date->getTimestamp(), 'Cartão');
            $this->compras[] = new Compra(7, 1, 3, [2,9], 450, 0, 450, '', $date->getTimestamp(), 'Boleto');
            $this->compras[] = new Compra(8, 2, 1, [1,7,8], 634.66, 0, 634.66, '', $date->getTimestamp(), 'Pix');
            $this->compras[] = new Compra(9, 1, 1, [6], 150.45, 10, 140.4, 'Cupom Pascoa', $date->getTimestamp(), 'Pix');
            $this->compras[] = new Compra(10, 2, 1, [6,7], 665, 0, 665, '', $date->getTimestamp(), 'Pix');
        }
        
    }

?>