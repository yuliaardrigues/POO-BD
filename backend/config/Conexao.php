<?php

class Conexao {
    private static $instance;

    public static function getConn(){

        if (!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;dbname=db_cia_aerea', 'root', '');
        }
        return self::$instance;
    }
}
