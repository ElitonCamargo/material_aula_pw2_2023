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
        $personagem = [
            'Superman' => [
                'imagem'=> 'https://lh5.googleusercontent.com/proxy/MQkMmg8KnVvPqJzknZMtlVXA2bqShYRZeYJredRJaUAs5ZqFs-jsnTrevriJBUdiM2lTWsNESh3-ShOO2_iS_Uefwe3DWTZan2rofp2A47yT_16nfVAFnaqFRgW3mpl8ITCx-Tnzf8utdcUQIL4=s0-d',
                'editora'=> 'dc',
                'data_de_criacao' => '1938',
                'criador' => 'José ....',
                'sobre' => 'Este foi um ....'
            ],
            'Superman2' => [
                'imagem'=> 'https://icon-library.com/images/2018/228467_superman-dc-comics-superman-png-hd-png-download.png',
                'editora'=> 'dc',
                'data_de_criacao' => '1938'
            ],
            'Batman' => [
                'imagem' => 'https://th.bing.com/th/id/OIP.FbeC_ooBCK9v3JlQqtd0wQHaEK?pid=ImgDet&rs=1',
                'editora'=> 'dc',
                'data_de_criacao' => '1938'
            ]
        ];
        require_once './component/carf_personagem.php';
        foreach ($personagem as $key => $value) {
            exibir_card($key,$value['imagem'],$value['editora']);
        }
    ?>
</body>
</html>