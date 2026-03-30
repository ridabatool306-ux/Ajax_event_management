<?php
include('../connection.php');
$sql="SELECT * FROM `category`";
$run=mysqli_query($conn,$sql);
while($fet=mysqli_fetch_assoc($run)){
    ?>
        <tr>
            <td><?php echo $fet['categoryname'];?></td>
            <td><?php echo $fet['categorydescription'];?></td>
            <td>
               <a href="./categoryupdate.php?upid=<?php echo $fet['category_id'] ?>" style="background-color:blue;color:white;border:none;padding:5px;">
             Update
      </a>
    </td>

    <td>
      <a id="btn_del" data-del="<?php echo $fet['category_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">
        delete
      </a>
    </td>
                          </tr>
                          <?php
                    }
                    ?>