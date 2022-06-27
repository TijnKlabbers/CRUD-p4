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
    <form action="#" method="post">
    <input type="text" name="destination" placeholder="destination">
    <textarea name="description" cols="30" rows="10" placeholder="description"></textarea>
    <input type="number"  step="0.01" placeholder="price" name="price">
    <select name="persons">
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>
    <input type="date" name="startDate">
    <input type="date" name="endDate">
    <input type="text" name="image" placeholder="image-URL">
    <button name="add">addButton</button>
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
    <a href="adminpanel-locations.php">back</a>
</body>
</html>