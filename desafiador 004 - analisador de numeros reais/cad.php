<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <h1>Resultado Final</h1>
        <?php 
          //var_dump($_GET);
          $num_escolhido = $_GET["numero"];          
    
          $sucessor = $num_escolhido + 1;
          $ant = $num_escolhido - 1 ;

        echo "O numero escolhido foi <strong>$num_escolhido</strong>!<br>";
        echo "Seu sucessor é $sucessor<br>";
        echo "Seu antecessor é $ant<br>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>