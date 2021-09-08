<?php include 'db.php';?>
  </head>
  <body>
    <div id="wrapper">
<?php require_once('header-admin.php');?>

        <div class="container-fluid body-section container">
            <div class="row">
            <select placeholder="what do you want to add" onchange="(this.options[this.selectedIndex].value?  window.open(this.options[this.selectedIndex].value,'_self'):'')">
            <option value="">What do you want to add</option>
             <option value='add-room.php'>Car</option>
             <option value='addspare.php'>Spare</option>
             <option value='addgarage.php'>Garage</option>
      
         
          </select>
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-square"></i> Add Garage <small>Add New Garage</small></h2>
                   
               
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Garage name:*</label>
                                    <?php
                                    if(isset($msg)){
                                        echo "<span class='pull-right' style='color:green;'>$msg</span>";
                                    }
                                    else if(isset($error)){
                                        echo "<span class='pull-right' style='color:red;'>$error</span>";
                                    }
                                    ?>
                                    <input type="text" name="name" placeholder="Name" value="<?php if(isset($title)){echo $title;}?>" class="form-control">
                                </div>
                                <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="size">speciality:*</label>
                                            <input type="text" name="speciality" placeholder="Model number" value="<?php $size ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size">latitude:*</label>
                                            <input type="text" name="latitude" placeholder="Type the price" value="<?php $size ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size">longitude:*</label>
                                            <input type="text" name="longitude" placeholder="How much it weigh" value="<?php $size ?>" class="form-control">
                                        </div>
                                    </div>
                                   
                               
            
                                
                                <input type="submit" class="btn btn-primary" value="Add Garage" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></body>
    </html>


<?php require_once('footer-admin.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $spc = $_POST['speciality'];
    $lat = $_POST['latitude'];
    $long = $_POST['longitude'];
echo $name , $spec , $lat , $long;

$res=mysqli_query($con,"INSERT INTO garage (G_id, G_name,G_speciality, Latitude, Longitude) VALUES (NULL, '$name', '$spc', '$lat', '$long')");

    if($res){
        $error = "We've got your feedback";
        $color = "green";
    }
    else{
        $error = "Error occured";
    }
 }

                                ?>
                                