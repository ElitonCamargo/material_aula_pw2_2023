<?php

// $produtos = array(
//     "Amarelo",
//     "Vermelho",
//     "Branco"
// );
// $produtos[] = "Verde";
// $produtos[] = "Preto";

// var_dump($produtos);
// $produtos = array_reverse($produtos);
// var_dump($produtos);

$cores = [
    'Amarelo'   =>'#fff200',
    'Vermelho'  =>'#f00',
    'Branco'    =>'#fff',
    'Verde'     =>'#0f0',
    'Preto'     =>'#000'
];

// var_dump(array_reverse($produtos));
?>
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
        require_once './component/card_cor.php';

        cardCor('Roxo','#aa17ff');


        foreach ($cores as $nome_cor => $hex_cor) {
            cardCor($nome_cor,$hex_cor);
        }
    ?>

</body>
</html>