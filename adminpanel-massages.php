<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once "includes/connect.php";
    $sql = "SELECT * FROM contact WHERE contact_id = :contact_id";
    $contact_id = intval($_GET['contact_id']);
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":contact_id", $contact_id);
    $stmt->execute();
    $result = $stmt->fetch();
    ?>
    <p><?php echo $result['naam'] ?></p>
    <p><?php echo $result['email'] ?></p>
    <p><?php echo $result['bericht'] ?></p>
    <p><?php echo $result['telefoonNummer'] ?></p>
    <p><?php echo $result['subject'] ?></p>
    <form action="adminpanel-contact.php" method="post">
    <input type="hidden" value="<?php echo $result['contact_id'] ?>" name="id">
    <button name="delete">delete</button>
    </form>
    <a href="adminpanel-contact.php">back</a>
    <?php
    if(isset($_POST['delete'])){
        $sql = "DELETE FROM contact WHERE contact_id = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_POST['id']);
        $stmt->execute();
    }
    ?>

</body>
</html>