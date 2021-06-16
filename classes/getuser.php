<?php
include_once "DB.php";
class NewUser {
    public function __construct() {
        $email  = $_POST['email'];
        $sql = "INSERT INTO emails (email) VALUES ('$email')";
        $this->conn = new Db();
        $this->conn = $this->conn->connect();
       
        $result = $this->conn->query($sql);
        return $result;
    }
}   