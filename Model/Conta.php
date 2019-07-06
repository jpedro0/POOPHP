<?php
    class Conta{

        private $numConta;
        private $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function Conta(){
            $this->saldo = 0;
            $this->status = false;
        }

        public function getNumConta(){
            return $this->numConta;
        }
        public function setNumConta($n){
            $this->numConta = $n;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($t){
            $this->tipo = $t;
        }
        public function getDono(){
            return $this->dono;
        }
        public function setDono($d){
            $this->dono = $d;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($sta){
            $this->status = $sta;
        }



        public function AbrirConta($tipo){
            if($tipo == "Cp"){
                $this->tipo = "Cp";
                $this->saldo = 150;
                $this->status = true;
            }
            else{
                $this->tipo = "Cc";
                $this->saldo = 50;
                $this->status = true;
            }
        }
        public function FecharConta(){
            if($this->saldo == 0){
                return null;
            }else{
                Sacar();
            }
        }
        public function Depositar(){
            if($this->status == true){
                
            }else{
            }

        }
        public function Sacar(){
            if($this->status == true){
                
            }else{
                if($this->saldo != 0){

                }
            }
        }
        public function pagarMensal(){
            if($this->tipo == "Cc"){
                $this->saldo -= 12;
            }
            else{
                $this->saldo -= 20;
            }
        }
    }


?>