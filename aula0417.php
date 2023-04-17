<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    // $clubes =[
    //     ['nome'=>'América Mineiro'  ,'estadio'=>'Independência'],
    //     ['nome'=>'Bahia'            ,'estadio'=>'Arena Fonte Nova'],
    //     ['nome'=>'Ceará'            ,'estadio'=>'Arena Castelão']
    // ];
    // echo "<h1>Nossa array local</h1>";
    // var_dump($clubes);

    // echo "<hr>";


    $db = new PDO("mysql:host=localhost;dbname=campeonato_futbol", 'root', '');

    $db_query = $db->prepare("SELECT * FROM `clube`");
    $db_query->execute();

    $bd_clubes = [];
    if($db_query->rowCount()){
        $bd_clubes = $db_query->fetchAll();
    }


    // echo "<h1>Dados no banco</h1>";

    // var_dump($bd_clubes);

?>
<table class="table">
    <thead>
        <tr>
            <th>Clube</th>
            <th>Estádio</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($bd_clubes as $clube) {
                echo '<tr>
                        <td>'.$clube['nome'].'</td>
                        <td>'.$clube['estadio'].'</td>
                    </tr>';
            }
        ?>        
    </tbody>
</table>
</body>
</html>

