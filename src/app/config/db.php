<?php
    class Database {
        private function  __construct(){

        }
        public function get_DB(){
            $db_host="mysql";
            $username="myha";
            $password="secret";
            $db_name="sell";
            $port="3306";
            $conn = mysqli_connect($db_host, $username, $password, $db_name, $port) or die ("Khong the ket noi den CSDL MYSQL");
            return $conn;
        }
    }
?>