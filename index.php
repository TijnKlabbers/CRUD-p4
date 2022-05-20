<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <?php include_once "includes/header.php" ?>
<video autoplay loop muted plays-inline class= "back-video">
  <source src="Beach.mp4" type="video/mp4">
</video>

  <div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>


    <form action="index.php" method="post">
      <h3>login</h3>
      <input type="username" class="box" placeholder="enter your username" name="username">
      <input type="password" class="box" placeholder="enter your password" name="password">
      <input type="submit" value="login now" class="btn" name="loginButton">
      <input type="checkbox" id="remember">
      <label for="remember">remember me</label>
      <p>forget password? <a href="#">click here</a></p>
      <p>don't have an account? <a href="register.php">register now</a></p>
    </form>
    <?php
    
    if(isset($_POST['loginButton'])){
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        $resultCount = $stmt->rowCount();

        // var_dump($resultCount);


        if($resultCount > 0){
            header("Location: index.php");
        }
        else{
            header("Location: login.php");
        }
    }

?>

  </div>

  <section class="home" id="home".>
    <div class="content">

    <div class="container">
<form>

  <div class="wrapper">
    <p>search for your dream destination now!</p>
    <div class="search-container">
      <input type="text" class="search" placeholder="Location">
      <input type="text" class="date-from" placeholder="what kind of travel">
      <input type="text" class="date-to" placeholder="which month">
      <button type="submit" class="button">Search</button>
    </div>
  </div>
  
  
</form>
  

</div>

  
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="index.js"></script>
</body>

</html>