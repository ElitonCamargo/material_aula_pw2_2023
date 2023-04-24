<?php

$clubes = [
    ["nome"=>"América Mineiro", "estadio"=>"Independência"],
    ["nome"=>"Bahia",           "estadio"=>"Arena Fonte Nova "],
    ["nome"=>"Botafogo",        "estadio"=>"Nilton Santos"],
    ["nome"=>"Botafogo",        "estadio"=>"Nilton Santos"],
    ["nome"=>"Fluminense",      "estadio"=>"Maracanã"]
];

//var_dump($clubes);



?>

<table>
    <tr>
        <th>Clube</th>
        <th>Estádio</th>
    </tr>
    <?php
    // foreach($clubes as $clube)
    // {
    //     echo '
    //         <tr>
    //             <td>'.$clube['nome'].'</td>
    //             <td>'.$clube['estadio'].'</td>
    //         </tr>
    //     ';
    // }

    //var_dump($clubes[3]['nome'],$clubes[3]['estadio']);

    // for($x = 0; $x < count($clubes); $x++){
    //     echo '
    //         <tr>
    //             <td>'.$clubes[$x]['nome'].'</td>
    //             <td>'.$clubes[$x]['estadio'].'</td>
    //         </tr>';
    // }

    $x=0;
    while($x < count($clubes)){
        echo '
        <tr>
            <td>'.$clubes[$x]['nome'].'</td>
            <td>'.$clubes[$x]['estadio'].'</td>
        </tr>';
        $x++;
    }
    ?>
   
</table>
