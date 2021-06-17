<?php
include_once "DB.php";
class UserInfo {

    public function getAllEmails () {
        $sql = "SELECT * FROM emails";
        $this->result = new Db();
        $this->result = $this->result->connect();
        $this->result = $this->result->query($sql);
        $numRows = $this->result->num_rows;
        if ($numRows > 0) {
            while ($row = $this->result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}