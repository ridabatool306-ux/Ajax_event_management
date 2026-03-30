<?php
include('../connection.php');
                    $sql="SELECT * FROM `venue`";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['venuename']?></td>
                            <td><?php echo $fet['venuedescription']?></td>
                            <td><a href='./venueupdate.php?upid=<?php echo $fet['venue_id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                            <td>
      <a id="btn_del" data-del="<?php echo $fet['venue_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">
        delete
      </a>
                          </tr>
                          <?php
                    }
                    ?>