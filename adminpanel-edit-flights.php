<?php include "includes/connect.php";
        $flights_id = intval($_GET['flights_id']);
        $sql = "SELECT * FROM flights WHERE flights_id = :flights_id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":flights_id", $flights_id);
        $stmt->execute();
        $result = $stmt->fetch();
?>
<form action="adminpanel-locations.php" method="post">
    <input name="destination" type="text" value="<?php echo $result['destination'] ?>">
    <textarea name="description" cols="30" rows="10"> <?php echo $result['description'] ?></textarea>
    <input name="price" type="text" value="<?php echo $result['price'] ?>">
    <select name="persons">
        <option disabled selected><?php echo $result['persons'] ?></option>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
    </select>
    <input name="startDate" type="date" name="startDate" value="<?php echo $result['startDate'] ?>">
    <input name="endDate" type="date" name="endDate" value="<?php echo $result['endDate'] ?>">
    <input name="image" type="text" name="image" placeholder="image-URL" value="<?php echo $result['image'] ?>">
    <button type="submit" name="update">update</button>
</form>
<?php
    if(isset($_POST['update'])){
        $sql = "UPDATE flights
                SET destination = :destination, description = :description, price = :price, persons = :persons, startDate = :startDate, endDate = :endDate, image = :image
                WHERE fligths_id = :flights_id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":fligths_id", $_GET['flights_id']);
        $stmt->bindParam(":destination", $_POST['destination']);
        $stmt->bindParam(":description", $_POST['description']);
        $stmt->bindParam(":price", $_POST['price']);
        $stmt->bindParam(":persons", $_POST['persons']);
        $stmt->bindParam(":startDate", $_POST['startDate']);
        $stmt->bindParam(":endDate", $_POST['endDate']);
        $stmt->bindParam(":image", $_POST['image']);
        $stmt->execute();

    
    } ?>
    <a href="adminpanel-locations.php">back</a>