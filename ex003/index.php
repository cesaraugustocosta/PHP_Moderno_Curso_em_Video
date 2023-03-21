<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Cesar";
        $sobrenome = "Augusto";
        $salario = 2500.75;
        $nomeCompletoCliente =  "Camel Case";
        $telefone_contato_fornecedor = "Snake Case";


        const PAIS = "Brasil";

        echo "Muito prazer,  $nome $sobrenome! Você mora no ". PAIS . " seu salário é R$ $salario";
    ?>
</body>
</html>