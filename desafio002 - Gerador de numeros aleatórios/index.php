<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style.css">
    <title>Sorteio de números Aleatórios</title>
</head>
<body>
    <header>
        <h1>Sorteador de números</h1>
    </header>
    <section>
        <p>Gerando um número sorteado entre 0 e 100...</p>
        <!--<form action="cad.php" method="get">
            <label for="numero">Número</label>
            <input type="text" name="numero" id="idnumero">            
            <input type="submit" value="Gerar Outro">
        </form>
        <#?php
        $gera = rand(1,100);
        echo "<p>O Valor sorteado foi $gera</p>";
        
        ?#> -->
    <form method="GET" action="index.php">
	  Número: <input type="text" name="txtNumero"/>
	<br/>
	<button type="submit">&#x1F504; Tentar Sorte</button>
</form>
<?php
    
	$enviado = $_GET["txtNumero"] ?? 0;
    //var_dump($enviado);
	$numero = 20;
    $gera = mt_rand(0,100);
    // rand() = 1951 - Linear Congrential Generator
    // mt_rand() = 1997 - Mersenne Twister
    // a partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
    // random_int(), gera números aleatórios criptograficamente seguro, mas é a função mais lenta das três

    echo "o numero sorteado foi <strong>$gera</strong> e o número que você enviou foi <strong>$enviado</strong>.<br>";

	if($gera == $numero) {
		echo "Parabéns! Você venceu com o número: ".$numero;
	} else {
		echo "Você perdeu, tente novamente.";
        }

?>
    </section>
    
</body>
</html>