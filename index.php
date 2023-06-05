<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form method="post">
        <input type="text" name="txt_metal" placeholder="Buscar metal...">
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Simbolo</th>
                <th>Nome </th>
                <th>Densidade </th>
                <th>PesoAtomico</th>
                <th>TempFusao</th>
            </tr>

        </thead>
        <tbody>
            
            <?php
                if(isset($_POST['txt_metal'])){
                    $metal = $_POST['txt_metal'];

                    require_once './DataBase.php';
                    require_once './Metal.php';
                    $data_base = new DataBase();
                    $cx = $data_base->conn();
                    
                    $cmdSql = "SELECT * FROM metal where nome like :metal";
                    echo $cmdSql;
                    
                    $cx_pronta = $cx->prepare($cmdSql);
                    $cx_pronta->bindValue('metal',"%$metal%");
                    $cx_pronta->execute();
                    if($cx_pronta->rowCount() > 0){
                        $cx_pronta->setFetchMode(PDO::FETCH_CLASS, 'Metal');
                        $lista_de_metal = $cx_pronta->fetchAll();
                        
                        foreach ($lista_de_metal as $metal) {
                            echo "
                            <tr>
                                <td>{$metal->Simbolo}</td>
                                <td>{$metal->Nome}</td>
                                <td>{$metal->Densidade}</td>
                                <td>{$metal->PesoAtomico}</td>
                                <td>{$metal->TempFusao}</td>
                            </tr>
                            ";
                        }
                    }
                    else{
                        echo '<h2>Nenhum dado encontrado!!!</h2>';
                    }
                }
            ?>
        </tbody>    
    </table>
</body>
</html>
<?php





