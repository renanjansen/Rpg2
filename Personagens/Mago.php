<?php

    
    require_once './Personagem.php';

    $mago = new Personagem();
    $mago->nome = "Misha";
    $mago->vida = 50;
    $mago->ataque = 7;
    $mago->esquiva = 6;
    $mago->defesa = 4;
    $mago->especialNome = 'Magia';
    $mago->imagem = "https://images.pexels.com/photos/5701253/pexels-photo-5701253.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500";
    $mago->especialImagem = "https://i.pinimg.com/originals/2c/bc/c4/2cbcc4cbfb5f3f2005af73b58091d310.gif";