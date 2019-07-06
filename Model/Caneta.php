<?php

class Caneta{
    private $modelo;
    private $carga;
    private $cor;
    private $ponta;
    private $tampada;

    public function Caneta($m, $c, $cor, $po, $tam){
        $this->setModelo($m);
        $this->setCarga($c);
        $this->setCor($cor);
        $this->setPonta($po);
        $this->setTampada($tam);
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getCarga(){
        return $this->carga;
    }
    public function setCarga($c){
        $this->carga = $c;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($pon){
        $this->ponta = $pon;
    }
    public function getTampada(){
        return $this->tampada;
    }
    public function setTampada($tam){
        $this->tampada = $tam;
    }
    
    public function rabiscar(){
        if($this->getTampada() != true){
            echo "<p>Estou Rapiscando.....</p>";
        }else{
            echo "<p>Tampa esta tampada !!!</p>";
        }
    }
    public function tampar(){
        $this->setTampada(true);
    }
    public function destampar(){
        $this->setTampada(false);
    }
}


?>