

<?php
require_once('config/db.php');

?>
<html>
<head>
<title> Login || </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
    <div class="login">
        <h1>Create Account</h1>
        <form name="createAccountForm" method="POST" onsubmit="return createAccountValidation()">
        <?php include('errors.php'); ?>
        
            <div>
                <input type="text" name="firstName"  id="firstName" placeholder="First Name">
            </div>

            <div>
                <input type="text" name="lastName"  id="lastName" placeholder="Last Name">
            </div>

            <div>
                <input type="email" name="userEmail"  id="userEmail" placeholder="Email Address">
            </div>
            
            <div>
                <input type="password" name="userPassword"  id="userPassword" placeholder="Password">
            </div>

            <div>
                <input type="password" name="confirmUserPassword" id="confirmUserPassword" placeholder="Confirm Password">
            </div>

            
            <div style="margin-left: 45px; margin-right: 45px; width: 100%;">
                <input type="submit" value="Create Account" name="createNewUser">
            </div>

            <a style="margin-bottom: 25px; margin-top: 25px; text-decoration: none;" href="login.php">Already have an account? Login</a>
        </form>
    </div>

    <script src="js/validation.js"></script>
</body>
</head>
</html