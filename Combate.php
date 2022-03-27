<?php 


    require './Personagens/Mago.php';
    require './Personagens/Ladra.php';
    require './Personagens/Guerreiro.php';
    require './Personagens/Eskeleton.php';


    
    class Combate {
  
    public $player1;
    public $player2;

        

    public function turn($player1, $player2){
            do {
                
                
                
                    $player1->vida -= $player2->atacar();
                    echo $player1->nome.' vida: '.$player1->vida.'<br>';
                    $player2->vida -= $player1->atacar();
                    echo $player2->nome.' vida: '.$player2->vida.'<br>';
                
                } while ($player1->vida >= 0 && $player2->vida >= 0);

    }
    public function checkWinner($player1, $player2){

        if ($player1->vida >= 0 && $player2->vida <= 0) {
            echo $player1. "ganhou!";
        } else {
            echo $player2. "ganhou!";
        }

    }
}
    