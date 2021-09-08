<?php include 'header.php';?>

<?php
    require_once('db.php');
    if(isset($_GET['C_id'])){
        $id = $_GET['C_id'];
        $q = "SELECT * FROM cars WHERE C_id = $id";
        $run = mysqli_query($con, $q);
        $row = mysqli_fetch_array($run);
    }
?>
<div class="container">
<h1 class="title"><?php echo $row['make']; ?></h1>
 <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="image/cars/vitz/<?php echo $row['picture']; ?>" class="img-responsive" alt="slide"></div>
             
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
  <!-- RoomCarousel-->


<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p><?php echo $row['description']; ?></p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Common Facilities</h3>    
    <ul>
      <li>Television with more than 400 channels.</li>
      <li>Attached bathroom with bath-tub.</li>
      <li>Wide balcony towards beautiful garden.</li>
      <li>House keeping 3 times per day.</li>
      <li>24 hours water supply.</li>
    </ul>
    

    </div>  
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Size<span><?php echo $row['size']; ?> sq</span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Price<span><?php echo $row['price']; ?> ETB</span></div>
    </div>
  </div>
</div>
                     
<div>
  

<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
<h3>Room Intro Video </h3>
    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe width="100" height="400" src="https://www.youtube.com/embed/dCs9Ei2CkAY" title="Rooms Preview" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</div>
<div class="col-sm-5 col-md-4">
<h3>Reservation    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
 </h3>
    <?php
        require_once('db.php');
        $error = "";
        $color = "red";
        if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $phone = mysqli_real_escape_string($con,$_POST['phone']);
            $Rname = mysqli_real_escape_string($con,$_POST['RoomID']);
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $adults =$_POST['bedType'];
            $rooms = mysqli_real_escape_string($con,$_POST['rooms']);
            $message = mysqli_real_escape_string($con,$_POST['message']);

            $q = "SELECT * FROM requests ORDER BY requests.id DESC LIMIT 1";
            $r = mysqli_query($con, $q);
            if(mysqli_num_rows($r) > 0){
                $row = mysqli_fetch_array($r);
                $id = $row['id'];
                $id = $id + 1;
            }
            else{
                $id = 1;
            }


            if(empty($name) or empty($email) or empty($phone) or $adults == "no" or $rooms == "no" or empty($message) or $day == "no" or $month == "no" or $year == "no"){
                $error = "All Feilds Required, Try Again";

            }
            else{
                $insert_query = "INSERT INTO `requests`(`id`, `name`, `email`, `phone`,`RoomID` , `day`, `month`, `year`, `bedType`, `rooms`, `message`) VALUES ('$id','$name','$email','$phone','$Rname','$day','$month','$year','$adults','$rooms','$message')";
                if(mysqli_query($con, $insert_query)){
                    $error = "Request added, we'll send you a messege(SMS) shortly to finilize your booking";
                    $color = "green";
                }
                else{
                    $error = "Error occured";
                }
            }
        }
       
     
    ?>
    <label style="color: <?php echo $color; ?>">
        <?php
            echo $error;
        ?>
    </label>
    <form role="form" class="wowload fadeInRight" method="post">
        <div class="form-group">
            <input type="text" name="name" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control"  placeholder="Email">
        </div>
        <div class="form-group">
            <input type="Phone" name="phone" class="form-control"  placeholder="Phone">
        </div>     
         <div  class="form-group">

      <select name="RoomID" class="form-control" id="exampleInputcatid" >        
                  <?php
                                    $host = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "hotel";
                                $conn = mysqli_connect($host,$username, $password, $dbname);
                                $sql = "SELECT * FROM rooms";
                                $result = mysqli_query($conn, $sql);
                                 $row = mysqli_fetch_assoc($result);
                                    echo "<option value=".$id.">"."Room ID ".$id."</option>";

                              

                                   ?>

                              </select>
<h5>
  <?php 
   echo "<option value=".$id; ?>
</h5>
        </div>   
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="rooms">
              <option value="no">No. of Rooms</option>
              <option value="1">1</option>
              <option value="2">2</option>
           
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="bedType">
              <option value="no">Type of Bed</option>
              <option value="Single Bed">Single</option>
                <option value="Double Bed">Double</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="day" id="day">
                <option value="no">Day</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
                
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="month" id="month">
                <option value="no">Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="year">
                <option value="no">Year</option>
                <option value="2021">2021</option>
                <option value="no">2022</option>
                <option value="no">2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Message" rows="3"></textarea>
        </div>
       <hr>
       <div class="form-horizontal">
        <input type="submit" class="btn btn-primary" value="Request" name="submit">
        <input type="button" class="btn btn-primary" onclick="location.href='rooms-tariff.php';" value="Visit Rooms Gallary" />
  <label for="exampleInputcatid">
     </label>
    </button>  
</div>
    </form><br>
  
</div>
</div>  
</div>
</div>
<!-- reservation-information -->


</div>

</div>
<?php include 'footer.php';?>


