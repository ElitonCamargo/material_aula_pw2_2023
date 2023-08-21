<?php
class DataBase{
    private $host = 'localhost';
    private $dbname = 'empresas_mineradoras';
    private $user = 'root';
    private $senha = '';

    public function conectar(){
        return new PDO("mysql:host=$this->host;
            dbname=$this->dbname",$this->user,$this->senha);
    }
}