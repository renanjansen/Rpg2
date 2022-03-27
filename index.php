<?php
    
    require 'Combate.php';
    
    $herois = [$mago, $ladra, $guerreiro];
    $luta1 = new Combate;
    


    echo "<PRE>";
    foreach($herois as $heroi){
        var_dump($heroi);
    }
    var_dump($eskeleton);
    

    $luta1->turn($mago, $guerreiro);
    //$luta1->checkWinner($mago, $guerreiro);

    //var_dump($mago->jogarDado());
    //var_dump($luta);