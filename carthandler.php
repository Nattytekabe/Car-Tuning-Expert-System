<?php
session_start();
include("config.php");
if(isset($_POST["add_to_cart"])){
    if(isset ($_SESSION["shopingcart"])){
$item_array_id=array_column($_SESION["shopingcart"],"item_id");
if(!in_array($_GET["id"],$item_array_id)){
    $count = count ($_SESSION["shopingcart"]);
    $item_array_id = $_GET["C_id"];
    $item_array_make =$_POST["hidden_name"];
    $item_array_speed   = $_POST["Hidden_price"];
    $item_array_acceleration  = $_POST["quantity"];
    $_SESSION["shopingcart"][$count]=$item_array;
}

else{
    echo '<script>alert("Item Alredy Added")</script>';
    echo '<script>window.location="shopingcart.php"</script>';
}
    }
    else{
        $item_array_id = $_GET["C_id"];
        $item_array_make =$_POST["hidden_name"];
        $item_array_speed   = $_POST["Hidden_price"];
        $item_array_acceleration  = $_POST["quantity"];
 
        $_SESSION["shopingcart"][0] = $item_array;
    }
}
?>
<html>

<head>

</head>
<body>
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
    if(!empty($_SESSION("shopincart"))){
        $total = 0;
        foreach($_SESSION["shopingcart"] as $keys => $values){

        
    
    ?>
    <tr>
        <td><?php echo $values["item_name"]; ?></td>
        <td><?php echo $values["item_quantity"]; ?></td>
        <td><?php echo $values["item_price"]; ?></td>
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

</body>
</html>