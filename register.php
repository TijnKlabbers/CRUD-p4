<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="css/register.css">
    
   </head>
<body>
  <?php include_once "includes/connect.php" ?>
  <div class="wrapper">
    <h2>Registration</h2>
    <form id="form" action="#" method="post">
      <div class="input-box">
        <input id="username" name="username" type="text" placeholder="Enter your name" required>
      <div class="error"></div>
      </div>
      <div class="input-box">
        <input id="password" name="password" type="password" placeholder="Create password" required>
        <div class="error"></div>
      </div>

      <div class="policy">
        <input type="checkbox" required>
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input name="submit" type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="index.php">Login now</a></h3>
      </div>
    </form>
    <?php 
      if(isset($_POST['submit'])){
        
        $sql = "INSERT INTO users (username, password)
        VALUES (:username, :password)";
  
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $_POST['password']);

        $stmt->execute();
        header("index.php");
      }
    ?>
  </div>
  <?php include_once "includes/footer.php" ?>
  <script src="js/register.js"></script>
</body>
</html>
