<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
    </head>
    <body>
        <div class="main-content">
            <div class="logo"></div>
            <div class="form">
            <div id="error">
                    <?php
                        if(isset($_SESSION['error']))
                        {
                            echo "<span>".$_SESSION['error']."</span>";
                            unset($_SESSION['error']);
                        }
                    ?>
                </div>
            <form action="../php/login.php" method="post">
                <input type="email" name="email" id="email" placeholder="username">
                <input type="password" name="password" id="password" placeholder="password">
                <input type="submit" value="login" id="login">
                <a href="../html/signup.php" id="signup">signup</a>
            </form>
            </div>
        </div>
    </body>
</html>