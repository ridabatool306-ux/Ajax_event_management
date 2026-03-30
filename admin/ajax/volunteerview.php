<?php
include('../connection.php');
                    $sql="SELECT * FROM `volunteer`";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['volunteerfname']?></td>
                            <td><?php echo $fet['volunteerlname']?></td>
                            <td><?php echo $fet['volunteeremail']?></td>
                            <td><?php echo $fet['volunteerdob']?></td>
                            <td><?php echo $fet['volunteergender']?></td>
                            <td><?php echo $fet['volunteerphone']?></td>
                            <td><?php echo $fet['volunteercity']?></td>
                            <td><?php echo $fet['volunteeroccassion']?></td>
                            <td><?php echo $fet['volunteerexperience']?></td>
                            <td><?php echo $fet['volunteerachievements']?></td>
                            <td><?php echo $fet['volunteerskills']?></td>
                            <td><?php echo $fet['volunteerpassword']?></td>
                            <td><?php echo $fet['volunteerconfirmpassword']?></td>
                            <td><?php echo $fet['volunteeraddress']?></td>
                            <td>
                                <img src="<?php echo "./img/".$fet['volunteerpic']?>" alt="" height="30px" ,width="35px">
                            </td>
                            <td><a href='./volunteerupdate.php?upid=<?php echo $fet['volunteer_id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                            <td><a id="btn_del" data-del="<?php echo $fet['volunteer_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">Delete</a></td>
                          </tr>
                          <?php
                    }
                    ?>