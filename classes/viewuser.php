<?php
include "userinfo.php";
class ViewUser {

    public function showAllEmails () {
        $getusers = new UserInfo();
        $datas = $getusers->getAllEmails();

        ?>

        <?php
        foreach ($datas as $data) {
                ?>
                <tr>
                    <td><?php echo $data['id'];?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['created_at']; ?></td>
                    <td>
                        <input type="checkbox" name="id[]" value="<?php echo $data['id'];?>">
                    </td>
                </tr>
                <?php
   
        }
    }
}

?>