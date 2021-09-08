<?php include 'header.php';?>
<div class="container">

<center><h1 class="title">Contact Us</h1></center>
<?php
    require_once('db.php');
    $error = "";
    $color = "red";
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($con,$_POST['name']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $phone = mysqli_real_escape_string($con,$_POST['phone']);
        $message = mysqli_real_escape_string($con,$_POST['message']);

        $q = "SELECT * FROM feedback ORDER BY feedback.id DESC LIMIT 1";
        $r = mysqli_query($con, $q);
        if(mysqli_num_rows($r) > 0){
            $row = mysqli_fetch_array($r);
            $id = $row['id'];
            $id = $id + 1;
        }
        else{
            $id = 1;
        }


        if(empty($name) or empty($email) or empty($phone) or empty($message)){
            $error = "All Feilds Required, Try Again";

        }
        else{
            $insert_query = "INSERT INTO `feedback`(`id`, `name`, `email`, `phone`, `message`) VALUES ('$id','$name','$email','$phone','$message')";
            if(mysqli_query($con, $insert_query)){
                $error = "We've got your feedback";
                $color = "green";
            }
            else{
                $error = "Error occured";
            }
        }
    }

?>
<div class="contact" style="margin-top: -50px;">
       <div class="row">
       	<div class="col-sm-12">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		
       		<h4>Write to us</h4>
       		<label style="color: <?php echo $color; ?>">
                <?php
                    echo $error;
                ?>
            </label>
			<form role="form" method="post">
                <div class="form-group">	
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone">
                </div>
                <div class="form-group">
                <textarea type="email" class="form-control" name="message" placeholder="Message" rows="4"></textarea>
                </div>	
                <input type="submit" class="btn btn-primary" value="Send" name="submit">
			</form>
			</div>
       	</div>
       </div>
</div>
</div>
<!-- form -->
<h2>View Our Location</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.5477794665308!2d38.762566553631835!3d9.0185648408684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8596e4447f7d%3A0x7d2d64a64dc9c36f!2sHilton%20Addis%20Ababa!5e0!3m2!1sen!2set!4v1629698076867!5m2!1sen!2set" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>
<?php include 'footer.php';?>