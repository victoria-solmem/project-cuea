<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>

<body>
    <input type="checkbox" id="check">
    <label for="check">
        <div id="btn">
            <img src="images/icons/menu.svg" width="20px" height="20px" alt="">
        </div>
        <div id="cancel">
            <img src="images/icons/close.svg" width="20px" height="20px" alt="">
        </div>
    </label>

    <?Php include('header.php'); ?>


    <section class="banner">
        <div class="banner-left">
            Help
        </div>
    </section>
    <section>
        <table id="customers">
            <tr>
                <th>User</th>
                <th>Date</th>
            </tr>
            <?php
                $query="SELECT * FROM help ORDER BY createdAt DESC";
                $result=mysqli_query($con, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row= $result->fetch_assoc()) {
                        $userId = $row['userId'];
                        $query2   = "SELECT * FROM user WHERE userId = '$userId'";
                        $result2 = mysqli_query($con, $query2);
                        if (mysqli_num_rows($result2) == 1) {
                            $userData = $result2->fetch_assoc();		
                        }
                        ?>
                            <tr>
                                <td>
                                    <a href="help-reponse.php?id=<?php echo $row['userId'] ?>"><?php echo $userData['userEmail'] ?></a>
                                </td>
                                <td><?php echo date('M d Y',strtotime($row['createdAt'])) ?></td>
                            </tr>
                        <?php
                    }
                }
            ?>
        </table>
    </section>

</body>

</html>