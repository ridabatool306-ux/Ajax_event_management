<?php
include('../connection.php');
                    $sql="SELECT * FROM `city`";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['cityname']?></td>
                            <td><?php echo $fet['citydescription']?></td>
                            <td><a href='./cityupdate.php?upid=<?php echo $fet['city_id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                            <td>
      <a id="btn_del" data-del="<?php echo $fet['city_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">
        delete
      </a>
                          </tr>
                          <?php
                    }
                    ?>