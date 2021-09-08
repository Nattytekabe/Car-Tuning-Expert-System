<?php 
    require_once('db.php');
    if(isset($_POST['hidden_del'])){
        $del = $_POST['hidden_del'];
      
        echo $del;
        $q = "DELETE FROM spare WHERE S_id = $del;";
        $run = mysqli_query($con, $q);
    }
?>
  </head>
  <body>
    <div id="wrapper">
<?php require_once('header-admin.php');?>

        <div class="container-fluid body-section container">
            <div class="row">
            <select placeholder="what do you want to see" onchange="(this.options[this.selectedIndex].value?  window.open(this.options[this.selectedIndex].value,'_self'):'')">
            <option value="">What do you want to see</option>
             <option value='all-rooms.php'>Car</option>
             <option value='allspare.php'>Spare</option>
             <option value='allgar.php'>Garage</option>
      
         
          </select>
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-square"></i> All Spare <small>Edit or Delete Spare Parts</small></h2>
                    
                    <div class="card">
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead class="text-danger">
                                    <th><center>ID</center></th>
                                    <th><center>Name</center></th>
                                    <th><center>Model</center></th>
                                    <th><center>Price</center></th>
                                    <th><center>Weight</center></th>
                                    <th><center>Placement</center></th>
                                 
                                </thead>
                                <tbody>
                                    <?php
                                        $q = "SELECT * FROM spare";
                                        $run = mysqli_query($con, $q);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_array($run)){
                                        
                                    ?>
                                    <tr>
                                        <td><center><?php echo $row['S_id']; ?></center></td>
                                        <td><center><?php echo $row['S_name']; ?></center></td>
                                        <td><center><?php echo $row['S_model']; ?> </center></td>
                                        <td><center><?php echo $row['S_price']; ?></center></td>
                                        <td><center><?php echo $row['S_weight']; ?> </center></td>
                                        <td><center><?php echo $row['S_place']; ?></center></td>
                                     

                                    
                                        <td><center><a href="edit-room.php?id=<?php echo $row['S_id']; ?>"><i class="fa fa-pencil"></i></a></center></td>
                                        <td><center><a href="allspare.php?del=<?php echo $row['S_id']; ?> <?php $del= $row['C_id']; ?>"><i class="fa fa-times"></i></a></center></td>
                                        <input type="hidden" name="hidden_del" value="<?php echo $row["C_id"];?>" />
                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once('footer-admin.php');?>