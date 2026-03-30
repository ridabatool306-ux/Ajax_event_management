<?php
include('../connection.php');
                   $sql="SELECT * FROM `specificbooking` b INNER JOIN `category` c ON b.spcategoryname=c.category_id INNER JOIN `venue` v ON b.spvenuename=v.venue_id" ;
                   
                    $run=mysqli_query($conn,$sql);
                    while($fet=mysqli_fetch_assoc($run)){
                        ?>
                          <tr>
                            <td><?php echo $fet['spcategoryname']?></td>
                            <td><?php echo $fet['spclientname']?></td>
                            <td><?php echo $fet['spbookingemail']?></td>
                            <td><?php echo $fet['spbookingcontact']?></td>
                            <td><?php echo $fet['spoccassiontitle']?></td>
                            <td><?php echo $fet['spoccassiondate']?></td>
                            <td><?php echo $fet['spoccassiontime']?></td>
                            <td><?php echo $fet['spnumberofseats']?></td>
                            <td><?php echo $fet['spvenuename']?></td>
                            <td><?php echo $fet['spbookingdescription']?></td>
                            <td><?php echo $fet['workername']?></td>
                           <td><?php echo $fet['workeremail'] ?></td>
                           <td><?php echo $fet['workercontact'] ?></td>
                           <td>
      <a id="btn_del" data-del="<?php echo $fet['spbooking_id'] ?>" style="background-color:red;color:white;border:none;padding:5px;">
        delete
      </a>
    </td>
                          </tr>
                          <?php
                    }
                    ?>