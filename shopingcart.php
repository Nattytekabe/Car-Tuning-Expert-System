<?php
session_start();
include("config.php");
if(isset($_POST["add_to_cart"])){
   $id= $_POST["hidden_id"]; 

        
        $item_array_id=$array_column($item_array,"item_id");
        
      
   
        if(!in_array($id,$array_column($item_array,"item_id"))){
         
            $count = count ($_SESSION["shoping"]);
        $item_array=array(
        'item_id' => $_POST["hidden_id"],
        'item_array_make' => $_POST["hidden_name"],
        'item_array_speed'   => $_POST["Hidden_price"],
        'item_array_acceleration'  => $_POST["quantity"]
        );
       
   
     
   
        $_SESSION["shoping"][$count]=$item_array;
         }

        else{
        echo '<script>alert("Item Alredy Added")</script>';
        echo '<script>window.location="shopingcart.php"</script>';
        }
    
        
}
?>
<html>
    <head>
<script src="https://ajax.googleapis.com/ajax/linbs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/"/>
    </head>
<body>
<br />
<div class="container" style="width:700px;">
<h3 position="center">shoping cart </h3><br/>

<?php
$query="SELECT * FROM cars ";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){
    ?>

    <div  class="col-md-4">
    <form method="post" action="shopingcart.php">
<div style="border:1px solid #333; background-color: #f1f1f1; border-radius : 5px; padding:16px; position:center" >
<img src="image/cars/vitz/<?php echo $row["picture"];?>" class="img-respomsive"/><br/>
<h4 class="text-danger"> $ <?php echo $row["speed"]; ?> </h4>
<input type="text" name="quantity" class="form-control" value="1" />
<input type="hidden" name="hidden_name" value="<?php echo $row["make"];?>" />
<input type="hidden" name="hidden_price" value="<?php echo $row["speed"];?>" />
<input type="hidden" name="hidden_id" value="<?php echo $row["C_id"];?>" />
<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to cart" />
</div>
    </form>
    </div>
    <?php
}

}

?>
<div style="clear:both"></div>
<br />
<h3>Order Details</h3>
<div class="table_respomsive">
<table class="table table-bordered">
    <tr>
        <th width="40%">Item Name</th>
        <th width="10%">Quantity</th>
        <th width="20%">Price</th>
        <th width="15%">Total</th>
        <th width="5%">Action</th>
    </tr>
    <?php
    if(!empty($_SESSION("shoping"))){
        $total = 0;
        foreach($_SESSION["shoping"] as $keys => $values){

        
    
    ?>
    <tr>
        <td><?php echo $values["make"]; ?></td>
        <td><?php echo $values["model"]; ?></td>
        <td><?php echo $values["speed"]; ?></td>
        <td><?php echo number_format($values["item_quantity"] * $values["item_price"],2);?></td>
        <td><a href="shopingcart.php?action=delete$id=<?php echo $values["item_id"];?> <span class="text-danger">Remove</span></a></td>
    
    </tr> 
    <?php
$total = $total + ($values["item_quantity"]* $values["item_price"]);
}
    }
    ?>
    <tr>
        <td colspan="3" align= "right">Total</td>
        <td align="right">$ <?php echo number_format($total,2);?></td>
    </tr>
</table>

</div>

</div>

</body>
    </html>
