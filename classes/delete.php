<?php 
include_once "DB.php";
include_once "view.php";

function delete() {
    if(isset($_POST['delete'])) {

        if( $_POST['id'] && $_POST['delete']) {
            if($_POST['delete'] == 'confirm') {

                $conn = new Db();
                $conn = $conn->connect();

                $id = $_POST['id'];
                $delete = mysqli_query($conn,"DELETE from emails WHERE id = '$id'");
            }
        }             
    }
    return;
}

delete();

