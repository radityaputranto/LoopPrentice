<?php
    class Db {
        private static $instance = NULL;

        private function __construct() {}

        private function __clone() {}

        public static function getInstance() {
            if (!isset(self::$instance)) {
               $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              //self::$instance = new PDO("mysql:host=localhost;dbname=namiapps_prod", "root", "zJw(t4NF']Gq", $pdo_options);
               self::$instance = new PDO("mysql:host=localhost;dbname=namiapps_prod_local", "root", "ardi", $pdo_options);
            }
            return self::$instance;
        }
    }
?>