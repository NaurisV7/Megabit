<?php
    include "viewuser.php";
    include "delete.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <table>
        
            <tr>
                <th>ID</th>
                <th>EMAIL</th>
                <th>DATE</th>
                <th>DELETE</th>
            </tr>
            <?php
            $users = new ViewUser();
            echo $users->showAllEmails();
        ?>
        <button type="submit" name="delete" value="confirm">Delete selected</button>
        
    </table>
</form>
</body>
</html>

