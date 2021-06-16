<?php

class NewUser extends Db {
    private function __construct() {
        $email  = $_POST['email'];
        $sql = "INSERT INTO emails (email) VALUES ('$email')";

        $this->conn = $this->conn->connect();
       
        $result = $this->conn->query($sql);
        return $result;
    }
}   