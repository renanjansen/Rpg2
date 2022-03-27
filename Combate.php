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
                
                
                    $adrenalina = 2;
                    $player1->vida -= $player2->atacar($adrenalina);
                    echo $player1->nome.' vida: '.$player1->vida.'<br>';
                    $player2->vida -= $player1->atacar($adrenalina);
                    echo $player2->nome.' vida: '.$player2->vida.'<br>';
                    
                    if ($player1->vida <= $player1->vida/2 || $player2->vida == $player2->vida/2) {
                        
                        $adrenalina = 4;
                    }
                    $winner = "";
                    if ($player1->vida >= 0 && $player2->vida <= 0) {
                        $winner = $player1->nome;
                        echo $winner. "ganhou!";
                    } else if ($player2->vida >= 0 && $player1->vida <= 0){
                        $winner = $player2->nome;
                        echo $winner. " ganhou!";
                        
                    }
                    
            
                
                } while ($player1->vida >= 0 && $player2->vida >= 0);

    }
    
}
    