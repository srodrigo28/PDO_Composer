<?php
require_once 'crudModalidades.php';
class Modalidades extends Connection implements crudModalidades{
    private $id, $modalidade, $mensalidade;

    protected function setId($id){
        $this->id = $id;
    }
    protected function setModalidade($modalidade){
        $this->modalidade = $modalidade;         
    }
    protected function setMesalidade($mensalidade){
        $this->mensalidade = $mensalidade;        
    }
    //Getters: recebem informações
    protected function getId(){
        return $this->id;
    }
    protected function getModalidade(){
        return $this->modalidade;
    }
    protected function getMensalidade(){
        return $this->mensalidade;
    }
    //Métodos para formulários
    public function dadosDoFormulario($modalidade, $mensalidade){
        $this->setModalidade($modalidade);
        $this->setMensalidade($mensalidade);
    }
    //Métados da interface
    public function create(){
        echo $this->getModalidade();
        echo $this->getMensalidade();
    }
    
    public function read(){  }
    public function update($modalidade, $mensalidade, $id){  }
    public function delete($id){  }
}