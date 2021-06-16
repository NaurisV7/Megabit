<?php

class ViewUser extends UserInfo {

    public function showAllEmails () {
       $datas = $this->getAllEmails();
       foreach ($datas as $data) {
            return $data['email'] . "<br>";
       }
    }
}