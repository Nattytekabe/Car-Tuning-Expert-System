
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .btncontainer{  
text-align: center;  
border: 7px solid blueviolet;  
width: 150px;  
height: 100px;  
padding-top: 30px;  
}  
#btnc{  
font-size: 25px;  
}  
    </style>
<?php include 'db.php';?>
   <?php
    require_once('db.php');
    if(isset($_GET['C_id'])){
        $id = $_GET['C_id'];
        $q = "SELECT * FROM cars WHERE C_id = $id";
        $run = mysqli_query($con, $q);
        $row = mysqli_fetch_array($run);
    }
?>
  <style type="text/css">

.flex {
    display: flex;
}
.sameRow {

height : 1000px;
    width: 100%;
}
.normal {
    height: 40px;
    border: 2px solid red;
}

    .outer{
        height: 25px;
        width: 100%;
        border : solid 1px #000;
    }

    .inner{
        height: 25px;
        width: <?php echo $eed ?>%;
        border-right : solid 1px #000;
        background-color: lightblue;
    }
    .outer1{
        height: 25px;
        width: 100%;
        border : solid 1px #000;
    }
    .outer2{
        height: 25px;
        width: 100%;
        border : solid 1px #000;
    }
    .inner2{
        height: 25px;
        width: <?php  echo $hpp  ?>% ;
        border-right : solid 1px #000;
        background-color: lightblue;
    }
    .inner1{
        height: 25px;
        width: <?php echo $fi;  ?>%;
        border-right : solid 1px #000;
        background-color: lightblue;
    }
    
    </style>
</style>

</head>
<?php include 'header.php';
include 'db.php'?>


<div class="flex">
    <div class="sameRow">
         <div id="aSide">
       
             <img src="image/cars/vitz/<?php echo $row['picture']; ?>" class="img-responsive" alt="slide" id="aside">
          </div>
      <div id="content">   
          <div class="outter">
    
                <?php
               echo "speed";
               $q = "SELECT * FROM cars WHERE C_id =$id ";
               $run = mysqli_query($con, $q);
               $row = mysqli_fetch_array($run);
                ?>
              <style type="text/CSS">
                 .outer{
                   height: 25px;
                    width: 500px;
                    border : solid 1px #000;
                        }
                  <?php
                       $sp= $row['speed'];
                       $eed=($sp*100)/498.89;
                   ?>
                   .inner{
                       height: 25px;
                         width: <?php echo $eed ?>%;
                           border-right : solid 1px #000;
                            background-color: lightblue;
                         }
        
                </style>
                      <div class="inner">
                          <?php
                          echo $sp . " km/h" ;
                          echo "........." . $eed . "%" ;
                           ?>
                       </div>
            </div> 
      </div>
    



    <div id="content">   
          <div class="outter1">
    
                <?php
               echo "Acceleration";
               $q = "SELECT * FROM cars WHERE C_id =$id ";
               $run = mysqli_query($con, $q);
               $row = mysqli_fetch_array($run);
               $ac= $row['acceleration'];
               $fi= 230/$ac;
                           ?>
                           <style>
                             .inner1{
        height: 25px;
        width: <?php echo $fi;  ?>%;
        border-right : solid 1px #000;
        background-color: lightblue;
    }
    </style>
    
                      <div class="inner1">
                          <?php
                           echo $fi . " sec" ;
                           echo "........." . $fi . "%" ;
                           ?>
                       </div>
            </div> 
      </div>

    <div id="content">   
          <div class="outter2">
    
                <?php
               echo "Horse_power";
               $q = "SELECT * FROM cars WHERE C_id =$id ";
               $run = mysqli_query($con, $q);
               $row = mysqli_fetch_array($run);
                    
                    $hp= $row['Horse_power'];

                    $hpp= ($hp*100)/1500;
                  
                           ?>
                                             <style>
                             .inner2{
        height: 25px;
        width: <?php  echo $hpp  ?>% ;
        border-right : solid 1px #000;
        background-color: lightblue;
    }
    </style>
                      <div class="inner2">
                          <?php
                           echo $hpp . "horse_power" ;
                           echo "........." . $hpp . "%" ;
                           ?>
                       </div>
            </div> 
      </div>
    <div class="btncontainer">
  <button onclick="window.location.href='cart.php'" class="btnc">Goto Cart</button>
</div> </div>
<!..............................................................................half...............................!>
   
<div class="container">
<?php
	$q="SELECT * FROM spare";
	
	?>
<div class="container">

<h2>Spare Parts</h2>


<!-- form -->

<div class="row">
  <?php
    require_once('db.php');
    $q = "SELECT * FROM spare ORDER BY spare.S_id ASC";
    $run = mysqli_query($con, $q);
    $count = 0;
    if(mysqli_num_rows($run) > 0){
        while($row = mysqli_fetch_array($run)){
  ?>
  <div class="col-sm-6 wowload fadeInUp">
      <div class="rooms">
          <img src="image/spare/<?php echo $row['S_picture']; ?>" class="img-responsive">
          <div class="info">
              <h3><?php echo $row['S_name']; ?></h3>
              <p style="color: darkgreen;"> Model: <?php echo $row['S_model']; ?> Meter<br> Per Night: <?php echo $row['S_price']; ?> ETB</p>
              <a href="room-details.php?id=<?php echo $row['S_id']; ?>" class="btn btn-default">Add</a>
              <br>S
          </div>
      </div>
  </div>
  <?php
        }
    }
  ?>
  
  
</div>


</div>

  
</div>
</div>
        </div>
    
    <?php include 'footer.php';?>


</html>

