<?php 
	require_once('config/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || EBMS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <a href="index.php" class="logo">EBMS</a>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            
        </ul>
    </div>
    <div class="other-banner-area">
        <h1 style="margin-top:100px; text-align: center;">Contact</h1>
    </div>


    <div class="contact-area" id="Contact" >
        <div class="text-part" style="padding-top: 20px;">
            
            <form name="contactForm" method="POST" onsubmit="return contactValidation()">
            <div>
            <?php
            include("errors.php");
            ?><br>
        </div>
        <style>
            .success {
	padding: 0px 2px;
    border: 1px solid #3c763d;
    color: #3c763d; 
    background: #dff0d8; 
    font-size: 14px;
	text-align: center;
}
        </style>
        <div>
            <?php
            include("success.php");
            ?><br>
        </div>
                <div>
                    <input type="text" id="firstNae" name="firstName" placeholder="First Name">
                </div>
            
                <div>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name">

                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="text" id="telephone" name="telephone" placeholder="Phone Number">
                </div>
                        
                
                <div>
                    <input type="text" id="subject" name="subject" placeholder="Subject">
                </div>
                
                
                <div>
                    <textarea id="message" name="message" placeholder="Write Message.." style="height:200px"></textarea>
                </div>
            
                <input type="submit" value="Submit" name="ContactSubmit">
            </form>

        </div>
    </div>
    
    <footer>
        <p style="color:white;"> 
            Subcribe to our newsletter
            <div>
                <form style="width: 100px;">
                    <input type="email" id="email" name="email" placeholder="Your email..">
                    <input  type="submit" value="Subcribe">
                </form>
            </di>
            
            Nairobi Kenya <br>
            <a href="terms-of-use.html" style="color: white;">TERMS OF USE</a><br>
            <a href="privacy-and-policy.html" style="color: white;">PRIVACY AND POLICY</a><br>
            Copyright © 2020 E-B-M-S. All rights reserved.
        
        </p>
    </footer>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>   
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
    </script>

     <script src="js/validation.js"></script> 
</body>

</html>