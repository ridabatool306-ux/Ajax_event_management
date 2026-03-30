<?php
include('../connection.php');
                    $sql="SELECT * FROM `designer`";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['designerfname']?></td>
                            <td><?php echo $fet['designerlname']?></td>
                            <td><?php echo $fet['designeremail']?></td>
                            <td><?php echo $fet['designerdob']?></td>
                            <td><?php echo $fet['designergender']?></td>
                            <td><?php echo $fet['designerphone']?></td>
                            <td><?php echo $fet['designercity']?></td>
                            <td><?php echo $fet['designerexperience']?></td>
                            <td><?php echo $fet['designerorderdesign']?></td>
                            <td><?php echo $fet['designerdescription']?></td>
                            <td><?php echo $fet['designercompany']?></td>
                            <td><?php echo $fet['designercolor']?></td>
                            <td><?php echo $fet['designertools']?></td>
                            <td><?php echo $fet['designerwrittencontent']?></td>
                            <td><?php echo $fet['designernumdesign']?></td>
                            <td><?php echo $fet['designerpassword']?></td>
                            <td><?php echo $fet['designerconfirmpassword']?></td>
                            <td><?php echo $fet['designeraddress']?></td>
                            <td>
                                <img src="<?php echo "./img/".$fet['designerpic']?>" alt="" height="30px",width="35px">
                            </td>
                            <td><a href='./designerupdate.php?upid=<?php echo $fet['designer_id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                            <td><a id="btn_del" data-del="<?php echo $fet['designer_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">Delete</a></td>
                          </tr>
                          <?php
                    }
                    ?>