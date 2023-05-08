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
        foreach ($cores as $nome_cor => $hex_cor) {
            echo '
            <div style="width: 100px; text-align: center; text-align: center;">
                <div 
                    style="
                        background-color: '.$hex_cor.';
                        width: 80px;
                        height: 80px;
                        border-radius: 40px;
                        border: solid 1px black        
                    "></div>
                <h2>'.$nome_cor.'</h2>
            </div>
            ';
        }
    ?>

</body>
</html>