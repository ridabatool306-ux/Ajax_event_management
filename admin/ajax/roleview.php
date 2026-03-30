<?php
include('../connection.php');
                    $sql="SELECT * FROM `role`";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['rolename']?></td>
                            <td><?php echo $fet['roleaccess']?></td>
                            <?php
                              $role=$fet['roleper'];
                              $roles=unserialize($role); 
                              ?>
                            <td>
                             <?php echo implode(",",$roles);?>
                             </td>
                            
                            <td><?php echo $fet['roledate']?></td>
                            <td><a href='./roleupdate.php?upid=<?php echo $fet['role_id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                            <td>
      <a id="btn_del" data-del="<?php echo $fet['role_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">
        delete
      </a>
    </td>
                          </tr>
                          <?php
                    }
                    ?>