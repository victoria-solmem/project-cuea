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
    <?php include('home-header.php') ?>
    <div class="other-banner-area">
        <h1 style="margin-top:100px; text-align: center;">FAQ</h1>
    </div>

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

    
    

    <div class="faq-area" id="FAQ" style="margin-top:30px;">
        <div class="text-part" style="margin-bottom: 25px;">
        <h1>Frequency asked Qestions</h1>

            <button class="accordion">Can I check my bill online?</button>
            <div class="panel">
            <p>Yes. You can view your bill on My Vodafone. When your latest bill is available online, we will send you a notification text and email. Please ensure you have a valid email address recorded in your personal details on My Vodafone. </p>
            </div>

            <button class="accordion">Can I receive my bill by email?</button>
            <div class="panel">
            <p>Yes. We can email you a copy of your bill (if the billing period is over 12 months). Please connect with our live chat team through the 'Chat' button on the right of the screen.</p>
            </div>

            <button class="accordion">If I change the billing format to Email will I still receive a paper bill?</button>
            <div class="panel">
            <p>No. You will receive an email notifcation to view your bills online. </p>
            </div>

            <button class="accordion">Can I get a paper bill?</button>
            <div class="panel">
            <p>Yes. However, paperless billing is the preferred option. With paperless billing you have access to all of the same information that you receive in a paper bill as well as additional benefits:</br>
•	Detailed analysis </br>
•	Call details </br>
•	Less paper waste </br>
•	Account control </br>
•	Names on bills not just numbers
Please note online bills are also valid for tax and accounts.
If you'd like to change your billing format, simply log into My Vodafone and choose 'Account preferences' and change the option under 'Invoice'.
</p>
            </div>

            <button class="accordion">Can I view or analyse bills that are more than 12 months old?</button>
            <div class="panel">
            <p>No, bills are only available for analysis or download for the previous 12 months.

</p>
            </div>

        </div>
    </div>

    <?php include('footer.php'); ?>
   
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