<?php include 'header.php';?>

<div class="container">
<?php
	$q="SELECT * FROM cars";
	
	?>
<h2>Rooms &amp; Tariff</h2>

<?php
if(isset($_POST['submit'])){

	$q="SELECT * FROM cars where make ='volks'";
}
	?>
  <?php
 if(isset($_POST['all'])){
	$q="SELECT * FROM cars";
}

 ?>
<!-- form -->

        <div class="row">
          <form action="rooms-tariff.php" method="POST">
          <select>
            
           <?php
           require_once('db.php');
                  $run = mysqli_query($con,"SELECT * FROM cars");
                  while($row = mysqli_fetch_array($run)){

             echo   " <option > " .  $row['make']."</option>" ;}
            ?>
        
          </select>
          <input   type="submit" name="submit" value="search"/>
          <input   type="submit" name="all" value="all"/><br>
          </form>
  <?php
    require_once('db.php');
  
    $run = mysqli_query($con, $q);
    $count = 0;
    if(mysqli_num_rows($run) > 0){
        while($row = mysqli_fetch_array($run)){
  ?>
  <div class="col-sm-6 wowload fadeInUp">
      <div class="rooms">
          <img src="image/cars/vitz/<?php echo $row['picture']; ?>" class="img-responsive">
          <div class="info">
              <h3><?php echo $row['make']; ?></h3> <p style="color: darkgreen;">
              Model: <?php echo $row['model']; ?> <br> 
              Year: <?php echo $row['yr']; ?> </p>
         
              <a href="afterindex.php?C_id=<?php echo $row['C_id']?>" class="btn btn-default">Select car</a>
          </div>
      </div>
  </div>
  <?php
        }
    }
  ?>

  
</div>


</div>
<?php include 'footer.php';?>

