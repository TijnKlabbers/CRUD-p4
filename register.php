<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <?php include_once "includes/header.php" ?>
    <div class="registerContainer">
        <div class="registerBox">
            <h3>Sign Up</h3>
            <form action="register.php" method="post">
                <input type="username" name="username" id="" placeholder="username">
                <input type="password" name="password" id="" placeholder="password">
                <input type="email" name="email" id="" placeholder="email">
                <input type="submit" class="btn" name="createUser">
            </form>
            <?php
            if(isset($_POST['createUser'])){
                $sql = "INSERT INTO users (username, password, email)
                VALUES (:username, :password, :email)";
                $stmt = $connect->prepare($sql);
                $stmt->bindParam(":username", $_POST['username']);
                $stmt->bindParam(":password", $_POST['password']);
                $stmt->bindParam(":email", $_POST['email']);
                $stmt->execute();
            }

            ?>
        </div>
    </div>
</body>
</html>