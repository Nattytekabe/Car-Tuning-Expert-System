<?php 
    require_once('db.php');
    if(isset($_POST['hidden_del'])){
        $del = $_POST['hidden_del'];
      
        echo $del;
        $q = "DELETE FROM cars WHERE C_id = $del;";
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
                    <h2><i class="fa fa-plus-square"></i> All Cars <small>Edit or Delete Cars</small></h2>
                    
                    <div class="card">
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead class="text-danger">
                                    <th><center>ID</center></th>
                                    <th><center>Make</center></th>
                                    <th><center>Model</center></th>
                                    <th><center>Year</center></th>
                                    <th><center>Speed</center></th>
                                    <th><center>Acceleration</center></th>
                                    <th><center>Color</center></th>
                                </thead>
                                <tbody>
                                    <?php
                                        $q = "SELECT * FROM cars";
                                        $run = mysqli_query($con, $q);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_array($run)){
                                        
                                    ?>
                                    <tr>
                                        <td><center><?php echo $row['C_id']; ?></center></td>
                                        <td><center><?php echo $row['make']; ?></center></td>
                                        <td><center><?php echo $row['model']; ?> </center></td>
                                        <td><center><?php echo $row['yr']; ?></center></td>
                                        <td><center><?php echo $row['speed']; ?> </center></td>
                                        <td><center><?php echo $row['acceleration']; ?></center></td>
                                        <td><center><?php echo $row['color']; ?> </center></td>

                                    
                                        <td><center><a href="edit-room.php?id=<?php echo $row['C_id']; ?>"><i class="fa fa-pencil"></i></a></center></td>
                                        <td><center><a href="all-rooms.php?del=<?php echo $row['C_id']; ?> <?php $del= $row['C_id']; ?>"><i class="fa fa-times"></i></a></center></td>
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