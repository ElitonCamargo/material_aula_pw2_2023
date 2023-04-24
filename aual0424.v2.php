<?php
// header('Content-type: application/json');

$loja = [
    "Volwswagen"=>[
        "carros"=>[
            ["nome"=>"Fusca",   "ano"=>"1966"],
            ["nome"=>"Gol",     "ano"=>"2000"]
        ],
        "suvs"=>[
            ["nome"=>"Tiguan",  "ano"=>"2020"],
            ["nome"=>"Nivus",   "ano"=>"2022"]
        ]
    ]
    // "Fiat"=>[

    // ],
    // "Ford"=>[

    // ]
];

var_dump(json_encode($loja));
?>