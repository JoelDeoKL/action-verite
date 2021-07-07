<?php
require_once("config/Config.php");
    class MainModel{
        private static $resource;
        /**
         * @return PDO
         */
        public static function pdo(){
            if (self::$resource==null){
                // En developpement
                self::$resource = new PDO (DSN, DB_USER, DB_PWD,
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

                return self::$resource;
            } else{
                return self::$resource;
            }
        }

        /** 
         * @param string $table
         * @return mixed
         */
        public static function countTableElement($table){
            $pdo = self::pdo();
            $query = "SELECT COUNT(id) as total FROM $table";
            $sql = $pdo->query($query);

            return $sql->fetch(PDO::FETCH_OBJ)->total;
        }

        /**
         * @param $table
         * @param $condition
         * @param $valCondition
         * @param $field_selected
         * @return string
         */
        public static function selectElementOfData($table,$condition, $valCondition, $field_selected) {
            $pdo = self::pdo();
            $query="SELECT $field_selected as valeur FROM $table 
                        WHERE $condition = ?";
            $sql = $pdo->prepare($query);
            $sql->execute([$valCondition]);

            if($sql->rowCount() > 0){
                return $sql->fetch(PDO::FETCH_OBJ)->valeur;
            }

            return "undefined";
        }

        /**
         * @param table : 
         * @return lastInsertId
         */
        public static function getLasteInsertId($table){
            $query = "SELECT id FROM $table ORDER BY id DESC LIMIT 1";
            $sql = self::pdo()->query($query);

            return $sql->fetch(PDO::FETCH_OBJ)->id;
        }

    }