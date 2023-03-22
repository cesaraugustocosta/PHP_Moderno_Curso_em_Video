<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings PHP</title>
</head>
<body>
    <h1>Manipulação de Strings PHP</h1>
    <?php
        $doubleQuoted = "Curso";
        $nome = 'Cesar';
        $sobrenome = "Augusto \u{1F596}"; 
        echo "$nome $sobrenome";
        const CANAL = "Curso em Video \u{1F499}";
        echo 'Eu adoro o \n'. CANAL ;

        $nom = "Rodrigo";
        $snom = "Nogueira";

        echo "$nom " .'"Minotauro"'. " $snom";

    
    ?>
</body>
</html>