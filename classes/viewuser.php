<?php

class ViewUser extends UserInfo {

    public function showAllEmails () {
       $datas = $this->getAllEmails();
       foreach ($datas as $data) {
            echo $data['email'] . "<br>";
       }
    }
}