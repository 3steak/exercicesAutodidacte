<?php

namespace App;

class App
{
    // création de CONSTANTE et leurs valeurs par défaut
    const DB_NAME = 'blog';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = 'localhost';

    // sauvegarde la connexion a la base de données 
    private static $database;

    // le getter qui initialise la connection
    public static function getDb()
    {
        if (self::$database === null) {
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }
}
