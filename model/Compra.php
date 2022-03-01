<?php

    class Compra{
        
        public $compraID;
        public $clienteID;
        public $enderecoID;
        public $produtoID = array();
        public $valor;
        public $descontos;
        public $total;
        public $descontoNome;
        public $data;
        public $pagamento;
        
        function __construct($compraID, $clienteID, $enderecoID, $produtoID, $valor, $descontos, $total, $descontoNome, $data, $pagamento){
            $this->compraID = $compraID;
            $this->clienteID = $clienteID;
            $this->enderecoID = $enderecoID;
            $this->produtoID = $produtoID;
            $this->valor = $valor;
            $this->descontos = $descontos;
            $this->total = $total;
            $this->descontoNome = $descontoNome;
            $this->data = $data;
            $this->pagamento = $pagamento;
        }
        
    }

?>