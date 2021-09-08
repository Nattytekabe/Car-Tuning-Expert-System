

<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                    $q = "SELECT * FROM rooms LIMIT 3";
                    $run = mysqli_query($con, $q);
                    $count = 0;
                    if(mysqli_num_rows($run) > 0){
                        while($row = mysqli_fetch_array($run)){
                            $image = $row['image1'];
                            if($count == 0){
                                echo "<div class='item active'><img src='images/photos/$image' class='img-responsive' alt='slide'></div>";
                            }
                            else{
                                echo "<div class='item  height-full'><img src='images/photos/$image' class='img-responsive' alt='slide'></div>";
                            }
                            $count++;
                        }
                    }
                ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4 ">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><iframe width="400" height="250" src="https://www.youtube.com/embed/9BvIozbe1vA" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="item  height-full"><iframe  width="400" height="250" src="https://www.youtube.com/embed/YZkI3vg4oIE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="item  height-full"><iframe  width="400" height="250"  src="https://www.youtube.com/embed/WPmElaPJ9rg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Places To Visit<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4 wowload fadeInRight">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/h1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/tibs.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/siga.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food Service<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->
