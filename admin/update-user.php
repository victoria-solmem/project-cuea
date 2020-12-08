<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-update</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <input type="checkbox" id="check">
   
    <?Php include('header.php'); ?>

    <section class="banner">
        <div class="banner-left">
           Update User
        </div>
    </section>
    <section>
        <div class="login">
            <!-- <h1>Login</h1> -->
            <form class="update-user-validation-form" method="post">
                <div style="width: 100%;">
                    <input type="text" name="firstName" placeholder="First Name" id="firstName">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="email" name="lastName" placeholder="Last Name" id="lastName">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="text" name="userEmail" placeholder="Email" id="userEmail">
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="text" name="phoneNumber" placeholder="Telephone" id="phoneNumber">
                </div><br><br><br><br>

            
                <div style="width: 100%;">
                    <input type="text" name="username" placeholder="Address" id="username" required>
                </div><br><br><br><br>
                <input type="submit" value="Update User">
            
        
                
            </form>
        </div>
    </section>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <!-- import validation page -->
    <script src="js/validation.js"></script>
     
</body>
</html>