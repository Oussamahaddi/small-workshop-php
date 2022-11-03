<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    
    <?php include "css.php"?>

</head>
<body>
    
    <!-- include header from php file -->

    <?php include "header.php" ?>

    <!-- form -->
    <div class="container_form">
        <form action="./data.php" method="POST">
            <div class="min_container">
                <div class="img">
                    <img src="./logg-removebg-preview.png" alt="" width="200px">
                </div>
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="Name" id="name" placeholder="Name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="Email" id="email" placeholder="Email">
                </div>
                <div>
                    <label for="pwd">Password</label>
                    <input type="password" name="Password" id="pwd" placeholder="Password">
                </div>
                <div>
                    <input type="submit" value="Regist" style="background-color: green; width: 200px; color: white; font-weight: bold; cursor:pointer;">
                </div>
            </div>
        </form>
    </div>

    <!-- include footer from php file -->

    <?php include "footer.php"?>

</body>
</html>