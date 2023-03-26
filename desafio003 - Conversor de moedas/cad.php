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
        
    </header>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php 
          //var_dump($_GET["valor"]);
          $real = (float) $_GET["valor"] ?? 0; 
          //$real = number_format($real, 2, ",", ".");
          $cotacao = 5.21;         
    
         $dolar = $real / $cotacao;
         // Mostrar o resultado

         //echo "Seus R$ ". number_format($real, 2,',','0') . " equivalem a U$ " . number_format($dolar,  2, '.', ',') . " americanos!";
         
         // Formatação vindo da biblioteca intl (internalization PHP)
         $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
         echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
         echo "<br>Cotação fixa de <strong>R$ 5,21</strong> informadas diretamente no código.";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
    
</body>
</html>