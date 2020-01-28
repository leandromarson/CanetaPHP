<?php


class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada = true;
    
    function __construct($modelo, $cor, $ponta) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->carga = 100;
        $this->tampada= true;
    }

    
    function rabiscar($contador){
        
        for($x=0;$x<$contador;$x++){
            if($this->getTampada()==false && $this->getCarga()>0){            
                echo "<p>Rabiscando...<br></p>";
                $this->setCarga($this->getCarga()-1);
                echo "<p>A carga é de [".$this->getCarga()."]<br></p>";
            }elseif($this->getTampada()==false && $this->getCarga()<=0){
                echo "<p>A caneta está vazia<br></p></span>";
            }elseif($this->getTampada()==true){
                echo "<p>A caneta está tampada<br></p>";
            }
        }
    }
    
    function tampar(){
        if($this->getTampada()==false){
            $this->setTampada(true);
            echo "<p>Tampando...<br></p>";
        }else{
            echo "<p>A caneta já está tampada<br></p>";
        }
        
    }
    
    function destampar(){
        if($this->getTampada()==true){
            $this->setTampada(false);
            echo "<p>Destampando...<br></p>";
        }else{
            echo "<p>A caneta já está destampada<br></p>";
        }
    }
    
    function getModelo() {
        return $this->modelo;
    }

    function getCor() {
        return $this->cor;
    }

    function getPonta() {
        return $this->ponta;
    }

    function getCarga() {
        return $this->carga;
    }

    function getTampada() {
        
        return $this->tampada;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function setCarga($carga) {
        $this->carga = $carga;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }


    
    
}
