<?php
$insert = false;
if (isset($_POST['fname'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed due to " . mysqli_connect_error());
    }
    // echo "Success connecting to the DB";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $add = $_POST['add'];
    $msg = $_POST['msg'];


    $sql = "INSERT INTO `Form`.`contactads` (`First Name`, `Last Name`, `Email`, `Phone Number`, `Address`, `Message`, `Date/Time`) VALUES ('$fname', '$lname', '$email', '$num', '$add', '$msg', current_timestamp());";


    if ($conn->query($sql) == true) {
        // echo"succesfully Inserted";
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/ap.svg" type="image/x-icon">
    <title>MnM Da Swaad | aa-gaye-swaad.com</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" media="screen and (max-width: 1400px)" href="css/phone.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;800&family=Bree+Serif&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Navbar section -->
    <nav id="navbar">

        <div id="logo">
            <a href="index.html">
                <img src="images/ap.svg" alt="aa-gaye-swaad.com ">
            </a>
        </div>

        <ul>
            <li class="item"><a href="index.html">Home</a></li>
            <li class="item"><a href="about.html">About Us</a></li>
            <li class="item"><a href="services.html">Services</a></li>
            <li class="item"><a href="offers.html">Offers</a></li>
            <li class="item"><a href="contact.php" class="active">Contact Us</a></li>
        </ul>

        <div class="aside">
            <input type="checkbox" class="checkbox" id="chk">

            <label for="chk" class="label">
                <img src="images/s.png" alt="" height="24px" id="sun">
                <img src="images/m.png" alt="" height="18px" id="moon">
                <i class='fas fa-moon'></i>
                <i class='fas fa-sun'></i>
                <div class="ball"></div>

            </label>

            <div class="login" id="sidebar">
                <h1>
                    Login
                </h1>


                <form action="contact.php" method="POST">

                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">

                        <img src="images/close.png" alt="" width="25px">

                    </a>


                    <input type="tel" name="pnum" id="pnum">

                    <label for="pnum" class="phnum" id="num">Phone number</label>

                    <br>

                    <button class="btn1" id="login" onclick="chkPhone()">LOGIN</button>

                </form>
                <p>
                    By clicking on Login, I accept the Terms & Conditions & Privacy Policy
                </p>
            </div>


            <div class="signup" id="sidebar2">
                <h1>
                    Sign up
                </h1>

                <form action="">

                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">

                        <img src="images/close.png" alt="" width="25px">

                    </a>


                    <input type="tel" name="pnum" id="pnum1">

                    <label for="pnum" class="phnum" id="num">Phone number</label>

                    <input type="text" name="name" id="name">

                    <label for="name" class="username" id="uname">Name</label>


                    <input type="text" name="email" id="emailid">

                    <label for="email" class="uemail" id="useremail">Email</label>


                    <input type="password" name="pass" id="pass">

                    <label for="pass" class="upass" id="userpass">Password</label>

                    <br>

                    <button class="btn1" id="continue1" onclick="chkEmail();">CONTINUE</button>

                </form>
                <p>
                    By clicking on Login, I accept the Terms & Conditions & Privacy Policy
                </p>
            </div>


            <span onclick="openNav()">
                <button class="button1" id="log">Log in</button>
            </span>

            <span onclick="openNav2()">
                <button class="button" id="sign">Sign up</button>
            </span>

        </div>
    </nav>
    <?php
    if ($insert == true) {
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
    }
    ?>
    <!-- Form Section -->
    <div class="full">
        <div class="upper">
            <img src="images/3124518.jpeg" alt="">;
            <h1>CONTACT US</h1>
        </div>

        <div class="lower">
            <div class="left">

                <div class="up">
                    <img src="images/phone.png" alt="">
                    <br> Call us directly at
                    <br>
                    <b>+91-8457384384</b>
                </div>

                <div class="down">
                    <img src="images/chat.png" alt="">
                    <br> Chat with our support team
                    <br>

                    <button class="btn" id="locate">Locate</button>
                </div>
            </div>

            <div class="right">
                <form action="contact.php" method="POST">
                    <div class="form">
                        <label for="fname">FIRST NAME</label>
                        <br>
                        <input type="text" placeholder="First Name" id="fname" name="fname" class="textbox">
                    </div>

                    <div class="form">
                        <label for="lname">LAST NAME</label>
                        <br>
                        <input type="text" placeholder="Last Name" id="lname" name="lname" class="textbox">

                    </div>

                    <div class="form">
                        <label for="email">EMAIL</label>
                        <br>
                        <input type="text" placeholder="Email" id="email" name="email" class="textbox">
                    </div>

                    <div class="form">
                        <label for="num">PHONE NUMBER</label>
                        <br>
                        <input type="number" placeholder="Phone Number" name="num" id="num" class="textbox">
                    </div>

                    <div class="form">
                        <label for="add">ADDRESS</label>
                        <br>
                        <textarea placeholder="Address" id="add" name="add" class="textbox"></textarea>
                    </div>

                    <div class="form">
                        <label for="msg">MESSAGE</label>
                        <br>
                        <textarea placeholder="Message" id="msg" name="msg" class="textbox"></textarea>
                    </div>

                    <button class="btn1" id="locate" type="submit">Submit</button>
                </form>
                <br>


            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <section class="contact-container">

        <div id="contact">

            <div class="company_">

                <h4>Company</h4>

                <ul id="company">

                    <li><a href="about.html">About us</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Blog</a></li>

                </ul>

            </div>

            <div class="info_">

                <h4>Contact</h4>

                <ul id="info_">

                    <li><a href="#">Help & Support</a></li>
                    <li><a href="#">Partner with us</a></li>
                    <li><a href="#">Ride with us</a></li>

                </ul>

            </div>

            <div class="legal_">

                <h4>Legal</h4>

                <ul id="legal_">

                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Refund & Cancellation</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Offer Terms</a></li>
                    <li><a href="#">Phishing & Fraud</a></li>

                </ul>

            </div>

            <div class="down_">

                <img src="images/download/down.png" alt="">
                <!-- <img src="images/download/astore.png" alt=""> -->

            </div>

        </div>


    </section>

    <hr>

    <section class="copyright">


        <div class="logo">

            <img src="images/apwhite.png" alt=""> MnM Da Swaad

        </div>

        <div id="legal">

            &copy; 2023 MnM Da Swaad. All rights reserved.

        </div>

        <div class="social">

            <a href="https://www.facebook.com"><img src="images/social/fb1.png" alt=""></a>

            <a href="https://www.pinterest.com"><img src="images/social/pint.png" alt=""></a>

            <a href="https://www.instagram.com"><img src="images/social/insta.png" alt=""></a>

            <a href="https://www.twitter.com"><img src="images/social/twitter.png" alt=""></a>

        </div>

    </section>

    <a href="#" id="scroll">
        <span></span>
    </a>

    <script src="js/script.js"></script>

</body>

</html>