<?php
include('../connection.php');
                    $sql="SELECT * FROM `news` n INNER JOIN `category` c ON n.categoryname=c.category_id ";
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['categoryname']?></td>
                            <td><?php echo $fet['newstitle']?></td>
                            <td><?php echo $fet['newsdescription']?></td>
                         <td>
                             <?php
                             $image=unserialize($fet['newspic']);
                        foreach($image as $pic){
                    ?>
                      <img src="<?php echo "./img/".$pic?>" alt="" width="70px" height="30px">
                    <?php
                        }
                    ?> 
                   </td> 
                            <td><a href='./newsupdate.php?upid=<?php echo $fet['news_id']?>'><input type="button" value="update" class="btn btn-primary"></a></td>
                            <td><a id="btn_del" data-del="<?php echo $fet['news_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">Delete</a></td>
                          </tr>
                          <?php
                    }
                    ?>