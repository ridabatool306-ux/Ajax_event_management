<?php
include('../connection.php');
                    $sql="SELECT * FROM `contact`";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['firstname']?></td>
                            <td><?php echo $fet['lastname']?></td>
                            <td><?php echo $fet['subject']?></td>
                            <td><?php echo $fet['email']?></td>
                            <td><?php echo $fet['message']?></td>
                            <td><a href='./contact.php?cid=<?php echo $fet['contact_id']?>'><input type="button" value="reply"  class="btn btn-primary"></a></td>
                            <td>
      <a id="btn_del" data-del="<?php echo $fet['contact_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">
        delete
      </a>
    </td>
                          </tr>
                          <?php
                    }
                    ?>