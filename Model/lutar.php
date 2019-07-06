<?php
    require_once "Lutador.php";

    class Lutar{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;


        function getDesafiado(){
            return $this->desafiado;
        }
        function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
        function getDesafiante(){
            return $this->desafiante;
        }
        function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }
        function getRounds(){
            return $this->rounds;
        }
        function setRounds($rounds){
            $this->rounds = $rounds;
        }
        function getAprovada(){
            return $this->aprovada;
        }
        function setAprovada($aprovada){
            $this->aprovada = $aprovada;
        }

        function marcarLuta($l1, $l2){
            if(($l1.getCategoria() == $l2.getCategoria()) && ($l1 != $l2)){
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
        }
        function lutar(){
            if($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = random_int(0, 2);
                switch($vencedor){
                    case 0:
                        echo "Empatou !";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                    break;
                    
                    case 1:
                        echo "Ganhou " . $this->desafiado->getNome();
                        $this->desafiado->ganhaLuta();
                        $this->desafiante->perderLuta();
                    break;

                    default:
                        echo "Ganhou " . $this->desafiante->getNome();
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganhaLuta();
                }
            }
        }
    }

?>