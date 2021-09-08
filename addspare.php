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
             <option value='add-room.php'>Garage</option>
      
         
          </select>
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-square"></i> Add Spare <small>Add New Spare</small></h2>
                   
               
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Spare name:*</label>
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
                                            <label for="size">Model name:*</label>
                                            <input type="text" name="model" placeholder="Model number" value="<?php $size ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size">price:*</label>
                                            <input type="text" name="price" placeholder="Type the price" value="<?php $size ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size">Weight:*</label>
                                            <input type="text" name="weight" placeholder="How much it weigh" value="<?php $size ?>" class="form-control">
                                        </div>
                                    </div>
                                   
                                <div class="form-group">
                                    <label for="title">Possition :*</label>
                                  <!--  <textarea name="post-data" id="textarea" rows="10" class="form-control"><?php if(isset($post_data)){echo $post_data;}?></textarea> -->
                                    <input type="text" name="place" placeholder="Where is it installed" value="<?php $size ?>" class="form-control">
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="size">Garages for installation:*</label>
                                            <textarea name="gar" id="textarea" rows="10" class="form-control"><?php if(isset($post_data)){echo $post_data;}?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">compatable cars:*</label>
                                            <textarea name="comp"id="textarea" rows="10" class="form-control"><?php if(isset($post_data)){echo $post_data;}?></textarea>
                                        </div>
                                    </div>
                                  
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="file">Image 1:*</label>
                                            <input type="file" name="image1">
                                        </div>
                                    </div>
                                  
                                </div>
                                
                                <input type="submit" class="btn btn-primary" value="Add Spare" name="submit">
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
    $model = $_POST['model'];
    $price = $_POST['price'];
    $weight = $_POST['weight'];
    $place = $_POST['place'];
    $gar = $_POST['gar'];
    $comp = $_POST['comp'];
    $img = $_POST['image1'];

$res=mysqli_query($con,"INSERT INTO spare  (S_id, S_name, S_model, S_price, S_weight, S_place, S_picture, G_id, C_id) VALUES (NULL, '$name', '$model', '$price', '$weight', '$place', '$img','2','4')");

    if($res){
        $error = "We've got your feedback";
        $color = "green";
    }
    else{
        $error = "Error occured";
    }
 }
?>
