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
    <h1>Conversor de moedas v2.0</h1>
    </header>
    <main>
        <h1>Conversor de moedas v2.0</h1>
        <?php 
          $ch = curl_init("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='08-14-2020'&format=json");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $res_curl = curl_exec($ch);
            if(curl_error($ch)) {
                echo curl_error($ch);
            } else {
            //print_r($res_curl);
            $resultado = json_decode($res_curl, true);
            $valores = $resultado["value"][0];
            //Agora será possível recuperar a informação da cotação do dólar:
            $cotacao_dlr =  $valores["cotacaoCompra"] ?? 0;
            //echo $valor_dolar_diario;
            echo ('');

            echo $valores["dataHoraCotacao"];

            $real = $_GET["valor"] ?? 0;
           // var_dump($valor_em_real)."<br>";
           $dolar= $real / $cotacao_dlr;

         // Formatação vindo da biblioteca intl (internalization PHP)
         $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

         echo "<br>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");


            }
            curl_close($ch);

         
        ?>
        <p>Cotação fixa de informadas pelo 
        <a href="https://www.gov.br/pt-br" target:"_blank">Visite o Banco Central do Brasil</a>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
    
</body>
</html>