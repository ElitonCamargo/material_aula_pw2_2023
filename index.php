<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="tab" placeholder="Tabuada">
        <br>
        <input type="text" name="inicio" placeholder="Ínicio">
        <br>
        <input type="text" name="termino" placeholder="Término">
        <br>
        <input type="submit" name="btnCalc" value="Calcular">
    </form>
    <?php
        if(isset($_POST['btnCalc'])){
            $tab = $_POST['tab'];
            $inicio = $_POST['inicio'];
            $termino = $_POST['termino'];
            
            $x = $inicio;
            do{
                $result = $tab * $x;
                echo "$tab * $x = $result <br>";
                $x++;
            }while($x <= $termino);

            // while($x <= $termino){
            //     $result = $tab * $x;
            //     echo "$tab * $x = $result <br>";
            //     $x++;
            // }
            
        }






        // if(isset($_POST['tab'])){
        //     $tab = $_POST['tab'];
        //     $inicio = $_POST['inicio'];
        //     $termino =  $_POST['termino'];
        //     for($id = $inicio; $id <= $termino; $id++){
        //         $result = $id * $tab;
        //         echo "$tab * $id = $result<br>";
        //     }            
        // }
    ?>
</body>
</html>
<?php
// $valor = -1;
// while($valor < 101){
//     echo '<br> Valor = '.$valor;
//     $valor += 1;
// }

// do{
//     $valor += 1;
//     echo '<br> Valor = '.$valor;
// }while($valor < 100);

// $x = 0;
// for($id = 0; $id < 701; $id+=7)
// {
//     echo "7 * $x = {$id}<br>";
//     $x +=1;
// }

// $tab = 5;
// $inicio = 0;
// $termino = 10;
// for($id = $inicio; $id <= $termino; $id++){
//     $result = $id * $tab;
//     echo "$tab * $id = $result<br>";
// }
?>