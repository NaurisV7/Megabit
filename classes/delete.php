<?php 
include_once "DB.php";
include_once "view.php";

function delete() {

    $conn = new Db();
    $conn = $conn->connect();

    foreach($_POST['id'] as $id) {
        $delete = mysqli_query($conn,"DELETE from emails WHERE id = '$id'");
    }

                
}


delete();

