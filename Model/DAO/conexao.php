<?php

abstract class conexao
{
    public static function getInstance()
    {
        $dsn = 'mysql:host=localhost;dbname=pokedexphp';
        $user = 'root';
        $pass = '';
        try {
            $pdo = new PDO($dsn, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}