<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="lts.css">
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

        <title>3D Object</title>
        <script src='https://kit.fontawesome.com/a076d05399.js' ></script>
  
    </head>


    <?php include 'header.php';?>


    <body>
     

<!-- Main Container -->
<div id="container">

    <!-- An aside -->
    <!-- This is for holding the 3D object -->
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
  ?>
        </div>
        </div>
        <div class="outter1">
        <?php
    echo "Acceleration";
    ?>
          <style type="text/CSS">
    .outer1{
        height: 25px;
        width: 500px;
        border : solid 1px #000;
    }
    <?php
  $ac= $row['acceleration'];
  $fi= 230/$ac;
  ?>
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
  ?>
            </div>
    </div>
    <div class="outter2">
        <?php

    echo "Horse_power";
    ?>
          <style type="text/CSS">
    .outer2{
        height: 25px;
        width: 500px;
        border : solid 1px #000;
    }
    <?php
  $hp= $row['Horse_power'];

  $hpp= ($hp*100)/1500;

  ?>
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
  ?>
            </div>
        </div> 
    <!-- Content container -->
    <!-- This is for holding some brief description about the 3D object -->
    <!-- Social media icons -->
    <!-- This is for holding some company's social media icons and related links -->
   </div>
   <button onclick="window.location.href='choose.php?C_id=<?php echo $row['C_id']?>'">modify</button>

    </body>
</html>
<?php include 'footer.php';?>   