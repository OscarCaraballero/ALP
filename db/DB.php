<?php

abstract class DB {

    const DBHOST = "";
    const DBUSER = "";
    const DBPASS = "";
    const DBNAME = "";

    protected $conn;

    protected function __construct($dbhost = "", $dbuser = "", $dbpass = "", $dbname = "") {

        $dbhost = (!empty($dbhost)) ? $dbhost : self::DBHOST;
        $dbuser = (!empty($dbuser)) ? $dbuser : self::DBUSER;
        $dbpass = (!empty($dbpass)) ? $dbpass : self::DBPASS;
        $dbname = (!empty($dbname)) ? $dbname : self::DBNAME;

        try {
            $this->conn = new PDO("mysql:host={$dbhost};dbname={$dbname};", $dbuser, $dbpass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("SET NAMES 'utf8'; SET time_zone = 'Europe/London';");
        } catch (Exception $e) {
            return "No se ha podido establecer contacto con la base de datos";
        }
    }

}
