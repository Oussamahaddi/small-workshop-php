<?php
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $date = date('h:i:s');
    $redirection = "./index.php";



?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>PHP</title>
    
    <?php include "css.php"?>

</head>
<body>

    <!-- include header  -->

    <?php include './header.php'?>

    <div class="data">
        <div class='affichage'>
            <ul style='list-style: none; display: flex; flex-direction: column;'>
                <li><?php echo "Name        : $Name" ?></li>
                <li><?php echo "Email       : $Email" ?></li>
                <li><?php echo "Password    : $Password" ?></li>
                <li><?php echo "Date        : $date" ?></li>
            </ul>
        </div>
        
        <form action='./index.php'>
            <input type='submit' value='Back' class="btn" style="background : rgba(32 116 178 / 82%);color: white; padding: 15px 20px; outline: none; border: 1px solid #Ccc; font-weight: bold; ">
        </form>
    </div>

    <!-- include footer -->

</body>
</html>

