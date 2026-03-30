<?php
include('../connection.php');
                    $sql="SELECT * FROM `booking` b INNER JOIN `category` c ON b.category_name=c.category_id INNER JOIN `venue` v ON b.venue_name=v.venue_id";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['categoryname']?></td>
                            <td><?php echo $fet['clientname']?></td>
                            <td><?php echo $fet['bookingemail']?></td>
                            <td><?php echo $fet['bookingcontact']?></td>
                            <td><?php echo $fet['occassiontitle']?></td>
                            <td><?php echo $fet['occassiondate']?></td>
                            <td><?php echo $fet['occassiontime']?></td>
                            <td><?php echo $fet['numberofseats']?></td>
                            <td><?php echo $fet['venuename']?></td>
                            <td><?php echo $fet['bookingdescription']?></td>
                            <td><?php echo $fet['occassiontype']?></td>
                            <td><a href='./bookingupdate.php?upid=<?php echo $fet['booking_id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                            <td><a id="btn_del" data-del="<?php echo $fet['booking_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">Delete</a></td>
                          </tr>
                          <?php
                    }
                    ?>