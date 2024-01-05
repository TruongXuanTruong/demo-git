<?php
namespace connectMysql;

use mysqli;

class DatabaseConnectionMySql
{
    CONST DATA_BASE_IP = "localhost";
    CONST DATA_BASE_USER_NAME = "root";
    CONST DATA_BASE_PASSWORD = "";
    CONST DATA_BASE_CONNECT = "dahp_2";
    public function __construct(){

    }

    public function connectData(){
        $ip_server = $this::DATA_BASE_IP;
        $user_name = $this::DATA_BASE_USER_NAME;
        $pass_word = $this::DATA_BASE_PASSWORD;
        $connect = $this::DATA_BASE_CONNECT;
        $conn = new mysqli($ip_server, $user_name, $pass_word, $connect);
        if ($conn->connect_error) {
            return false;
        }
        return $conn;
    }

    public function closeConnect($conn){
        $conn -> close();
        return true;
    }

}