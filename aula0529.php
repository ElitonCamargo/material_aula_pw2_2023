<?php
    $string_cx = "mysql:host=localhost;dbname=campeonato_futbol";
    $user = "root";
    $senha = "";
    $db = new PDO($string_cx,$user,$senha);
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
        $db_preparado = $db->prepare('SELECT * FROM clube');
        if($db_preparado->execute()){
            if($db_preparado->rowCount() > 0){
                $db_preparado->setFetchMode(PDO::FETCH_CLASS, 'stdClass');            
                $clubes = $db_preparado->fetchAll();
                foreach ($clubes as $clube) {
                    echo '<h2>Clube: '.$clube->nome.'</h2>';
                }
            }
            else{
                echo 'Nenhum registro encontrado';
            }            
        }
    ?>
</body>
</html>