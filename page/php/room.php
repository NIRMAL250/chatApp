<?php
    session_start();
    require "pdo.php";
    header("Content-Type: application/json; charset=UTF-8");
    if(isset($_POST["message"]) && isset($_POST["userUid"])){
        $id = $_POST["userUid"];
        $message = $_POST["message"];
        $query = "INSERT INTO message(sendUid,message)
                    VALUES(:id,:message)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
            ":id"=> $id,
            ":message"=> $message
        ));
        header("Location: ../html/room.php");
        /*$array = array("id"=>$id ,"message"=>$message);
        $json_obj = json_encode($array);
        echo($json_obj);*/
    }
    else{
        $query = "SELECT * FROM message";
        $stmt = $pdo->query($query);
        $array = array();
        $finalArray = array();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            //$array[$row["sendUid"]] = $row["message"];
            $array = array($row["sendUid"],$row["message"]);
            $finalArray[] = $array;
        }
        $json_obj = json_encode($finalArray);
        print_r($json_obj);
    }
?>