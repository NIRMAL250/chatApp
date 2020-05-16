<?php
    session_start();
    require_once "pdo.php";
    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])){
        $query = "INSERT INTO userinfo(name,email,pwd) values(:name,:email,:password)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
            ":name"=>$_POST["name"],
            ":email"=>$_POST["email"],
            ":password"=>$_POST["password"]
        ));
        $_SESSION["register"] = "success";
        header("Location: ../html/login.php");
    }
?>