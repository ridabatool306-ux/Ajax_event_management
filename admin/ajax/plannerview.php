<?php
include('../connection.php');
                    $sql="SELECT * FROM `planner`";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['plannerfname']?></td>
                            <td><?php echo $fet['plannerlname']?></td>
                            <td><?php echo $fet['planneremail']?></td>
                            <td><?php echo $fet['plannerdob']?></td>
                            <td><?php echo $fet['plannergender']?></td>
                            <td><?php echo $fet['plannerphone']?></td>
                            <td><?php echo $fet['plannercity']?></td>
                            <td><?php echo $fet['plannerexperience']?></td>
                            <td><?php echo $fet['plannerachievements']?></td>
                            <td><?php echo $fet['plannerskills']?></td>
                            <td><?php echo $fet['plannerpartners']?></td>
                            <td><?php echo $fet['plannerpassword']?></td>
                            <td><?php echo $fet['plannerconfirmpassword']?></td>
                            <td><?php echo $fet['planneraddress']?></td>
                            <td>
                              <img src="<?php echo "./img/".$fet['plannerpic']?>" height="30px" ,width="35px">
                            </td>
                            <td><a href='./plannerupdate.php?upid=<?php echo $fet['planner_id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                        <td><a id="btn_del" data-del="<?php echo $fet['planner_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">Delete</a></td>
                          </tr>
                          <?php
                    }
                    ?>