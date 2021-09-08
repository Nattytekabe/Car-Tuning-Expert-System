<?php 
include("db.php");
?>
  </head>
  <body>
    <div id="wrapper">
<?php require_once('header-admin.php');?>
<form action="" method="POST">

    
        <div class="container-fluid body-section container">
            <div class="row">
            <select placeholder="what do you want to add" onchange="(this.options[this.selectedIndex].value?  window.open(this.options[this.selectedIndex].value,'_self'):'')">
            <option value="">What do you want to add</option>
             <option value='add-room.php'>Car</option>
             <option value='addspare.php'>Spare</option>
             <option value='addgarage.php'>Garage</option>
      
         
          </select>
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-square"></i> Add Car <small>Add New Car</small></h2>
                    
               
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    
                                    <label for="made">Company:*</label>
                                    <?php
                                    if(isset($msg)){
                                        echo "<span class='pull-right' style='color:green;'>$msg</span>";
                                    }
                                    else if(isset($error)){
                                        echo "<span class='pull-right' style='color:red;'>$error</span>";
                                    }
                                    ?>
                                    <input type="text" name="made" placeholder="Type manufacturing company Here" value="<?php if(isset($title)){echo $title;}?>" class="form-control">
                                </div>
                                <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="type">Model name:*</label>
                                            <input type="text" name="type" placeholder="Type The Model " value="<?php $row["model"] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="age">Year:*</label>
                                            <input type="text" name="age" placeholder="Production Year" value="<?php $row["$year"]  ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shade">color:*</label>
                                            <input type="text" name="shade" placeholder="Color" value="<?php $row["$color"]   ?>" class="form-control">
                                        </div>
                                    </div>
                                   
                             
<!-- wow script    <div class="form-group">
                                    <label for="title">Description:*</label>
                                    <textarea name="post-data" id="textarea" rows="10" class="form-control"><?php if(isset($post_data)){echo $post_data;}?></textarea>
                                </div>
                                -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bolt">speed:*</label>
                                            <input type="text" name="bolt" placeholder="Speed (KM/H)" value="<?php $row["$speed"] ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bullet">acceleration:*</label>
                                            <input type="text" name="bullet" placeholder="Acceleration (KM/H)" value="<?php if(isset($title)){echo $row["$acceleration"] ;}?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="control">handling:*</label>
                                            <input type="text" name="control" placeholder="handling (Percent)" value="<?php if(isset($title)){echo $row["$handling"] ;}?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="file">Image 1:*</label>
                                            <input type="file" name="img">
                                        </div>
                                    </div>
                                  
                                </div>
                              
                                <input type="submit" class="btn btn-primary" value="Add Car" name="submit">

                                <?php
 if(isset($_POST['submit'])){
    $made = $_POST['made'];
    $type = $_POST['type'];
    $age = $_POST['age'];
    $shade = $_POST['shade'];
    $bolt = $_POST['bolt'];
    $bullet = $_POST['bullet'];
    $control = $_POST['control'];
    $img = $_POST['img'];
  
$res=mysqli_query($con,"INSERT INTO cars (C_id, make, model, yr, color, speed, handling, acceleration, picture) VALUES (NULL, '$made', '$type', '$age', '$shade', '$bolt', '$control', '$bullet', '$img')");

    if($res){
        $error = "We've got your feedback";
        $color = "green";
    }
    else{
        $error = "Error occured";
    }
 }

                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require_once('footer-admin.php');?>