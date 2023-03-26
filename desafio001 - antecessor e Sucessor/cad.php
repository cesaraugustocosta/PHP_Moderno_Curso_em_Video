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
        <h1>Antecessor e Sucessor</h1>
    </header>
    <main>
        <h2>Resultado Final</h2>
        <?php 
          //var_dump($_GET);
          $num = $_GET["numero"] ?? 0;          
    
          $suc = $num + 1;
          $ant = $num - 1 ;

        echo "O numero escolhido foi <strong>$num</strong>!<br>";
        echo "Seu sucessor é $suc<br>";
        echo "Seu antecessor é $ant<br>";
        ?>
        <p><button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button></p>
    </main>
    
</body>
</html>