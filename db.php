<?php
/**
 * Created by PhpStorm.
 * User: thuanpt
 * Date: 19/07/2017
 * Time: 22:55
 */
class DB extends PDO
{
    const HOST = 'localhost';
    const PORT = '3306';
    const USER = 'root';
    const PASS = 'root';
    const DB_NAME = 'jupiter';

    //private static $_db;
    private $stmt;
    private static $error;

    private static $tableName;
    //private static $sql;

    public static function getDBConnect()
    {
        $dsn = "mysql:host=". self::HOST . ";port=" . self::PORT . ";dbname=" . self::DB_NAME ;
        $option  = array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

        try {
            $_db = new PDO($dsn, self::USER, self::PASS, $option);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            self::$error = $e->getMessage();
        }

        return $_db;

    }

    public static function getAll($table)
    {
        $data = self::getDBConnect()->prepare("SELECT * FROM $table");
        $data->execute();
    }

    public static function table($tableName)
    {
        self::$tableName = $tableName;
    }

//    public static function querySQL($sql)
//    {
//        self::$sql = $sql;
//    }
}

$data = DB::getDBConnect();

var_dump(get_object_vars($data));