<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritméticas</title>
</head>
<body>
    <?php
        //$num = 50/2+(3**2);
        $num = "2"+"2";
        echo "O resultado é $num";

        $num_escolhido = 200;
        $sucessor = $num_escolhido + 1;
        $ant = 1 - $num_escolhido;

        echo "O numero escolhido foi $num_escolhido";
        echo "Seu sucessor é $sucessor";
        echo "Seu antecessor é $ant";

    ?>
</body>
</html>