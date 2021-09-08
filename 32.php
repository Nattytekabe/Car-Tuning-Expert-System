<!DOCTYPE html>
<?php
include("config.php");

?>
<html>
<head>
<link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="media.css" />
<link rel="stylesheet" href="style.css">

<style>

.tutorial ul {
    font-size: 0;
    list-style-type: none;
}
*, *:before, *:after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
user agent stylesheet
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
*, *:before, *:after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
*, *:before, *:after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

 *:before, *:after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
div{
    display: block;
}
body, html {
  height: 100%;
  background-color: #EEEEEE;
}
*, *:before, *:after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

*, *:before, *:after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
fa-angle-down:before {
    content: "\f107";
}
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}


.container {
  width: 100%;
  height: 100%;
}


.tutorial {
  width: 80%;
  margin: 5% auto 0 auto;
  box-shadow: 0 4px 12px rgba(black, 0.1);
  background-color: #f9f9f9;
  max-width: 800px;
}
.slider {
  width: 100%;
  height: 500px;
  
}
.information {
  width: 100%;
  padding: 20px 50px;
  margin-bottom: 30px;
  font-family: 'Open Sans', sans-serif;
}
  .information h1 {
    color: #333;
    font-size: 1.5rem;
    padding: 0px 10px;
    border-left: 3px solid #F03861;
  }
  
  .information h3 {
    color: darken(#f2f2f2, 7%);
    font-size: 1rem;
    font-weight: 300;
    padding: 0px 10px;
    border-left: 3px solid #F03861;
  }
  
  .information p {
    padding: 10px 0px;
  }
  ul {
    font-size: 0;
    list-style-type: none;
  }
    
    ul li {
      font-family: 'Open Sans', sans-serif;
      font-size: 1rem;
      font-weight: 400;
      color: #333;
      display: inline-block;
      padding: 15px;
      position: relative; 
    }

     ul li ul {
          display: none;
        }
        ul li ul:hover{
        cursor: pointer;
        display: block;
        background-color: #f2f2f2;
      
      }
  ul li:hover ul{
    display: block;
          margin-top: 15px;
          
          width: 200px;
          left: 0;
          
          position: absolute;
  }
  ul li:hover ul li{
    display: block;
            background-color: darken(#f9f9f9, 7%);
  }
            ul li :hover ul li   span {
              float: right;
              color: #f9f9f9;
              background-color: #F03861;
              padding: 2px 5px;
              text-align: center;
              font-size: .8rem;
              border-radius: 3px;
            }
            
  
  ul li:hover ul li:hover{
    background-color: darken(#f9f9f9, 10%);
            }
            ul li:hover ul li:hover span {
                background-color: (#F03861, 5%);

            }

.tutorial ul {
    font-size: 0;
    list-style-type: none;
}
.tutorial ul li {
    font-family: "Open Sans", sans-serif;
    font-size: 1rem;
    font-weight: 400;
    color: #333;
    display: inline-block;
    padding: 15px;
    position: relative;
}
.tutorial ul li:hover {
    cursor: pointer;
    background-color: #f2f2f2;
}

  


  
  h1 {
    color: #333;
    font-size: 1.5rem;
    padding: 0px 10px;
    border-left: 3px solid #F03861;
  }
  
  h3 {
    color: darken(#f2f2f2, 7%);
    font-size: 1rem;
    font-weight: 300;
    padding: 0px 10px;
    border-left: 3px solid #F03861;
  }
  .f{
    
      float: left;
  }
  .s{
      
      float: right;
  }
  button{
    width : 200px;
    height :100px;
  }
  </style>
</head>



<body translate="no">
    <div class="container">
        <div class="tutorial">
            <ul>
             
                  <li>make <i class="fa fa-angle-down"></i>
                    <ul>
                   <li><?php
                    $result = mysqli_query($conn,"SELECT * FROM cars");
                    while($row = mysqli_fetch_array($result)){

                  echo "   <button><option > <li>" . $row['make'] . "</li></button>";}
              ?></span></li>
                      
                  <li>model <i class="fa fa-angle-down"></i>
                    <ul>
                   <li><?php
                    $result = mysqli_query($conn,"SELECT * FROM cars");
                    while($row = mysqli_fetch_array($result)){

                  echo "   <button><option > <li>" . $row['model'] . "</li></button>";}
              ?></span></li>
                      
                <li>year <i class="fa fa-angle-down"></i>
                    <ul>
                   <li><?php
                    $result = mysqli_query($conn,"SELECT * FROM cars");
                    while($row = mysqli_fetch_array($result)){

                  echo "   <button><option > <li>" . $row['year'] . "</li></button>";}
              ?></span></li>
                      
                <li>color <i class="fa fa-angle-down"></i>
                    <ul>
                   <li><?php
                    $result = mysqli_query($conn,"SELECT * FROM cars");
                    while($row = mysqli_fetch_array($result)){

                  echo "   <button><option > <li>" . $row['color'] . "</li></button>";}
              ?></span></li>
                      
                    </ul>
                  </li>
              </ul>
            <div class="slider">
                <img class='slider' src="https://images.iconfigurators.app/images/configurators/med/ultra-splash-config_2232.png">

            </div>
            <div class="information">
              <p>A simple, clean looking dropdown menu effect achieved using pure CSS. Simple functionality, method can be extended to create a secondary dropdown block with few edits.</p>
            </div>
          </div>
    
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    </div>
</body>
</body>
</html>
