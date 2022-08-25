<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Rpg2</title>
</head>

<body class="row justify-content-center bg-dark bg-gradient">
    <div class="card mt-5 col-lg-4 mb-5" style="width: 18rem;">
        <img src=<?php
                    require './Combate.php';
                    echo $mago->imagem;
                    ?> class="card-img-top" alt="...">
        <div class="card-body ">
            <form class="row justify-content-center" name="jogo" action="#" method="POST" enctype="multipart/form-data">
                <h5 class="card-title col-lg-6">Vamos Jogar?</h5>
                <p class="card-text">
                    <?php
                    $desejaJogar = isset( $_POST['desejaJogar']);
                    if ($desejaJogar == "desejaJogarSim") {
                        $herois = [$mago, $ladra, $guerreiro];
                        $luta1 = new Combate;
                        $luta1->turn($mago, $guerreiro);
                    };
                    

                    ?></p>
                <select class="form-select form-select-lg mb-3 col-lg-4" aria-label=".form-select-lg example" name="desejaJogar" id="desejaJogar">
                    <option value="desejaJogarSim">Sim</option>
                    <option value="desejajogarNao">Não</option>

                </select>

                <input href="#" class="btn btn-primary" type="submit" value= "Confirmar" />
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
</body>

</html>