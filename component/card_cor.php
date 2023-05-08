<?php 
function cardCor(string $nome_cor, string $hex_cor){
    echo '
        <div style="width: 100px; text-align: center; text-align: center;">
            <div 
                style="
                    background-color: '.$hex_cor.';
                    width: 80px;
                    height: 80px;
                    border-radius: 40px;
                    border: solid 1px black;
                    margin: 0 auto;      
                "></div>
            <h2>'.$nome_cor.'</h2>
        </div>
    ';
}