<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1</title>
</head>
<body>
    <form method="get">
        <input type="number" name="n1"> +
        <input type="number" name="n2"> =
        <input type="submit" value="Calc">
    </form>
    <?php
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $soma = $n1 + $n2;
        echo "Resultado: $soma";
        // $nome = "Fernando";
        // $idade = 21;
        // $salario = 2000.99;

        // print "<p>$nome tem $idade anos e ganha R$$salario</p>\n";
       
        // print '<p>'.$nome .' tem '.$idade.' anos e ganha R$'.$salario.'</p>';

        // $nome = "Pedro";
        // $idade = 21000000;
        // $salario = 2000.99;
        // $bonus = "1000";
        // $habilitado = true;
        
        // var_dump($nome, $idade, $salario, $habilitado);

  
    ?>
    
</body>
</html>