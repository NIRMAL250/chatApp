<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/room.css">
        <script src="../js/ajax-utils.js"></script>
        <script src="../js/room.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li id="back">
                        <a href="#">back</a>
                    </li>
                    <li id="option">
                        <a href="#">option</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="main-content">
        </div>
        <footer>
            <form action="../php/room.php" method="POST">
                <div class="section">
                <div class="emoji"></div>
                </div>
                <input type="text" name="message" placeholder="type a message" id="message">
                <input type="hidden" name="userUid" value="<?= $_SESSION['sendUid'] ?>" id="sendUid">
                <div class="section">
                <div class="file"></div>
                </div>
                <div class="section">
                <input type="submit" value="s" id="send">
                </div>
            </form>
        </footer>
        <div class="recieved"></div>
        <div class="sended"></div>
        <script src="../js/ajax-utils.js"></script>
        <script src="../js/room.js"></script>
    </body>
</html>