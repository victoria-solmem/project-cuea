<html>
<head>
<title> Login || </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
    <div class="login">
        <h1>Reset Password</h1>
        <form name="forgotPasswordForm" method="POST" onsubmit="return forgotPasswordValidation()" >
            <div>
                <input type="email" name="userEmail"  id="userEmail" placeholder="Email Address">
            </div>
            
            <div style="margin-left: 45px; margin-right: 45px; width: 100%;">
                <input type="submit" value="Reset Password">
            </div>

            <a style="margin-bottom: 25px; margin-top: 25px; text-decoration: none;" href="login.php">Do you remember your password? Login</a>
        </form>
    </div>

    <script src="js/validation.js"></script>
</body>
</head>
</html