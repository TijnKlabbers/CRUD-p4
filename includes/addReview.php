<?php 

      include_once "connect.php";

      if(isset($_POST['submit'])){

        $sql = "INSERT INTO reviews (flights_id, stars)
        VALUES (:flights_id, :stars)";
  
        $stmt = $connect->prepare($sql);
  
        $stmt->bindParam(":flights_id", $_POST['flights_id']);

        $stmt->bindParam(":  ", $_POST['stars']);

        $stmt->bindParam(":stars", $_POST['stars']);

        $stmt->execute();

        header('Location: ../reizen.php');
        exit();
    }
?>