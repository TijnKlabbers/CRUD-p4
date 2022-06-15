<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once "includes/connect.php" ?>
    <form action="adminpanel-locations.php" method="post">
    <input type="text" name="destination" placeholder="destination">
    <input type="text" name="description" placeholder="description">
    <input type="number"  step="0.01" placeholder="price" name="price">
    <input type="number" name="persons" placeholder="persons">
    <input type="date" name="startDate">
    <input type="date" name="endDate">
    <input type="text" name="image" placeholder="image-URL">
    <input type="submit" name="add"/>
    </form>
    <?php 
      if(isset($_POST['add'])){

        $sql = "INSERT INTO flights (destination, description, price, persons, startDate, endDate, image)
        VALUES (:destination, :description, :price, :persons, :startDate, :endDate, :image)";
  
        $stmt = $connect->prepare($sql);

        $startDateConverted = date("Y-m-d", strtotime($_POST['startDate']));
        $endDateConverted = date("Y-m-d", strtotime($_POST['endDate']));
  
        $stmt->bindParam(":destination", $_POST['destination']);
        $stmt->bindParam(":description", $_POST['description']);
        $stmt->bindParam(":price", $_POST['price']);
        $stmt->bindParam(":persons", $_POST['persons']);
        $stmt->bindParam(":startDate", $startDateConverted);
        $stmt->bindParam(":endDate", $endDateConverted);
        $stmt->bindParam(":image", $_POST['image']);
        $stmt->execute();
    }
    ?>
</body>
</html>