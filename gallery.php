<?php include 'header.php';?>
<div class="container">

       <h1 class="title">Spares Gallary</h1>
       <div class="row gallery">
              
              <?php
                require_once('db.php');
                $q = "SELECT * FROM spare ";
                $run = mysqli_query($con, $q);
                $count = 0;
                if(mysqli_num_rows($run) > 0){
                    while($row = mysqli_fetch_array($run)){
              ?>
              
              <div class="col-sm-4 wowload fadeInUp"><a href="image/spare/<?php echo $row['S_picture']; ?>" title="<?php echo $row['S_name']; ?>" class="gallery-image" data-gallery>
              <img src="images/photos/<?php echo $row['S_picture']; ?>" class="img-responsive">
              </a></div>
           
              <?php
                    }
                }
              ?>
              
       </div>
</div>
<?php include 'footer.php';?>