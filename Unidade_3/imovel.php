<?php
    class Imovel {
        private $tipo;
        private $Cep;
        private $numero;
        private $complemento;
        private $num_quartos;
        private $num_banheiros;
        private $area_const;
        private $valorImovel;

        public function __construct($tipo, $cep, $numero, $complemento, $num_quartos, $num_banheiros, $area_const, $valorImovel) {
            $this->tipo = $tipo;
            $this->Cep = $cep;
            $this->numero = $numero;
            $this->complemento = $complemento;
            $this->num_quartos = $num_quartos;
            $this->num_banheiros = $num_banheiros;
            $this->area_const = $area_const;
            $this->valorImovel = $valorImovel;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function getCep() {
            return $this->Cep;
        }

        public function getNumero() {
            return $this->numero;
        }

        public function getComplemento() {
            return $this->complemento;
        }

        public function getNum_quartos() {
            return $this->num_quartos;
        }

        public function getNum_banheiros() {
            return $this->num_banheiros;
        }

        public function getArea_const() {
            return $this->area_const;
        }

        public function getValorImovel() {
            return $this->valorImovel;
        }

        public function Previsao_Iptu() {
            if ($this->num_banheiros > 2) {
                return $this->valorImovel * 0.07;
            } else {
                return $this->valorImovel * 0.05;
            }
        }
    }
?>

