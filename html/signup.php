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
            <form action="../php/signup.php" method="post">
                <input type="text" name="name" id="name" placeholder="fullname">
                <input type="email" name="email" id="email" placeholder="username">
                <input type="password" name="password" id="password" placeholder="password">
                <input type="submit" value="signup" id="signup">
                <a href="../html/login.php" id="back">back</a>
            </form>
            </div>
        </div>
    </body>
</html>