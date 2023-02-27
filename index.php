<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 27/02/2023</title>
</head>
<body>

    <form method="get">
        <input type="text" name="txt_nome" placeholder="Nome">
        <br>
        <input type="text" name="txt_sobre" placeholder="Sobrenome">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <!-- IMC = peso / (altura x altura) -->

    <?php
        // -- Extraindo variável de variável
        // $n = "Eliton";
        // $nome = "n" ;
        // $variavel = "nome";
        // echo $$$variavel;

        var_dump($_GET);

        $nome = @$_GET['txt_nome'];
        $sobrenome = @$_GET['txt_sobre'];
        echo "Nome completo: $nome $sobrenome";

        $divisor = 10;
        $dividendo = 1;
        $quociente = $divisor/$dividendo;
        $resto;

        var_dump(
            $divisor,
            $dividendo,
            $quociente,
            @$resto
        );

       
    ?>
</body>
</html>