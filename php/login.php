<?php
    session_start();
    require_once "pdo.php";
    if(isset($_POST["email"]) && isset($_POST["password"])){
        $query = "SELECT * FROM userinfo WHERE email=:email AND pwd=:password";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
            ':email'=>$_POST["email"],
            ':password'=>$_POST["password"]
        ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$row)
        {
            $_SESSION["error"] = "Incorrect username or password";
            header("Location: ../html/login.php");
        }
        else{
            $_SESSION["success"] = "Login success";
            $_SESSION["sendUid"] = $row["userid"];
            header("Location: ../html/room.php");
        }
    }
?>