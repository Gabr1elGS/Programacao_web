<?php
    class Funcionario {
        private $nomeCompleto;
        private $dataNasc;
        private $funcao;
        private $telefone;
        private $corFundo;
        private $email;
        private $salarioLiquido;
        private $salarioBruto;

    public function getNomeCompleto (){
        return $this -> nomeCompleto;
    }
    public function getDataNasc (){
        return $this -> dataNasc;
    }
    public function getFuncao (){
        return $this -> funcao;
    }
    public function getTelefone () {
        return $this -> telefone;
    }
    public function getCorFundo () {
        return $this -> corFundo;
    }
    public function getEmail() {
        return $this -> email; 
    }
    public function getSalarioLiquido() {
        return $this -> salarioLiquido;
    }
    public function getSalarioBruto() {
        return $this -> salarioBruto;
    }    

    public function calculaDesconto () {
        return ($this -> salarioBruto - $this -> salarioLiquido);
    }

    public function setNomeCompleto($nomeCompleto) { 
        $this->nomeCompleto = $nomeCompleto; }
    public function setDataNasc($dataNasc) { 
        $this->dataNasc = $dataNasc; }
    public function setFuncao($funcao) { 
        $this->funcao = $funcao; }
    public function setTelefone($telefone) { 
        $this->telefone = $telefone; }
    public function setCorFundo($corFundo) { 
        $this->corFundo = $corFundo; }
    public function setEmail($email) { 
        $this->email = $email; }
    public function setSalarioLiquido($salarioLiquido) { 
        $this->salarioLiquido = $salarioLiquido; }
    public function setSalarioBruto($salarioBruto) { 
        $this->salarioBruto = $salarioBruto; }
}

?>
