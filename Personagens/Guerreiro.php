<?php
    
    
    require_once './Personagem.php';

    $guerreiro = new Personagem();
    $guerreiro->nome = "Yolo";
    $guerreiro->vida = 70;
    $guerreiro->ataque = 15;
    $guerreiro->esquiva = 7;
    $guerreiro->defesa = 7;
    $guerreiro->especialNome = 'Espadada';
    $guerreiro->imagem = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgCi8jsEmVqdgzMTL4NoW0g0jwQhbCS5WpUg&usqp=CAU";
    $guerreiro->especialImagem = "https://i.pinimg.com/originals/86/71/51/8671510553ab7803d802762c01ab736d.gif";
    