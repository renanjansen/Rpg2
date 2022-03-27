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
                
                
                    
                    $player1->vida -= $player2->atacar($adrenalina);
                    echo $player1->nome.' vida: '.$player1->vida.'<br>';
                    if ($player1->vida <= 10 ) {
                      
                      $player1->adrenalina = 4;
                      echo($player1->nome." em modo berseker! <br>");
                    } elseif ($player2->vida <= 10) {
                      
                      $player2->adrenalina = 4;
                      echo($player2->nome." em modo berseker! <br>");
                    }
                    $player2->vida -= $player1->atacar($adrenalina);
                    echo $player2->nome.' vida: '.$player2->vida.'<br>';
                    
                    
                    $winner = "";
                    if ($player1->vida >= 0 && $player2->vida <= 0) {
                        $winner = $player1->nome;
                        echo $winner. " ganhou! <br>";
                    } else if ($player2->vida >= 0 && $player1->vida <= 0){
                        $winner = $player2->nome;
                        echo $winner. " ganhou!<br>";
                        
                    }
                    
                    
            
                
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
    