<?php
    class Personagem{


        public $nome;
        public $vida;
        public $ataque;
        public $esquiva;
        public $defesa;
        public $especialNome;
        public $imagem;
        public $especialImagem;

        public function jogarDado(){

        $resultado = "";
            $ladoDoDado = rand(1,20);

            if ($ladoDoDado >= 1 && $ladoDoDado <= 5) {

                //echo $ladoDoDado.' Errou!<br>';
                $resultado = 0;
          
              } else if ($ladoDoDado > 5 && $ladoDoDado <= 15) {
                
               //echo $ladoDoDado.' bem sucedido!<br>';
                $resultado = 5;
          
              } else {
                
                //echo $ladoDoDado.' perfeito!<br>';
                $resultado = 10;
          
              }

            return $resultado;
        }
        
        public function atacar(){

            $dano = 0;
            switch ($this->jogarDado()) {
                case '5':
                    $dano = $this->ataque;
                    break;
                case '10':
                    $dano = $this->especial(2);
                break;
                    case '0':
                        $dano = 0; 
                    break;
                        
            }
            

            echo 'Ataque do '.$this->nome.' dano de: '.$dano.'<br>';

            return $dano;
            
        }

        public function defender($dano){

            
            $status = '';
            switch ($this->jogarDado()) {
                case 5 || 10:
                    $dano = 0;
                    $status = ' bem sucedida ';
                break;
                    case '0':
                        $dano = $dano;
                        $status = ' mal sucedida '; 
                    break;
                    
                    echo 'Defesa '.$status.' do '.$this->nome.' recebeu o dano de: '.$dano.'<br>';
                    
            }

        return $dano;
        }

        public function esquivar(){

            echo $this->nome.  ' esquivou!<br>';
            $esquiva = '';
            $this->jogarDado();
            switch ($this->jogarDado()) {
                case '5':
                    $esquiva = 5;
                    break;
                case '10':
                    $esquiva = 10;  
                    break;
                    case '0':
                        $esquiva = 0;  
                        break;
            }

            return $esquiva;
            


        }


        // Adrenalina será parametrizada de acordo com os pontos de vidas e itens recolhidos no jogo
        public function  especial ($adrenalina) {
            return $this->ataque * $adrenalina;
        }
    }

    