<?php
include('../connection.php');
                    $sql="SELECT * FROM `login_table`";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['firstname']?></td>
                            <td><?php echo $fet['lastname']?></td>
                            <td><?php echo $fet['email']?></td>
                            <td><?php echo $fet['password']?></td>
                            <td><?php echo $fet['confirmpassword']?></td>
                            <td><?php echo $fet['role']?></td>
                            <td><a href='./useroleupdate.php?upid=<?php echo $fet['id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                            <td>
      <a id="btn_del" data-del="<?php echo $fet['id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">
        delete
      </a>
    </td>
                          </tr>
                          <?php
                    }
                    ?>