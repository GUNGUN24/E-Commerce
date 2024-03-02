<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection wasnt successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else {
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `menstop`";
$result = mysqli_query($conn, $sql);

// Number of rows in record
$num = mysqli_num_rows($result);

// Displaying the rows using sql query using while loop
// while ($row = mysqli_fetch_assoc($result)) {
//     echo "Your product catalouge is having this image address - " . $row['item_image'] . " and image name is " . $row['item_name'] . " with a price tag of only " . $row['item_price'] . " with " . $row['item_availability'] . " availability";
//     echo "<br>";
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirts</title>
    <link rel="stylesheet" href="nav.css">   
    <link rel="stylesheet" href="products1.css">
    

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almendra+Display&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
    <div class="wrapper" style="background-color: black">
        <div class="logo"><a href="#">PHENIX</a></div>
        <ul class="nav-links">
            <li><a class="tier-1-links" href="home.htm">Home</a></li>
            <li><a class="tier-1-links" href="new.htm">AboutUs</a></li>

            <li>
                <a class="tier-1-links" href="#">Clothing</a>
                <div class="mega-box">
                    <div class="content">
                        <div class="row">
                            <img src="shoes.jpg" alt="">
                        </div>
                        <div class="row">
                            <div class="mega-box-header">Men</div>
                            <ul class="mega-links">
                                <li><a href="clothes.htm">Shirts</a></li>
                                <li><a href="clothes.htm">Hoodies & Jackets</a></li>
                                <li><a href="clothes.htm">Pants / Bottoms</a></li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="mega-box-header">Women</div>
                            <ul class="mega-links">
                                <li><a href="clothes.htm">Shirts</a></li>
                                <li><a href="clothes.htm">Gilets</a></li>
                                <li><a href="clothes.htm">Jeans / Shorts</a></li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="mega-box-header">Footwear</div>
                            <ul class="mega-links">
                                <li><a href="clothes.htm">Running</a></li>
                                <li><a href="clothes.htm">Jordan</a></li>
                                <li><a href="clothes.htm">SNKRS</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </li>
            <li><a class="tier-1-links" href="contactus.htm" target="_blank">Contact</a></li>
                <li><a class="tier-1-links" href="login.htm">Login</a></li>
        </ul>
    
    </div>
</nav>
    
    <div class="products">
        <h1>Shirt's / TOPS</h1>
        <div class="container" >
        <div class="card">
                <div class="card-head">
                    <img src="
                    <?php
                            $row = mysqli_fetch_assoc($result);
                            echo $row['item_image'];
                        ?>
                    ">
                </div>
                
                <div class="card-content">
                    <span>
                        <?php
                            echo $row['item_name'];
                        ?>
                    </span>
                    <p>
                        <?php
                            echo $row['item_price'];
                        ?>
                    </p>
                </div>
                <a href="https://google.com"><button class="buy-now-btn">BUY NOW</button></a>
            </div>

            <div class="card">
                <div class="card-head">
                    <img src="
                    <?php
                            $row = mysqli_fetch_assoc($result);
                            echo $row['item_image'];
                        ?>
                    ">
                </div>
                
                <div class="card-content">
                    <span>
                        <?php
                            echo $row['item_name'];
                        ?>
                    </span>
                    <p>
                        <?php
                            echo $row['item_price'];
                        ?>
                    </p>
                </div>
                <a href="https://google.com"><button class="buy-now-btn">BUY NOW</button></a>
            </div>

            <div class="card">
                <div class="card-head">
                    <img src="
                    <?php
                            $row = mysqli_fetch_assoc($result);
                            echo $row['item_image'];
                        ?>
                    ">
                </div>
                
                <div class="card-content">
                    <span>
                        <?php
                            echo $row['item_name'];
                        ?>
                    </span>
                    <p>
                        <?php
                            echo $row['item_price'];
                        ?>
                    </p>
                </div>
                <a href="https://google.com"><button class="buy-now-btn">BUY NOW</button></a>
            </div>

            <div class="card">
                <div class="card-head">
                    <img src="
                    <?php
                            $row = mysqli_fetch_assoc($result);
                            echo $row['item_image'];
                        ?>
                    ">
                </div>
                
                <div class="card-content">
                    <span>
                        <?php
                            echo $row['item_name'];
                        ?>
                    </span>
                    <p>
                        <?php
                            echo $row['item_price'];
                        ?>
                    </p>
                </div>
                <a href="https://google.com"><button class="buy-now-btn">BUY NOW</button></a>
            </div>

            <div class="card">
                <div class="card-head">
                    <img src="
                    <?php
                            $row = mysqli_fetch_assoc($result);
                            echo $row['item_image'];
                        ?>
                    ">
                </div>
                
                <div class="card-content">
                    <span>
                        <?php
                            echo $row['item_name'];
                        ?>
                    </span>
                    <p>
                        <?php
                            echo $row['item_price'];
                        ?>
                    </p>
                </div>
                <a href="href='https://pmny.in/gIIlJ0OD9yeW'"><button class="buy-now-btn">BUY NOW</button></a>
            </div>

            <div class="card">
                <div class="card-head">
                    <img src="
                    <?php
                            $row = mysqli_fetch_assoc($result);
                            echo $row['item_image'];
                        ?>
                    ">
                </div>
                
                <div class="card-content">
                    <span>
                        <?php
                            echo $row['item_name'];
                        ?>
                    </span>
                    <p>
                        <?php
                            echo $row['item_price'];
                        ?>
                    </p>
                </div>
                <a href="href='https://pmny.in/gIIlJ0OD9yeW'"><button class="buy-now-btn">BUY NOW</button></a>
            </div>

            

            
    
            
    
        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script>
        $(window).scroll(function(){
            if($(window).scrollTop()){
                $("nav").addClass("black");
            }
            else {
                $("nav").removeClass("black");
            }
        });

    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js" integrity="sha512-2fk3Q4NXPYAqIha0glLZ2nluueK43aNoxvijPf53+DgL7UW9mkN+uXc1aEmnZdkkZVvtJZltpRt+JqTWc3TS3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>