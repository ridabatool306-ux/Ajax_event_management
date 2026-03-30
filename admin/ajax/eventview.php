<?php
include('../connection.php');
                    $sql="SELECT * FROM `event` e INNER JOIN `category` c ON e.categoryname=c.category_id ";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['categoryname']?></td>
                            <td><?php echo $fet['eventtitle']?></td>
                            <td><?php echo $fet['eventdate']?></td>
                            <td><?php echo $fet['eventdescription']?></td>
                             <td>
                             <?php
                             $image=unserialize($fet['eventpic']);
                             foreach($image as $pic){
                    ?>
                      <img src="<?php echo "./img/".$pic?>" alt="" width="35px" height="30px">
                    <?php
                        }
                    ?> 
                   </td> 
                            <td><a href='./eventupdate.php?upid=<?php echo $fet['event_id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                            <td><a id="btn_del" data-del="<?php echo $fet['event_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">Delete</a></td>
                          </tr>
                          <?php
                    }
                    ?>