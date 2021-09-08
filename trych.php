
<!DOCTYPE html>
<html>
<head>
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
       <?php
       $wbum= $row['wbumper_pic'];
       $seccol= $row['col_pic2'];
       $ficol= $row['col_pic'];
       $spo= $row['wspoiler_pic'];
       $wwh1= $row['wheel1_pic'];
       $whandbum= $row['whbum_pic'];
       $whandsp= $row['	whsp_pic'];  
       $whandcol2= $row['whcol2_pic'];
   
       ?>
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
    </div>
<!..............................................................................half...............................!>

<div class="container">
<?php
	$q="SELECT * FROM spare";
	
	?>
<h2>spare parts </h2>

<?php
if(isset($_POST['submit'])){

	$q="SELECT * FROM spares where ";
}
	?>
  <?php
 if(isset($_POST['all'])){
	$q="SELECT * FROM spares";
}

 ?>
<!-- form -->


        <div class="row">
          <form action="choose.php?C_id=<?php echo $row['S_id']?>" method="POST">
          <select>
            
           <?php
           require_once('db.php');
                  $run = mysqli_query($con,"SELECT * FROM spare");
                  while($row = mysqli_fetch_array($run)){

             echo   " <option > " .  $row['S_name']."</option>" ;}
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
 
          <div class="info">
              <h3><?php header('Content-type: image/jpeg');
    $Image=$row['content'];
     echo $row['S_name']; ?></h3>
              <p style="color: darkgreen;"> Model: <?php echo $row['S_name']. " : ".$row['S_model']; ?> <br> Price: <?php echo $row['S_price']; 
              echo $row['S_picture']?> </p>

              <a href="trych.php?C_id=<?php echo $row['C_id']?>" class="btn btn-default">Add</a>
              <?php
 $wbum= $row['wbumper_pic'];
 $seccol= $row['col_pic2'];
 $ficol= $row['col_pic'];
 $spo= $row['wspoiler_pic'];
 $wwh1= $row['wheel1_pic'];
 $whandbum= $row['whbum_pic'];
 $whandsp= $row['	whsp_pic'];  
 $whandcol2= $row['whcol2_pic'];
if(isset($_POST['submit'])){
    $main=$_GET['S_name'];
if($main="bumper"){
	$q="SELECT wbumper_pic FROM cars ";
}

}

              ?>
          </div>
      </div>
  </div>
  <?php
  $hid=$_POST['hidden_id'];
  echo $hid;
        }
    }
  ?>

  
</div>
</div>
        </div>
  
    <?php include 'footer.php';?>


</html>
