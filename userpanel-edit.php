<?php include "includes/connect.php";
        $sql = "SELECT * FROM users WHERE users_id = " . $_SESSION['users_id'];
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
?>
<form action="#" method="post">
    <label>username</label>
    <input name="username" type="text" value="<?php echo $result['username'] ?>">
    <label>password</label>
    <input name="password" type="text" value="<?php echo $result['password'] ?>">
    <button name="update">Update</button>
</form>
<?php
    if(isset($_POST['update'])){
        $sql = "UPDATE users
                SET username = :username, password = :password
                WHERE users_id = " . $_SESSION['users_id'] . "";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();

        header("Location: userpanel.php");
    
    } ?>
    <a href="adminpanel-locations.php">back</a>